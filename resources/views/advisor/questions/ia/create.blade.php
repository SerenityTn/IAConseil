{!! Form::open(['route'=>'advisor.questions.ia.store']) !!}						
	<div class="form-group">
		{!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Question', 'size' => 'x4']) !!}			
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
<!--
	<div class="row">
		<div class="form-group col-md-12">				
			{!! Form::select('response_id', array_merge(['' => 'Affecter une réponse existante'], $responses->toArray()), null, ['class' => 'form-control']) !!}	
		</div>					
	</div> 		 
-->	