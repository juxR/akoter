@extends('account.layout')

@section('container')

<div class="hero">
	<div class="wrapper">

		<h2 aria-level="2" role="heading" class="mainTitle">{{trans('inscription.infos_general')}}</h2>
		<div class="intro">
			{{trans('inscription.infos_general_intro')}}
		</div>
	</div>
</div>
<div class="formContainer large">

	@include('includes.steps')

	{{Form::open(array('route'=>array('save_inscription_general', Auth::user()->slug, $building->id ),'class'=>'mainType rules','data-rules'=>json_encode(Building::$infos_general_rules)))}}

	@include('includes.errors')

	@include('includes.success')
	
<!-- 	<div class="field charge-form checkbox">
	<input type="checkbox" name="charge" id="charge">
		<label for="charge">
			{{trans('form.charge_included')}}
		</label>

		<label for="chargePrice" style="display:none;">{{trans('form.price_charge')}}</label>
		<input type="number" name="chargePrice" placeholder="{{trans('form.price_charge')}}" id="chargePrice">
		<div class="informations">
			{{trans('inscription.blank_charge_price')}}
		</div>
	</div> -->

	@foreach($options as $option)
	<div class="field">
		<label for="garantee">{{trans('inscription.garantee')}}</label>
		<input type="number" value="{{Helpers::isOk($building->garantee) ? $building->garantee: ( Session::has('inscription.localisation_input') ? Session::get('inscription.localisation_input') :'') }}"name="garantee" id="garantee" placeholder="{{trans('inscription.garantee_placeholder')}}">
	</div>
	@endforeach

	@foreach($situations as $situation)

	@if($situation->language_id == 1)
	<?php $situation_lang['fr'] = $situation->value; ?>
	@endif
	@if($situation->language_id == 2)
	<?php $situation_lang['en'] = $situation->value; ?>
	@endif
	@if($situation->language_id == 3)
	<?php $situation_lang['nl'] = $situation->value; ?>
	@endif
	@endforeach

	@foreach($adverts as $advert)

	@if($advert->language_id == 1)
	<?php $advert_lang['fr'] = $advert->value; ?>
	@endif
	@if($advert->language_id == 2)
	<?php $advert_lang['en'] = $advert->value; ?>
	@endif
	@if($advert->language_id == 3)
	<?php $advert_lang['nl'] = $advert->value; ?>
	@endif
	@endforeach

	<div class="tabs">
		<ul>
			@foreach(Config::get('var.langId') as $lang => $langId)
			<li><a href="#{{$lang}}-situation">{{trans('general.lang')[$lang]}}</a></li>
			@endforeach
		</ul>
		@foreach(Config::get('var.langId') as $lang => $langId)
		<div id="{{$lang}}-situation">
			<div class="field">
				<label for="situations[{{$lang}}]">{{trans('inscription.situations',array('lang'=>trans('general.lang')[$lang]))}}</label>
				<textarea name="situations[{{$lang}}]"  placeholder="{{trans('inscription.situations_placeholder')}}" id="situations[{{$lang}}]">{{Helpers::isOk($situation_lang[$lang]) ? $situation_lang[$lang] :''}}</textarea>
				<div class="informations">
					{{trans('inscription.situations_tuto')}}
				</div>
			</div>
		</div>
		@endforeach
	</div>		
	
	
	<div class="tabs">
		<ul>
			@foreach(Config::get('var.langId') as $lang => $langId)
			<li><a href="#{{$lang}}-advert">{{trans('general.lang')[$lang]}}</a></li>
			@endforeach

		</ul>
		@foreach(Config::get('var.langId') as $lang => $langId)
		<div id="{{$lang}}-advert">
			<div class="field">
				<label for="advert[{{$lang}}]">{{trans('inscription.write_advert',array('lang'=>trans('general.lang')[$lang]))}}</label>
				<textarea name="advert[{{$lang}}]" data-validator="false" class="{{Helpers::isOk($advert_lang[$lang]) ? 'editor': ''}}" id="advert[{{$lang}}]">{{Helpers::isOk($advert_lang[$lang]) ? $advert_lang[$lang] :''}}</textarea>
				<div class="informations">
					{{trans('inscription.write_advert_tuto')}}
				</div>
			</div>
		</div>
		@endforeach
		
	</div>

	<div class="field previous">

		<a href="{{route(Config::get('var.steps_routes.3'), array(Auth::user()->slug, $building->id))}}" title="{{trans('account.back_previous_step')}}">{{trans('general.back')}}</a>

	</div>

	<div class="field next">

		{{Form::submit(trans('form.next'))}}

	</div>
	{{Form::close()}}
</div>
@stop