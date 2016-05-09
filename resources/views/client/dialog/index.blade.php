@extends('client.layout')
@section('title')
	Système de dialogue
@stop
@section('buttons')
	Discuter avec notre robot pour répondre a des questions plus complexe
@stop
@section('body')
	@include('client.dialog.chatbox')
@stop