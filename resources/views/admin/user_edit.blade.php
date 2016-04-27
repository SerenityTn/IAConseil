@extends('admin.layout')
@section('body')
 <div class="well"><h2>Modifier l'utilisateur {{ Auth::user()->nom }}</h2></div>
 {{ Form::model($user, ['route' => ['admin.manage.users.update', $user->id]]) }}
                     {{ Form::hidden('_method', 'PUT') }}
 					<div class="col-sm-12">					
						<div class="row">
							<div class="col-sm-6 form-group">
								{!! Form::label('nom', 'Nom*') !!}
								{!! Form::text('nom', null, ['class' => 'form-control']) !!}
                               @if ($errors->has('nom'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                               @endif									
							</div>
							<div class="col-sm-6 form-group">
								{!! Form::label('prenom', 'Prénom*') !!}
								{!! Form::text('prenom', null, ['class' => 'form-control']) !!}
							</div>
						</div>
						<div class="row">					
							<div class="col-sm-6 form-group">
								{!! Form::label('email', 'Adresse Email*') !!}
								{!! Form::text('email', null, ['class' => 'form-control']) !!}
                               @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                               @endif										
							</div>
							<div class="col-sm-6 form-group">{!! Form::label('tel',
								'Téléphone*') !!} {!! Form::text('tel', null, ['class' =>
								'form-control']) !!}</div>
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
				</div>
				{!! Form::close() !!}
@stop