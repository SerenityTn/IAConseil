@extends('public_layout')
@section('body')
	<legend>Contact</legend>
<div class="container col-md-6  col-md-offset-3">
	@if(session()->get('status'))
		<div class="alert alert-success">
				{{{ session()->get('status') }}}
		</div>
	@endif
	<form class="well form-horizontal" action="{{ route('message.store') }}" method="post">
		{{ csrf_field() }}
		<fieldset>
			<div  class="col-md-10 col-md-offset-1">
				<legend>Contactez nous!</legend>
				<?php
					$nom = "";
					$email = "";
					if(auth()->check()){
						$nom = auth()->user()->nom;
						$email = auth()->user()->email;
					}
				?>
				<!-- Text input-->
				<div class="form-group">
					<div class="inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i
								class="glyphicon glyphicon-user"></i></span>
								<input name="nom" placeholder="Nom" class="form-control"
								type="text" value="{{ $nom }}">
						</div>
					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<div class="inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i
								class="glyphicon glyphicon-envelope"></i></span>
								<input name="email" placeholder="Adresse E-Mail" class="form-control"
								type="text" value="{{ $email}}">
						</div>
					</div>
				</div>
				<!--  select list -->
				<div class="form-group">
					<div class="inputGroupContainer">
						<div class="input-group">
	        			<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
	    				<select name="sujet" class="form-control selectpicker" >
	      					<option value=" " disbaled>Sujet</option>
						    <option>Bug</option>
						    <option>Autres</option>
						</select>
						</div>
					</div>
				</div>

				<!-- Text area -->
				<div class="form-group">
					<div class="inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i
								class="glyphicon glyphicon-pencil"></i></span>
							<textarea class="form-control" name="contenu"
								placeholder="Votre message ici." cols = "8" rows="8"></textarea>
						</div>
					</div>
				</div>

				<!-- Button -->
				<div class="form-group">
						<button type="submit" class="btn btn-warning">
							Envoyer <span class="glyphicon glyphicon-send"></span>
						</button>
				</div>
			</div>
		</fieldset>
	</form>
</div>
@stop
