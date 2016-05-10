{!! Form::open(['route' => ['advisor.clients.questions.responses.update', $question->id, $response->id]]) !!}				
	<div class="form-group">
		<div class="well">{{ $question->content }}</div>			
	</div>					
	<div class="form-group">
		{!! Form::textarea('text', $response->text, ['class' => 'form-control','size' => 'x6']) !!}			
	</div>				
	<div class="form-group col-md-4">
		<button type="submit" class="btn btn-success">
			<span class="glyphicon glyphicon-ok-sign"></span> Modifier la réponse
		</button>			
	</div>			
{!! Form::close() !!}