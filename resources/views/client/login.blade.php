@extends('public_layout')
@section('body')
<div class="container">
<div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form action="/client/login" method="post">
			<fieldset>
				<h2>Connexion Client</h2>				
				<hr class="colorgraph">
				<div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Adresse Email">
				</div>
				<div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Mot de passe">
				</div>
				<span class="button-checkbox">
					<button type="button" class="btn" data-color="info">Se souvener de moi</button>
                    <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
					<a href="" class="btn btn-link pull-right">Mot de passe oublié ?</a>
				</span>
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" id = "_submit" name="_submit" class="btn btn-lg btn-success btn-block" value="Connexion">
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>
</div>
@section('scripts')
	<script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
@stop
@stop