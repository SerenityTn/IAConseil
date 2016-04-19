@extends('private_layout') @section('menu') @include('advisor.menu')
@stop @section('body')

<h1>Liste des questions IA</h1>
<button data-toggle="modal" data-target="#addQuestion" class="btn btn-primary">
	<span class="glyphicon glyphicon-plus"></span>
	&nbsp;Nouveau
</button>
<div class="table-responsive">
	<table id="mytable" class="table table-bordred table-striped">
		<thead>
			<th><input type="checkbox" id="checkall" /></th>
			<th>Question</th>
			<th>Réponse</th>

			<th>Modifier</th>
			<th>Supprimer</th>
		</thead> 		
		<tbody>
			@foreach($iaquestions as $iaq)
			<tr>
				<td><input type="checkbox" class="checkthis" /></td>
				<td>{{ $iaq->content }}</td>
				<td>{{ $iaq->response }}</td>
				<td><p data-placement="top" data-toggle="tooltip" title="Modifier">
						<button class="btn btn-primary btn-xs" data-title="Modifier"
							data-toggle="modal" data-target="#edit">
							<span class="glyphicon glyphicon-pencil"></span>
						</button>
					</p></td>
				<td><p data-placement="top" data-toggle="tooltip" title="Supprimer">
						<button class="btn btn-danger btn-xs" data-title="Supprimer"
							data-toggle="modal" data-target="#delete">
							<span class="glyphicon glyphicon-trash"></span>
						</button>
					</p></td>
			</tr>
			@endforeach			
		</tbody>
	</table>

	<div class="clearfix"></div>
	<ul class="pagination">
		<li class="disabled">
			<a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a>
		</li>
		<li class="active"><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>		
		<li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
	</ul>
</div>

@include('advisor.modals.UpdateQuestionModal')
@include('advisor.modals.AddQuestionModal')
@include('common.modals.deleteModal')
@stop