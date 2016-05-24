@extends('admin.layout')
@section('title')
	Gérer les utilisateurs
@stop
@section('buttons')
	@include('admin.users.filters')
	<button onclick="create_user()" data-toggle="modal" data-target="#modal" class="btn btn-primary">
		<span class="glyphicon glyphicon-plus"></span>
		Nouveau
	</button>
@stop
@section('body')
	@include('admin.users.list');
@stop
