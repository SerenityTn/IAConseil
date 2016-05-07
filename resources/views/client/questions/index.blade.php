@extends('client.layout')
@section('title')
	Liste des questions posées
@stop
@section('buttons')
	@include('client.questions.filters')
@stop
@section('body')
	@include('client.questions.list')
@stop
