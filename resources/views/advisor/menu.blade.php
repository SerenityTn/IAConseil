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
					<li><a href="{{ route('advisor.questions.client.index') }}">Questions Clients</a></li>
					<li><a href="{{ route('advisor.questions.ia.index') }}">Questions IA</a></li>
					<li><a href="{{ route('advisor.article.index') }}">Publications</a></li>																								
				</ul>
			</div>
		</div>
	</li>
	
	<li>
		<a href="#">
			<span class="glyphicon glyphicon-stats"></span>
			Statistiques
		</a>
	</li>
@stop