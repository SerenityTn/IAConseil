@extends('layout')

@section('container')
	<div class="col-md-3">
		@yield('menu')
	</div>
    <div class="container">
        <div class="row">               
            <div class="col-md-8">
                @yield('body')
            </div>            
        </div>
    </div>
@stop