@extends('advisor.layout')
@section('title')
	Liste des questions clients
@stop
@section('buttons')
	@include('advisor.client.questions.filters')
@stop
@section('body')	
	@include('advisor.client.questions.list')
@stop