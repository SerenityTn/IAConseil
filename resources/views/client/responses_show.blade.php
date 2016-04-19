@extends('client.layout')
@section('body')	
	<div class="panel-heading">
		<h4>Votre question:</h4>
	</div>
	<div class="well">
		<p>
			{{ $q }}
		</p>
	</div>	


<div class="panel panel-info">
	<div class="panel-heading">
		<h5>
			Réponses proposer par notre IA, <span class="label label-primary">nombre des réponses</span>
		</h5>
	</div>
	<div class="panel-body">
		<div class="well">
			@foreach ($sq as $q)
				<?php
					$question = App\Question::find($q->id);							
					$rep = $question->responses()->first();							
				?>
				@if(!is_null($rep))
				<div class="row">
					<div class="col-md-12">					
						<p>
							{{ $rep->text }}
						<span class="pull-right">{{ $q->score }}</span></p>												
					</div>
				</div>					
				<hr>
				@endif 		
			@endforeach
			<div class="text-right">
				<a class="btn btn-success">Autres réponses</a>
			</div>					
		</div>
	</div>
</div>	
@stop
