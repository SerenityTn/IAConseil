@extends('advisor.layout')
@section('body')
{!! Form::model($article, ['route' => ['advisor.article.update', 'article'=>$article->id]]) !!}
 

	{{ Form::hidden('_method', 'PUT') }}	
	<div class="col-md-11">
		<div class="row">	
			<h4>Créer un article</h4>
			<hr/>
		</div>	
		<div class="row">
			<div class="form-group">
				{!!Form::select('theme_id',$themes->lists('name','id'),null, ['class' => 'form-control']) !!}
			</div>			
		</div>		
		<div class="row">
			<div class="form-group">
				{!!Form::text('title', null, ['class' => 'form-control', 'required' => 'required', 'placeholder'=>'Titre']) !!}
			</div>			
		</div>		
		<div class="row">	
			<div class="form-group">
				{!!Form::textarea('content', null, ['size'=>'x5', 'class' => 'form-control', 'required' => 'required', 'placeholder'=>'Contenu']) !!}
			</div>		
		</div>	
		<div class="row">	
			<div class="button-group">
				<button type="submit" class="btn btn-success">Modifier</button>
				<button type="reset" class="btn btn-danger">Annuler</button>
			</div>
		</div>	
	</div>
{!! Form::close() !!}
@stop

