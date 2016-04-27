@extends('admin.layout')
@section('body')
	<legend>{{ $message->sujet }}</legend>
	<p>{{ $message->contenu }}</p>
@stop