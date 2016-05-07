{!! Form::open(['route' => ['advisor.client.questions.update_index', $question->id], 'class' => 'form-inline']) !!}
	<a onclick="create_response()" class="btn btn-info" data-toggle="modal" data-target="#modal">
		<span class="glyphicon glyphicon-pencil"></span>
		Répondre à cette question
	</a>
	@if($question->is_ia == 0)
		<input type="hidden" name="is_ia" value="1"/>
		<button type="submit" class="btn btn-success">
			<span class="glyphicon glyphicon-plus"></span>
			Indexer cette question
		</button>
	@else
		<input type="hidden" name="is_ia" value="0"/>
		<button type="submit" class="btn btn-danger">
			<span class="glyphicon glyphicon-minus"></span>
			Supprimé de l'index
		</button>
	@endif
{!! Form::close() !!}	