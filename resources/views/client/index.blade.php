@extends('private_layout')
@section('menu')
	@include('client.menu')
@stop 
@section('body')
<div class="row">
	<div class="panel panel-success">
	@foreach($questions as $question)
		<div>
			{{ $question->content }}
		</div>
	@endforeach	
		<form method="POST" action="">
			<div class="panel-heading">
				<h4>Poser une question ?</h4>
			</div>
			<div class="panel-body">
				<textarea class="form-control" rows="5" name="content"></textarea>
			</div>
			<div class="panel-footer">
				<div class="button-group">
					<button type="submit" class="btn btn-success">Envoyer</button>
					<button type="reset" class="btn btn-danger">Annuler</button>
				</div>
			</div>
		</form>
		<div class="panel panel-info">
			<div class="panel-heading">
				<h5>
					Réponses proposer par notre AI, <span class="label label-primary">
						nombre des réponses</span>
				</h5>
			</div>
			<div class="panel-body">
				<div class="well">
					<div class="text-right">
						<a class="btn btn-success">Autres réponses</a>
					</div>

					<hr>

					<div class="row">
						<div class="col-md-12">
							<span class="glyphicon glyphicon-star"></span> <span
								class="glyphicon glyphicon-star"></span> <span
								class="glyphicon glyphicon-star"></span> <span
								class="glyphicon glyphicon-star"></span> <span
								class="glyphicon glyphicon-star-empty"> </span> Anonymous <span
								class="pull-right">10 days ago</span>
							<p>Réponse 1</p>
						</div>
					</div>

					<hr>

					<div class="row">
						<div class="col-md-12">
							<span class="glyphicon glyphicon-star"></span> <span
								class="glyphicon glyphicon-star"></span> <span
								class="glyphicon glyphicon-star"></span> <span
								class="glyphicon glyphicon-star"></span> <span
								class="glyphicon glyphicon-star-empty"></span> Anonymous <span
								class="pull-right">12 days ago</span>
							<p>Réponse 2</p>
						</div>
					</div>

					<hr>

					<div class="row">
						<div class="col-md-12">
							<span class="glyphicon glyphicon-star"></span> <span
								class="glyphicon glyphicon-star"></span> <span
								class="glyphicon glyphicon-star"></span> <span
								class="glyphicon glyphicon-star"></span> <span
								class="glyphicon glyphicon-star-empty"></span> Anonymous <span
								class="pull-right">15 days ago</span>
							<p>Réponse 3</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop
