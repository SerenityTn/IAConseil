@extends('public_layout') @section('body')
<div class="container">
	<h1 class="well">Formulaire d'inscription</h1>
	<div class="col-lg-12 well">
		<div class="row">
			<form method="POST">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-6 form-group">
							<label>Nom</label> <input name="nom" type="text" placeholder=""
								class="form-control">
						</div>
						<div class="col-sm-6 form-group">
							<label>Prénom</label> <input name="prenom" type="text"
								placeholder="" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label>Adresse Email</label> <input name="email" type="text"
							placeholder="Entrer votre adresse email.." class="form-control">
					</div>
					<div class="form-group">
						<label>Mot de passe</label> <input name="password" type="password"
							placeholder="Entrer votre mot de passe.." class="form-control">
					</div>
					<div class="form-group">
						<label>Adresse</label>
						<textarea name="adresse" placeholder="" rows="3"
							class="form-control"></textarea>
					</div>
					<div class="row">
						<div class="col-sm-4 form-group">
							<label>Ville</label> <input name="ville" type="tex	t"
								placeholder="" class="form-control">
						</div>
						<!--  <div class="col-sm-4 form-group">
								<label>State</label>
								<input name="state" type="text" placeholder="Enter State Name Here.." class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Zip</label>
								<input type="text" placeholder="Entrer votre code ZIP.." class="form-control">
							</div>		-->
					</div>
					<div class="row">
						<div class="col-sm-6 form-group">
							<label>Titre</label> <input type="text"
								placeholder="Enter Designation Here.." class="form-control">
						</div>
						<div class="col-sm-6 form-group">
							<label>Société</label> <input type="text"
								placeholder="Enter Company Name Here.." class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label>Numéro de téléphone</label> <input name="tel" type="text"
							placeholder="Votre numéro de téléphone.." class="form-control">
					</div>
					<div class="form-group">
						<label>Site web</label> <input name="web_site" type="text"
							placeholder="Entrer votre site web ici.." class="form-control">
					</div>
					<button type="button" class="btn btn-lg btn-info">Envoyer</button>
					<button type="reset" class="btn btn-lg btn-danger">Annuler</button>
				</div>
			</form>
		</div>
	</div>
</div>
@section('scripts')
<script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
@stop @stop
