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

			@if (auth()->user()->check_notif())
				 <span class="label label-danger"><b>{{ auth()->user()->check_notif() }}</b> réponse(s) </span></h1>
			@endif
		</a>
	</li>
	@if(auth()->user()->role == 4)
		<li>
			<a href="{{ route('client.dialog.index') }}">
				<span class="glyphicon glyphicon-console"></span>
				Système de dialogue
			</a>
		</li>
	@endif
@stop
