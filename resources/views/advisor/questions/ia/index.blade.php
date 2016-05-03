@extends('advisor.layout')
@section('title')
	Liste des questions IA
@stop
@section('buttons')
	<button onclick="create_ia_question()" data-toggle="modal" data-target="#modal" class="btn btn-primary">
		<span class="glyphicon glyphicon-plus"></span>
		Nouvelle question
	</button>
@stop
@section('body')	
	<div class="table-responsive">
		<table id="mytable" class="table table-bordred table-striped">
			<thead>			
				<th>Question</th>
				<th>Réponse</th>		
			</thead> 		
			<tbody>
				@foreach($ia_questions as $iaq)
				<tr>				
					<td>{{ $iaq->content }}</td>
					<td>{{ $iaq->responses->isEmpty() ? "Aucune réponse n'est affecté" : $iaq->responses()->first()->text }}</td>
					<td>					
						<button onclick="show_ia_question({{ $iaq->id }})" data-toggle="modal" data-target="#modal" class="btn btn-info">
							<span class="glyphicon glyphicon-eye-open"></span>
						</button>									
	                </td>
	                <td>								
						<button onclick="edit_ia_question({{ $iaq->id }})" data-toggle="modal" data-target="#modal" class="btn btn-primary">
							<span class="glyphicon glyphicon-pencil"></span>		
						</button>     					
					</td>													
					<td>				
						<button onclick="delete_ia_question({{ $iaq->id }}, this)" data-toggle="modal" data-target="#delaeteModal" class="btn btn-danger">
							<span class="glyphicon glyphicon-trash"></span>
						</button>					
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		
		{!! $ia_questions->links() !!}	
	</div>	
@stop
@include('modal')
@include('common.modals.deleteModal', ['message' => 'Voulez vous vraiement supprimer cette question ?'])