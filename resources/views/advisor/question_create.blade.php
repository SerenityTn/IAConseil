@extends('advisor.layout')
@section('body')
<div class="container col-md-12">		
	{!! Form::open(['route'=>'question.store']) !!}		
		<h4>Ajouter une question</h4>
		<hr/>				
		<div class="form-group">
			{!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Question', 'size' => 'x4']) !!}			
		</div>		
		<div class="row">
			<div class="form-group col-md-12">				
				{!! Form::select('response_id', array_merge(['' => 'Affecter une réponse existante'], $responses->toArray()), null, ['class' => 'form-control']) !!}	
			</div>					
		</div>								
		<div class="form-group">
			{!! Form::textarea('text', null, ['class' => 'form-control', 'placeholder' => 'Réponse', 'size' => 'x6']) !!}			
		</div>			
		<div class="row">
			<div class="form-group col-md-4">
				<button type="submit" class="btn btn-success">
					<span class="glyphicon glyphicon-ok-sign"></span> Ajouter cette question
				</button>
			</div>	
		</div>		
	{!! Form::close() !!}
</div>	


@stop