<?php

use Carbon\Carbon;

class AccountController extends BaseController {

	public function __construct( )
	{
		
		$personnal = array(
			'first_name' => Auth::user()->first_name,
			'name' => Auth::user()->name,
			'email' => Auth::user()->email,
			'civility' => Auth::user()->civility,
			'address' => Auth::user()->address,
			'region' => Auth::user()->region_id,
			'locality' => Auth::user()->locality_id,
			'phone' => Auth::user()->phone,
			'postal' => Auth::user()->postal,

			);

		$this->request = User::getNumberRequest(Auth::user());
		$this->personnal = User::personnalsRequiredNotComplete( $personnal );

		View::share(array(
			'request'=>$this->request,
			'personnal'=>$this->personnal
			));
	}

	public function index(){


		/*$currentLocation = $user->currentLocation()->first();*/

		if(Auth::user()->isOwner == 1){

			$activeLocations = User::getActiveLocations( Auth::user() );

			$waitingLocations = User::getWaitingLocations( Auth::user() );



			$invalidLocations = User::getInvalidLocations( Auth::user() );


			return View::make('account.index', array('page'=>'account'))
			->with(compact(array('activeLocations','waitingLocations','invalidLocations','inactiveBuilding','numberRequest')));

		}


		return View::make('account.index', array('page'=>'account'));



	}

	public function personnalData(){

		$user = User::with(array(
			'region'=>Helpers::cacheEager('user_region'.Auth::user()->id),
			'region.translation'=>Helpers::cacheEager( 'user_region_trad'.Auth::user()->id ),
			'locality'=>Helpers::cacheEager('user_locality'.Auth::user()->id)))
		->whereId(Auth::user()->id)
		->remember(Config::get('var.remember'), 'user'.Auth::user()->id)
		->first();

		return View::make('account.personnals',array('page'=>'account', 'widget'=>array('city_autocomplete','validator','select')))
		->with(compact('user'));
	}

	public function savePersonnalData(){

		$input = Input::all();

		User::$personnals_rules['email'] = 'unique:users,email,'. Auth::user()->id .'| required | email |not_in:null';

		$validator = Validator::make($input, User::$personnals_rules);

		Session::put('account_personnal', $input);

		if($validator->passes()){

			$locality_id = Locality::where('name','like', $input['locality'] )->pluck('id');
			$region_id = Translation::whereKey('name')->where('content_type','Region')->where('value','like','%'. $input['region'] .'%')->pluck('content_id');
			$user = Auth::user();

			$user->first_name = $input['first_name'];
			$user->name = $input['name'];
			$user->civility = $input['civility'];
			$user->email = $input['email'];
			$user->email_bc = $input['email_bc'];
			$user->phone = $input['phone'];
			$user->pro = isset($input['pro']) ? $input['pro'] : 0;
			$user->address = $input['address'];
			$user->postal = $input['postal'];
			$user->first_name = $input['first_name'];
			$user->region_id = $region_id;
			$user->locality_id = $locality_id;

			$user->save();

			Session::forget('account-personnal');

			Cache::forget('user'.$user->id);
			Cache::forget('user_region'.$user->id);
			Cache::forget('user_region_trad'.$user->id);
			Cache::forget('user_locality'.$user->id);

			return Redirect::route('account_home', Auth::user()->slug);

		}else{

			$field = $validator->failed();

			return Redirect::route('account_personnal',Auth::user()->slug)
			->with(compact('field'))
			->withInput()
			->withErrors($validator);

		}
	}

	public function params(){

		$user = User::find(Auth::user()->id);

		return View::make('account.params',array('page'=>'account','widget'=>array('validator')))
		->with(compact('user'));

	}

	public function saveParams(){

		$input = Input::all();

		User::$params_rules['email'] = 'unique:users,email,'. Auth::user()->id .'| required | email |not_in:null';
		User::$params_rules['password'] = '';
		User::$params_rules['password_ck'] = 'same:password';

		Session::put('account_params', $input);

		$validator = Validator::make($input, User::$params_rules);

		if($validator->passes()){

			$language_id = Language::whereShort( $input['language'])->pluck('id');
			$user = Auth::user();

			$user->email = $input['email'];
			$user->language_id = $language_id;

			if( Helpers::isOk($input['password']) || Helpers::isOk($input['password_ck']) ){

				$user->password = Hash::make($input['password']);

			}

			$user->save();

			Session::forget('account_params');

			return Redirect::route('account_home', Auth::user()->slug);

		}else{

			$field = $validator->failed();

			return Redirect::route('account_params', Auth::user()->slug)
			->with(compact('field'))
			->withInput()
			->withErrors($validator);

		}
	}

	public function suspend(){

		if(Auth::user()->suspend == 0){

			$user = Auth::user();

			$user->suspend = 1;

			$user->save();

			Cache::forget('user'.Auth::user()->id);

			Auth::logout();

			return Redirect::route('home');

		}else{

			return Redirect::intended(route('account-params', Auth::user()->slug));

		}
	}

	public function  indexReactive(){

		$user = Session::get('user_reactive');

		Session::forget('user_reactive');

		return View::make('account.reactive',array('page'=>'reactive'))
		->with(compact('user'));
	}

	public function reactive( $slug, $id ){

		$user = User::find($id);
		$user->suspend = 0;
		$user->save();

		Auth::login($user);

		return Redirect::route('account_home', Auth::user()->slug);
	}

	public function delete(){

		if(Auth::user()->delete == 0){

			$user = Auth::user();

			$user->delete = 1;
			$user->deleted_at = Carbon::now();

			$user->save();

			Cache::forget('user'.Auth::user()->id);

			Auth::logout();

			return Redirect::route('home');

		}else{

			return Redirect::intended(route('account-params', Auth::user()->slug));

		}
	}


	public function indexUndelete(){

		$user = Session::get('user_delete');

		Session::forget('user_reactive');

		return View::make('account.undelete',array('page'=>'undelete'))
		->with(compact('user'));
	}

	public function undelete( $slug, $id ){

		$user = User::find($id);
		$user->delete = 0;
		$user->save();

		Auth::login($user);

		return Redirect::route('account_home', Auth::user()->slug);
	}

	public function how_be_owner( ){

		$personnal = array(
			'first_name' => Auth::user()->first_name,
			'name' => Auth::user()->name,
			'email' => Auth::user()->email,
			'civility' => Auth::user()->civility,
			'address' => Auth::user()->address,
			'region' => Auth::user()->region_id,
			'locality' => Auth::user()->locality_id,
			'phone' => Auth::user()->phone,
			'postal' => Auth::user()->postal,

			);

		$personnalNotComplete = User::personnalsRequiredNotComplete( $personnal );

		return View::make('account.owner.how_be', array('page'=>'account'))
		->with(compact('personnalNotComplete'));
	}

	public function editPhoto(){

		return View::make('account.photo',array('page'=>'photo'));
	}

	public function howBeTenant(){

		return View::make('account.tenant.how_be', array('page'=>'account'));
	}

	public function indexRequest($user_slug){

		$requests = Auth::user()->location()->with(array('request','translation'=>function($query){
			$query->whereKey('title');
		}))->get();

		return View::make('account.owner.request', array('page'=>'account'))
		->withRequests($requests);
	}
}