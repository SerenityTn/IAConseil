@extends('client.layout')
@section('body')	
{!! Form::open(['route'=>'question.store']) !!}	
	<div class="panel-heading">
		<h4>Poser une question ?</h4>
	</div>
	<div class="panel-body">
		{!!Form::textarea('content', null, ['size'=>'x5', 'class' => 'form-control', 'required' => 'required']) !!}		
	</div>
	<div class="panel-footer">
		<div class="button-group">
			<button type="submit" class="btn btn-success">Envoyer</button>
			<button type="reset" class="btn btn-danger">Annuler</button>
		</div>
	</div>
{!! Form::close() !!}
@stop
