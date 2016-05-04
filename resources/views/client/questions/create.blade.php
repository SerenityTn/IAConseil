@extends('client.layout')
@section('title')
 Poser une question
@stop
@section('buttons')
Feedback <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span>
@stop
@section('body')		
	<div class="form-group">		
		<textarea class="form-control" required="required" placeholder="Question ?" id="content" rows="5"></textarea>
	</div>
	<div class="form-group">
		<button onclick = "ask()" class="btn btn-success">Envoyer</button>
	</div>	
	<div id="similar_questions">		
	</div>
@stop
