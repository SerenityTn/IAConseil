<div class="row">	
	{!! Form::open(['route' => ['advisor.questions.client.index', 'ans'=>'false', 'for'=>'all'], 'class'=>'form-inline']) !!}
		<div class="form-group col-md-3">
			{!! Form::label('answered', "Question sans réponses :") !!}
			{!! Form::checkbox('answered', 'Questions sans réponse', 'true', ['class' => 'form-control']) !!}<br/>
		</div>
		<div class="form-group col-md-4">
			{!! Form::label('user_id', "Question d'un utilisateur :") !!}
			{!! Form::select('user_id', ['Ali', 'Mohamed'], null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group col-md-4">			
			{!! Form::submit('Filtrer', ['class'=>'form-control btn btn-success']) !!}
		</div>
	{!! Form::close() !!}
</div>