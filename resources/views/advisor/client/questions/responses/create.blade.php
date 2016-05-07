<div class="well">
	{{ $question->content }}
</div>
{!! Form::open(['route' => ['advisor.client.questions.responses.store', 'question' => $question->id]]) !!}
	<div class="form-group">
		{{ Form::label('text','Réponse') }}
		{{ Form::textarea('text',null, ['class' => 'form-control']) }}
	</div>		
	<div class="form-group">
		<button type="submit" class="btn btn-success">
			<span class="glyphicon glyphicon-ok-sign"></span> Répondre
		</button>
	</div>		
{!! Form::close() !!}