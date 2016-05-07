{{ Form::open(['route' => ['advisor.ia.questions.update', $ia_question->id]]) }}
	{{ Form::hidden('_method', 'PUT') }}
	<div class="form-group">
		{!! Form::label('content', 'Question') !!}
		{!! Form::textarea('content', $ia_question->content, ['class' => 'form-control', 'size' => 'x6']) !!}			
	</div>
	<div class="form-group">
		{!! Form::label('text', 'Réponse') !!}		
		{!! Form::textarea('text', $ia_question->response()->text, ['class' => 'form-control', 'size' => 'x6']) !!}			
	</div>
	<button type="submit"  class="btn btn-success">Modifier cette question</button>
{!! Form::close() !!}