@extends('layout')

@section('container')

<ul>
	<li>{{link_to_route('inscriptionProprietaire','etape1')}}</li>
	<li>{{link_to_route('inscriptionProprietaireAccount','etape2')}}</li>
	<li>{{('etape3')}}</li>
	<li>{{('etape4')}}</li>
	<li>{{('etape5')}}</li>
</ul>
<fieldset>
	<legend>{{('Informations personnels')}}</legend>
	{{Form::open(array('url'=>'inscription/proprietaire/etape4'))}}
	{{Form::submit('Etape 4')}}
	{{Form::close()}}
</fieldset>

@stop