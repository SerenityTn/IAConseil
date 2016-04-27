@extends('advisor.layout')
@section('body')
<div class="container col-md-12">				
		<h4>Modifier une réponse</h4>
		<hr/>				
		<div class="form-group">
			<div class="well">$quesiton->content</div>			
		</div>					
		<div class="form-group">
			<div class="well">$quesiton->firstResponse()</div>			
		</div>					
</div>	
@stop