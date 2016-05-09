@extends('client.layout')
@section('title')
	Accueil
@stop
@section('body')
	<h4>Votre dernière question</h4>
	<div class="well">
		{{ auth()->user()->questions()->first()->content }}
	</div>
	<h4>Réponse(s)</h4>
	<div class="well">
		{{ auth()->user()->questions()->first()->responses()->first()->text }}
	</div>
@stop
