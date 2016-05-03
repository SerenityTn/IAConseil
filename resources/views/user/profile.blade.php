@extends(session()->get('role').'.layout')
@section('body')
	<div class="container">
		<div class="row">
			<div class="col-md-6">	
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">{{ auth()->user()->nom }}</h3>
					</div>
						@if (session('status'))
	    					<div class="alert alert-success">
					        {{ session('status') }}
	    					</div>
							@endif
					<div class="panel-body">
						<div class="row">
							<div class=" col-md-9 col-lg-9 ">
								<table class="table table-user-information">
									<tbody>
										<tr>
											<td>Nom :</td>
											<td>{{ auth()->user()->nom }}</td>
										</tr>
										<tr>
											<td>Prénom :</td>
											<td>{{ auth()->user()->prenom }}</td>
										</tr>
										<tr>
											<td>Société :</td>
											<td>{{ auth()->user()->societe }}</td>
										</tr>										
										<tr>
											<td>Ville</td>
											<td>{{ auth()->user()->ville }}</td>
										</tr>
										<tr>
											<td>Téléphone</td>
											<td>{{ auth()->user()->tel }}</td>
										</tr>
										<tr>
											<td>Site Web</td>
											<td>{{ auth()->user()->site_web }}</td>
										</tr>
										<tr>
											<td>Email</td>
											<td>{{ auth()->user()->email }}</td>
										</tr>
										<tr>
											<td>Mot de passe</td>
											<td>********</td>
										</tr>																										
									</tbody>
								</table>
								<a href="{{ route('user.profile.edit', ['id' => auth()->user()->id ]) }}" class="btn btn-primary">Editer vos informations</a>										 							
							</div>
						</div>
					</div>				
				</div>
			</div>
		</div>
	</div>
@stop
