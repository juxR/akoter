@extends('layout.layout')

@section('container')

<div class="account">
<div class="wrapper">
<div class="row">
@include('includes.errors')
@include('includes.success')
@include('account.nav')

<div class="account-content">

@yield('account')

</div>
</div>
</div>
</div>

@stop