{!! Form::model($article, ['route' => ['advisor.articles.update', 'article'=>$article->id]]) !!}
	{{ Form::hidden('_method', 'PUT') }}				
<div class="form-group">
	{!!Form::select('theme_id',$themes->lists('name','id'),null, ['class' => 'form-control']) !!}
</div>			


<div class="form-group">
	{!!Form::text('title', null, ['class' => 'form-control', 'required' => 'required', 'placeholder'=>'Titre']) !!}
</div>			
	

<div class="form-group">
	{!!Form::textarea('content', null, ['size'=>'x5', 'class' => 'form-control', 'required' => 'required', 'placeholder'=>'Contenu']) !!}
</div>					
<button type="submit" class="btn btn-success">Modifier</button>

{!! Form::close() !!}
