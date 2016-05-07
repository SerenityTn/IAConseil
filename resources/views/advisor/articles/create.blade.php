{!! Form::open(['route'=>'advisor.articles.store']) !!}		
	<div class="form-group">
		{!!Form::select('theme_id',$themes->lists('name','id'),null, ['class' => 'form-control']) !!}
	</div>					
	<div class="form-group">
		{!!Form::text('title', null, ['class' => 'form-control', 'required' => 'required', 'placeholder'=>'Titre']) !!}
	</div>			
	<div class="form-group">
		{!!Form::textarea('content', null, ['size'=>'x8', 'class' => 'form-control', 'required' => 'required', 'placeholder'=>'Contenu']) !!}
	</div>			
	<div class="button-group">
		<button type="submit" class="btn btn-success">Créer</button>				
	</div>
{!! Form::close() !!}
