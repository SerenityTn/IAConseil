@extends('menu')
@section('menus')
	<li class="panel panel-default" id="dropdown">
		<a data-toggle="collapse" href="#manage-lvl1">
			<span class="glyphicon glyphicon-pencil"></span>
			Gérer
			<span class="caret"></span>
		</a>										
		<div id="manage-lvl1" class="panel-collapse collapse">
			<div class="panel-body">
				<ul class="nav navbar-nav">
					<li><a href="{{ route('advisor.clients.questions.index') }}">Questions Clients</a></li>
					<li><a href="{{ route('advisor.ia.questions.index') }}">Questions IA</a></li>
					<li><a href="{{ route('advisor.articles.index') }}">Publications</a></li>																								
				</ul>
			</div>
		</div>
	</li>
	
	<li>
		<a href="{{ route('advisor.stats') }}">
			<span class="glyphicon glyphicon-stats"></span>
			Statistiques
		</a>
	</li>
@stop