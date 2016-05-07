@extends('advisor.layout')
@section('body')
<div class="container col-md-12">		
	{!! Form::open(['route' => 'advisor.client_questions.store']) !!}		
		<h4>Modifier une réponse</h4>
		<hr/>				
		<div class="form-group">
			<div class="well">{{ $question->content }}</div>			
		</div>					
		<div class="form-group">
			{!! Form::textarea('text', $question->firstResponse()->text, ['class' => 'form-control', 'placeholder' => 'Réponse', 'size' => 'x6']) !!}			
		</div>			
		<div class="row">
			<div class="form-group col-md-4">
				<button type="submit" class="btn btn-success">
					<span class="glyphicon glyphicon-ok-sign"></span> Modifier la réponse
				</button>
				<a class="btn btn-danger" href="{{ route('advisor.client_questions.index') }}">Annuler</a>
			</div>	
		</div>		
	{!! Form::close() !!}
</div>	
@stop