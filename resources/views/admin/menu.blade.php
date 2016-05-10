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
					<li><a href="{{ route('admin.users.index') }}">Utilisateurs</a></li>
					<li><a href="{{ route('admin.messages.index') }}">Messages</a></li>
				</ul>
			</div>
		</div>
	</li>
@stop