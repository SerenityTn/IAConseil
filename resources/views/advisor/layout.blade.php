@extends('private_layout')
@section('menu')
	@include('advisor.menu')
@stop
@section('scripts')
	<script type="text/javascript" src="{{ URL::asset('js/advisor/ia_questions.js') }}"></script>		
@stop