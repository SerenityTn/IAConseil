@extends('admin.layout')
@section('title')
	Gérer les messages
@stop
@section('body')
<div class="table-responsive">
	<table id="mytable" class="table table-bordred table-striped">
		<thead>			
			<th>Nom</th>			
			<th>Adresse Email</th>												
			<th>Sujet</th>
			<th>Contenu</th>							
		</thead>
		<tbody>				
			@foreach($messages as $message)
			<tr>										
				<td>{{ $message->nom }}</td>
				<td>{{ $message->email }}</td>
				<td>{{ $message->sujet }}</td>							
				<td>{{ $message->contenu }}</td>				
				<td>
					<button onclick="show_message({{ $message->id }})" data-toggle = "modal" data-target="#modal" class="btn btn-info">
						<span class="glyphicon glyphicon-eye-open"></span>
					</button>	
				</td>
				<td>		
					<button onclick="delete_message({{ $message->id }}, this)" data-toggle="modal" data-target="#delaeteModal" class="btn btn-danger">
						<span class="glyphicon glyphicon-trash"></span>
					</button>			                
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<div class="clearfix"></div>
	{{ $messages->links() }}
</div>
@stop
@include('modal')
@include('common.modals.deleteModal', ['message' => 'Voulez vous vraiement supprimer ce message ?'])