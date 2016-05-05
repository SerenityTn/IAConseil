@extends('layout')

@section('container')
	<div class="col-md-3">
		@yield('menu')
	</div>
    <div class="container col-md-9"> 
    	<legend>
    		@yield('title')
    	</legend>
    	<div class="button-group">
    		@yield('buttons')
    	</div>
    	<hr/>
    	<div id="notif">
			@if(session('status'))
				<div class="alert alert-success fade in">
				 	<a href='#' class='close' data-dismiss='alert' aria-label='close' title='close'>&times;</a>		
					{{ session('status') }}
				</div>
			@endif
		</div>
		<div id="main"> 
			@yield('body')
		</div>                    
    </div>
    @include('modal')
	@include('common.modals.deleteModal', ['message' => 'Voulez vous vraiement supprimer cet utilisateur ?'])
@stop
