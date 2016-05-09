@extends('client.layout')
@section('title')
	Accueil
@stop
@section('body')
	<h4>Votre dernière question</h4>
	@if(auth()->user()->question())
		<div class="well">		
			{{ auth()->user()->question()->content }}
		</div>
	@endif
	<h4>Réponse(s)</h4>
	@if(auth()->user()->question() && auth()->user()->question()->responses()->first())
		<div class="well">	
			{{ auth()->user()->question()->responses()->first()->text }}
		</div>
	@endif
@stop
