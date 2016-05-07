@extends('menu')
@section('menus')
	<li {{{ (Request::is('client.questions') ? 'class=active' : '') }}}>
		<a href="{{ route('client.questions.create') }}">
		<span class="glyphicon glyphicon-question-sign"></span> 
		Poser une question
		</a>
	</li>
	<li {{{ (Request::is('question.create') ? 'class=active' : '') }}}>
		<a href="{{ route('client.questions.index') }}">
			<span class="glyphicon glyphicon-th-list"></span> 
			Mes questions
		</a>
	</li>								
	<li>
		<a href="#">
			<span class="glyphicon glyphicon-stats"></span> 
			Statistiques
		</a>
	</li>
@stop