@extends('private_layout')
@section('menu')
	@include('client.menu')
@stop
@section('scripts')
	<script type="text/javascript" src="{{ URL::asset('js/client/questions.js') }}"></script>
@stop