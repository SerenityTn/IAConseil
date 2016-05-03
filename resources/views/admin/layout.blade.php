@extends('private_layout')
@section('menu')
	@include('admin.menu')
@stop
@section('scripts')
	<script type="text/javascript" src="{{ URL::asset('js/admin/users.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/admin/messages.js') }}"></script>
@stop