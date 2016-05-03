@extends('advisor.layout')
@section('title')
	Détails question Client
@stop
@section('buttons')
	@if($question->is_ia == 0)
		<button class="btn btn-success" href="#">
			<span class="glyphicon glyphicon-plus"></span>
			Indexer cette question
		</button>
	@else
		<button class="btn btn-danger" href="#">
			<span class="glyphicon glyphicon-plus"></span>
			Supprimé de l'index
		</button>
	@endif
	<button class="btn btn-success">Répondre à cette question</button>
@stop
@section('body')
<div class="container col-md-12">									
		<h4>Question</h4>		
		<div class="form-group">
			<div class="well">{{ $question->content }}</div>			
		</div>		
		@if(!$question->response())
			<span class="error"> Aucune réponse n'est affecté a cette question </span>
		@else			
			<h4>Réponse(s)</h4>
			@foreach($question->responses as $response)				
				<div class="form-group">
					<div class="well">@if(!is_null($response)) {{ $response->text }} @endif</div>			
				</div>
				<div class="button-group">
					<button class="btn btn-primary" href="#">
						<span class="glyphicon glyphicon-pencil"></span>					
					</button>
					<button class="btn btn-danger" href="#">
						<span class="glyphicon glyphicon-trash"></span>					
					</button>
				</div>
				<hr/>
			@endforeach
		@endif
		
		@if(session('status'))
		<div class="alert alert-success">
			{{ session('status') }}
		</div>
		@endif
</div>	
@stop