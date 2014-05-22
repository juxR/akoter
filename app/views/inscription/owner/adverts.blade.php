@extends('account.layout')

@section('container')
<div class="hero">
	<div class="wrapper">

		<h2 aria-level="2" role="heading" class="mainTitle">{{trans('inscription.advert')}}</h2>
		<div class="intro">
			{{trans('inscription.advert_intro')}}
		</div>
	</div>
</div>
<div class="formContainer large">
	
	@include('includes.steps')

	{{Form::open(array('route'=>array('save_inscription_adverts', Auth::user()->slug, $building->id),'class'=>'mainType'))}}


	<div class="requiredField"><span class="icon-required" aria-hidden="true"></span>{{trans('form.required_field')}}</div>

	@include('includes.errors')

	@include('includes.success')

	<div class="tabs">
		<ul>
			@foreach($locations as $location)
			
			<li><a href="#{{$location->id}}-advert">{{$location->typeLocation->translation[0]->value}} {{$location->id}}</a></li>
			@endforeach
		</ul>

		@foreach($locations as $location)
		<div id="{{$location->id}}-advert">
			
			@if($location->nb_locations > 1)
			<div class="informations">{{trans('inscription.groupAdvert',array('number'=>$location->nb_locations,'type'=>strtolower($location->typeLocation->translation[0]->value)))}} </div>
			@endif
			<div class="tabs">
				<ul>
					@foreach(Config::get('var.langId') as $lang => $langId)

					<li><a class="{{$lang}}" href="#{{$lang}}-title">{{trans('general.lang')[$lang]}}</a></li>
					@endforeach
				</ul>
					<?php $titleData = $locationsData[$location->id][0]->translations->reverse()->lists('value','language_id'); ?>

				@foreach(Config::get('var.langId') as $lang => $langId)

				<div id="{{$lang}}-title">
					<div class="field">
						<label for="location_{{$location->id}}[title][{{$lang}}]">{{trans('form.titleAdvert',array('lang'=>trans('general.lang')[$lang]))}}</label>
						<input type="text" value="{{isset($titleData[$langId]) ? $titleData[$langId]:( isset(Session::get('adverts')['location_'.$location->id]) ? Session::get('adverts')['location_'.$location->id]['title'][$lang]:'')}}" {{App::getLocale() == $lang ? 'required' :''}} name="location_{{$location->id}}[title][{{$lang}}]" id="{{$location->id}}[title][{{$lang}}]" placeholder="{{trans('form.titleAdvert',array('lang'=>trans('general.lang')[$lang]))}}">
					</div>
				</div>
				@endforeach
			</div>

			<div class="field">
				<label for="location_{{$location->id}}[price]">{{trans('form.price')}} / {{trans('general.perMonth')}}</label>
				<div class="input-price">
					<input type="number" min="0" value="{{isset($locationsData) ? $locationsData[$location->id][0]->price : (isset(Session::get('adverts')['location_'.$location->id]) ? Session::get('adverts')['location_'.$location->id]['price'] : '')}}" required name="location_{{$location->id}}[price]" id="location_{{$location->id}}[price]" placeholder="{{trans('form.price')}}">
				</div>
			</div>

			<div class="field">
				<label for="location_{{$location->id}}[size]">{{trans('form.size')}} (m<sup>2</sup>)</label>
				<div class="input-size icon-meter2">
					<input type="number" value="{{isset($locationsData) ? $locationsData[$location->id][0]->size : (isset(Session::get('adverts')['location_'.$location->id]) ? Session::get('adverts')['location_'.$location->id]['size'] : '')}}" min="0" required name="location_{{$location->id}}[size]" id="location_{{$location->id}}[size]" placeholder="{{trans('form.size')}}">
				</div>
			</div>

			<div class="field">
				<label for="location_{{$location->id}}[floor]">{{trans('form.floor')}} </label>
				<input type="number" value="{{isset($locationsData) ? $locationsData[$location->id][0]->floor : (isset(Session::get('adverts')['location_'.$location->id]) ? Session::get('adverts')['location_'.$location->id]['floor'] : '')}}"  min="0" name="location_{{$location->id}}[floor]" id="location_{{$location->id}}[floor]" required placeholder="{{trans('form.floor')}}">
				<div class="informations">{{trans('inscription.floor_help')}}</div>
			</div>

			<div class="field">
				<label for="location_{{$location->id}}[room]">{{trans('form.room')}} </label>
				<input type="number" value="{{isset($locationsData) ? $locationsData[$location->id][0]->nb_room : (isset(Session::get('adverts')['location_'.$location->id]) ? Session::get('adverts')['location_'.$location->id]['room'] : '')}}" min="0" name="location_{{$location->id}}[room]" id="location_{{$location->id}}[room]" required placeholder="{{trans('form.room')}}">
				<div class="informations">
					{{trans('inscription.room_available_help')}}
				</div>
			</div>

			<div class="field charge-form checkbox">
				<input type="checkbox" {{isset($locationsData) && $locationsData[$location->id][0]->charge_type == 0 ? 'checked' :(isset(Session::get('adverts')['location_'.$location->id]['charge']) ? 'checked': '')}}  name="location_{{$location->id}}[charge]" id="location_{{$location->id}}[charge]">
				<label for="location_{{$location->id}}[charge]">
					{{trans('form.charge_included')}}
				</label>

				<label for="location_{{$location->id}}[chargePrice]" style="display:none;">{{trans('form.price_charge')}}</label>
				<input type="number" value="{{isset($locationsData) ? $locationsData[$location->id][0]->charge_price : (isset(Session::get('adverts')['location_'.$location->id]) ? Session::get('adverts')['location_'.$location->id]['chargePrice'] : '')}}"  min="0" name="location_{{$location->id}}[chargePrice]" title="{{trans('form.price_charge')}} / {{trans('general.perMonth')}}" placeholder="{{trans('form.price_charge')}} / {{trans('general.perMonth')}}" id="location_{{$location->id}}[chargePrice]">
				<div class="informations">
					{{trans('inscription.blank_charge_price')}}
				</div>


			</div> 
			<div class="field">
				<label for="location_{{$location->id}}[garantee]">{{trans('inscription.garantee')}}</label>
				<input type="number" value="{{isset($locationsData) ? $locationsData[$location->id][0]->garantee : (isset(Session::get('adverts')['location_'.$location->id]) ? Session::get('adverts')['location_'.$location->id]['garantee'] : '')}}" name="location_{{$location->id}}[garantee]" id="location_{{$location->id}}[garantee]" placeholder="{{trans('inscription.garantee_placeholder')}}">
			</div>
			<div class="field checkbox">
				<input type="checkbox" {{isset($locationsData) && $locationsData[$location->id][0]->available == 1 ? 'checked' :(isset(Session::get('adverts')['location_'.$location->id]) ? 'checked': '')}}  name="location_{{$location->id}}[available]" id="location_{{$location->id}}[available]">
				<label for="location_{{$location->id}}[available]">{{trans('form.isAvailableLocation')}}</label>

			</div>

			<div class="group date">
				<div class="field">
					{{Form::label('location_'.$location->id.'[start_date]', trans('form.start_date'),array('aria-hidden'=>'false'))}}
					<div class="input-date icon-calendar68">
						{{Form::text('location_'.$location->id.'[start_date]',isset($locationsData) ? Helpers::dateNaForm($locationsData[$location->id][0]->start_date) : (isset(Session::get('adverts')['location_'.$location->id]) ? Helpers::dateNaForm(Session::get('adverts')['location_'.$location->id]['start_date']) : '') ,array('class'=>'datepicker','title'=>trans('form.start_date'),'placeholder'=>trans('form.start_date2')))}}
					</div>
				</div>
				<div class="field">
					{{Form::label('location_'.$location->id.'[end_date]', trans('form.end_date'),array('aria-hidden'=>'false'))}}
					<div class="input-date icon-calendar68">
						{{Form::text('location_'.$location->id.'[end_date]', isset($locationsData) ? Helpers::dateNaForm($locationsData[$location->id][0]->end_date) : (isset(Session::get('adverts')['location_'.$location->id]) ? Helpers::dateNaForm(Session::get('adverts')['location_'.$location->id]['end_date']) : '') ,array('class'=>'datepicker','title'=>trans('form.end_date'),'placeholder'=>trans('form.end_date2')))}}
					</div>
				</div>
			</div>

			<div class="field checkbox">
				<input type="checkbox" {{isset($locationsData) && $locationsData[$location->id][0]->comments_status == 1 ? 'checked' :(isset(Session::get('adverts')['location_'.$location->id]['comments']) ? 'checked' : '')}}  name="location_{{$location->id}}[comments]" id="location_{{$location->id}}[comments]">
				<label for="location_{{$location->id}}[comments]">{{trans('form.allowingComments')}}</label>
				<div class="informations">
					{{trans('inscription.allow_comments_infos')}}
				</div>

			</div>

			<div class="field checkbox">
				<input type="checkbox" {{isset($locationsData) && $locationsData[$location->id][0]->accessible == 1 ? 'checked' :(isset(Session::get('adverts')['location_'.$location->id]['accessible']) ? 'checked' : '')}}  name="location_{{$location->id}}[accessible]" id="location_{{$location->id}}[accessible]">
				<label for="location_{{$location->id}}[accessible]">{{trans('form.accessible')}}</label>
				<div class="informations">
					{{trans('inscription.accessible_infos')}}
				</div>

			</div>
			@if($options->count())
			<div class="group">
				<div class="label">{{trans('form.options')}}:</div>
				<div class="row">

					@foreach($options as $option)
					<div class="field listCheckbox">
						<input type="checkbox" {{isset($locationsData) && isset($locationsData[$location->id][0]->option[$option->id]) ? 'checked' :(isset(Session::get('adverts')['location_'.$location->id]['option'][$option->id]) ? 'checked' : '')}}  name="location_{{$location->id}}[option][{{$option->id}}]" id="location_{{$location->id}}[option][{{$option->id}}]">
						@if(isset($option->translation[0]))

						<label for="location_{{$location->id}}[option][{{$option->id}}]">{{$option->translation[0]->value}}</label>

						@endif

					</div>

					@endforeach
				</div>
			</div>
			@endif

			@if($particularities->count())
			<div class="group">
				<div class="label">{{trans('form.particularities')}}:</div>
				<div class="row">

					@foreach($particularities as $particularity)

					<div class="field listCheckbox">
						<input type="checkbox" {{isset($locationsData) && isset($locationsData[$location->id][0]->particularity[$particularity->id]) ? 'checked' :(isset(Session::get('adverts')['location_'.$location->id]['particularity'][$particularity->id]) ? 'checked' : '')}}  name="location_{{$location->id}}[particularity][{{$particularity->id}}]" id="location_{{$location->id}}[particularity][{{$particularity->id}}]">
						@if(isset($particularity->translation[0]))

						<label for="location_{{$location->id}}[particularity][{{$particularity->id}}]">{{$particularity->translation[0]->value}}</label>

						@endif

					</div>

					@endforeach
				</div>
			</div>
			@endif
			<div class="tabs">
				<ul>
					@foreach(Config::get('var.langId') as $lang => $langId)

					<li><a class="{{$lang}}" href="#{{$lang}}-advert">{{trans('general.lang')[$lang]}}</a></li>
					@endforeach
				</ul>
				<?php $advertData = $locationsData[$location->id][0]->translations->lists('value','language_id'); ?>
				@foreach(Config::get('var.langId') as $lang => $langId)

				<div id="{{$lang}}-advert">
					<div class="field">
						<label for="location_{{$location->id}}[advert][{{$lang}}]">{{trans('inscription.advert_in',array('lang'=>trans('general.lang')[$lang]))}}</label>
						<textarea name="location_{{$location->id}}[advert][{{$lang}}]" id="location_{{$location->id}}[advert][{{$lang}}]" class="{{Helpers::isOk($advertData[$langId]) ? 'editor': ''}}">{{isset($advertData[$langId]) ? $advertData[$langId] :( isset(Session::get('adverts')['location_'.$location->id]['advert']) ? Session::get('adverts')['location_'.$location->id]['advert'][$lang]:'')}}</textarea>
					</div>
				</div>
				@endforeach
			</div>
			@endforeach
		</div>

		<div class="field previous">
			<a href="{{route('account_home', Auth::user()->slug)}}" title="{{trans('account.back_home')}}">{{trans('general.back')}}</a>
		</div>
		<div class="field next">
			{{Form::submit(trans('form.next'))}}
		</div>
		{{Form::close()}}
	</div>
	@stop