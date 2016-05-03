{!! Form::open(['route'=>'admin.users.store', 'id' => 'create_user']) !!}	
		<div class="row">
			<div class="col-sm-6 form-group">
				{!! Form::label('nom', 'Nom*') !!}
				{!! Form::text('nom', null, ['class' => 'form-control']) !!}
			</div>
			<div class="col-sm-6 form-group">
				{!! Form::label('prenom', 'Prénom*') !!}
				{!! Form::text('prenom', null, ['class' => 'form-control', 'data-validation'=>'date',	 'data-validation-format'=>'yyyy-mm-dd']) !!}
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 form-group">
				{!! Form::label('email', 'Adresse Email*') !!} {!!
				Form::text('email', null, ['class' => 'form-control']) !!}				
			</div>
			<div class="col-sm-6 form-group">
				{!! Form::label('tel', 'Téléphone*') !!}
				{!! Form::text('tel', null, ['class' => 'form-control']) !!}
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 form-group">
				{!! Form::label('password', 'Mot de passe*') !!}
				{!! Form::password('password', ['class' => 'form-control']) !!}				
			</div>
			<div
				class="col-sm-6 form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
				{!! Form::label('password', 'Confirmation de mot de passe*') !!}
				{!! Form::password('password_confirmation', ['class' => 'form-control','required' => 'required']) !!}
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 form-group">
				{!! Form::label('ville','Ville*') !!}
				{!! Form::text('ville', null, ['class' => 'form-control']) !!}
			</div>
			<div class="col-sm-6 form-group">
				{!! Form::label('adresse', 'Adresse') !!}
				{!! Form::text('adresse', null, ['class' => 'form-control']) !!}
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 form-group">
				{!! Form::label('societe', 'Société') !!}
				{!! Form::text('societe', null, ['class' => 'form-control']) !!}
			</div>
			<div class="col-sm-6 form-group">
				{!! Form::label('site_web', 'Site web') !!}
				{!! Form::text('site_web', null, ['class' => 'form-control']) !!}
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 form-group">
				{!! Form::label('role', 'Role') !!}
				{!! Form::select('role', ["1"=>"Administrateur", "2" => "Expert", "3" => "Client"], null, ['class' => 'form-control']) !!}
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3 form-group">
				{!! Form::submit('Confirmer', ['class' => 'form-control btn btn-success']) !!}
			</div>
			<div class="col-sm-3 form-group">
				{!! Form::reset('Annuler', ['class' => 'form-control btn btn-warning']) !!}
			</div>
		</div>	
{!! Form::close() !!}

<script type="text/javascript" src="{{ URL::asset('js/form/custom_form.js') }}"></script>
