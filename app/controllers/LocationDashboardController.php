<?php

use Carbon\Carbon;

class LocationDashboardController extends AccountBaseController {

	public function __construct( )
	{	
		$params = Route::current()->parameters();
		if(isset($params['location_id'])){
			$this->location = Route::current()->parameters()['location_id'];
		}	
		View::share(array(
			'request'=>$this->nb_request(),
			'personnal'=>$this->personnalComplete(),
			'location'=>$this->location,
			));
	}

	public function index($user_slug, $location){

		$photo = $location->accroche->first();

		$nb_requestMonth = $location->request()->where('user_location.created_at','>', Carbon::now()->subMonth())->count();

		$nb_tenantsMonth = $location->tenants()->whereBetween('user_location.begin', array(Carbon::now(), Carbon::now()->addMonth()))->orderBy('begin','asc')->count();

		$nb_oldTenants = $location->oldTenants()->count();

		$nb_comments = $location->comment()->count();

		$percent = Location::getPercentComplete( $location );

		return View::make('account.owner.dashboard.index',array('page'=>'dashboard','widget'=>array('circles')))
		->with(compact('photo','nb_requestMonth','nb_tenantsMonth','nb_oldTenants','nb_comments'));
	}
	public function requests( $user_slug, $location ){

		$requests = $location->with(array('request','translation'=>function($query){
			$query->whereKey('title');
		}))->get();

		return View::make('account.owner.dashboard.requests', array('page'=>'dashboard'))
		->with(compact('requests'));
	}	
	public function desactiveComment( $user_slug, $location, $comment_id){

		$comment = LocationComment::findOrFail($comment_id);
		$comment->validate = 0;
		$comment->save();

		return Redirect::back()
		->withSuccess(trans('validation.custom.desactivedComment'));

	}

	public function deleteComment( $user_slug, $location, $comment_id){

		$comment = LocationComment::findOrFail($comment_id);
		$comment->delete();

		return Redirect::back()
		->withSuccess(trans('validation.custom.deletedComment'));

	}

	public function activeComment( $user_slug, $location, $comment_id){

		$comment = LocationComment::findOrFail($comment_id);
		$comment->validate = 1;
		$comment->save();

		return Redirect::back()
		->withSuccess(trans('validation.custom.activedComment'));

	}
	public function likes( $user_slug, $location ){

		$comments = $location->comment()->get();

		return View::make('account.owner.dashboard.comments',array('page'=>'dashboard'))
		->with(compact('comments'));

	}

	public function requestLike( $user_slug, $location ){

		$users = $location->oldTenants()->get();

		if($users->count() > 0){

			foreach($users as $user){

				Mailgun::send('emails.requestLike', array('user'=>$user,'location'=>$location), function($message) use($user, $location){

					$message
					->to($user->email, $user->first_name.' '.$user->name)
					->subject(Helpers::translate('Demande d\'appréciation pour la location n°:'.$location->id,'fr',Config::get('var.lang')[$user->language_id]))
					->from(Auth::user()->email, Auth::user()->first_name.' '.Auth::user()->name);

				});
			}
		}

		return Redirect::back()
		->withSuccess(trans('validation.custom.requestLikeSend'));

	}
	public function indexTenants( $user_slug, $location ){

		$tenants = $location->tenants()->get();

		$all = $location->AllTenants()->orderBy('begin')->get();

		return View::make('account.owner.dashboard.tenants',array('page'=>'dashboard'))
		->with(compact('tenants','all'));
	}

	public function desactivateLocation( $user_slug, $location ){

		$location->available = 0;
		$location->save();

		return Redirect::back()
		->withSuccess(trans('validation.custom.locationWellDesactivate'));
	}

	public function activateLocation( $user_slug, $location ){

		$location->available = 1;
		$location->save();

		return Redirect::back()
		->withSuccess(trans('validation.custom.locationWellActivate'));
	}

}