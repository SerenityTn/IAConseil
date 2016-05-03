@extends('client.layout')
@section('body')
	<div class="container">
		<div class="row">
			<div class="col-md-6">	
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">{{ auth()->user()->nom }}</h3>
					</div>
					

					@if (count($errors) > 0)
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif

					<div class="panel-body">
						<div class="row">	
							<div class=" col-md-9 col-lg-9 ">
								{!! Form::model(auth()->user(), ['route' => ['user.profile.update', auth()->user()->id], 'method'=>'put']) !!}
								<table class="table table-user-information">
									<tbody>
										<tr>
											<td>Nom :</td>
											<td>{!! Form::text('nom', null , ['class' => 'form-control']) !!}</td>																					
										</tr>
										<tr>
											<td>Prénom :</td>
											<td>{!! Form::text('prenom', null , ['class' => 'form-control']) !!}</td>
										</tr>
										<tr>
											<td>Société :</td>
											<td>{!! Form::text('societe', null , ['class' => 'form-control']) !!}</td>
										</tr>										
										<tr>
											<td>Ville</td>
											<td>{!! Form::text('ville', null , ['class' => 'form-control']) !!}</td>
										</tr>
										<tr>
											<td>Téléphone</td>
											<td>{!! Form::text('tel', null , ['class' => 'form-control']) !!}</td>
										</tr>
										<tr>
											<td>Site Web</td>
											<td>{!! Form::text('site_web', null , ['class' => 'form-control']) !!}</td>
										</tr>
										<tr>
											<td>Email</td>
											<td>{!! Form::text('email', null , ['class' => 'form-control']) !!}</td>						
										</tr>
										<tr>
											<td>Ancien Mot de passe</td>
											<td><input type="password" name="old_password" class="form-control"/></td>											
										</tr>
										<tr>
											<td>Nouveau Mot de passe</td>
											<td><input type="password" name="password" class="form-control"/></td>
										</tr>																										
									</tbody>
								</table>
								<button type="submit" class="btn btn-primary">Enregistrer vos informations</button>										 							
								{!! Form::close() !!}								
							</div>
						</div>
					</div>				
				</div>
			</div>
		</div>
	</div>
@stop
