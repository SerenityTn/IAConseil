@extends('advisor.layout')
@section('title')
	Liste des questions clients
@stop
@section('buttons')
	@include('advisor.clients.questions.filters')
@stop
@section('body')	
	@include('advisor.clients.questions.list')
@stop