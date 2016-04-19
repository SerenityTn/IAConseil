@extends('layout')

@section('container')
	<div class="col-md-3">
		@yield('menu')
	</div>
    <div class="container col-md-9">
        <div class="row">                           
			@yield('body')            
        </div>
    </div>
@stop