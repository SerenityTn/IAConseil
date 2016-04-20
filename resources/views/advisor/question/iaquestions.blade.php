@extends('advisor.layout')
@section('body')
<div class="well"><h1>Liste des questions IA</h1></div>
<div class="button-group">
	<a href="{{ route('advisor.question.create') }}" class="btn btn-primary">
		<span class="glyphicon glyphicon-plus"></span>
		&nbsp;Nouveau
	</a>
	<a href="{{ route('advisor.question.create') }}" class="btn btn-info ">
		<span class="glyphicon glyphicon-pencil"></span>
		&nbsp;Modifier Questions & Réponses
	</a>
</div>

<div class="table-responsive">
	<table id="mytable" class="table table-bordred table-striped">
		<thead>
			<th><input type="checkbox" id="checkall" /></th>
			<th>Question</th>
			<th>Réponse</th>

			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</thead> 		
		<tbody>
			@foreach($iaquestions as $iaq)
			<tr>
				<td><input type="checkbox" class="checkthis" /></td>
				<td>{{ $iaq->content }}</td>
				<td>{{ $iaq->responses->isEmpty() ? "Aucune réponse n'est affecté" : $iaq->responses()->first()->text }}</td>
				<td>
					<p data-placement="top" data-toggle="tooltip" title="Modifier">
						<button class="btn btn-primary btn-xs" data-title="Modifier"
							data-toggle="modal" data-target="#edit">
							<span class="glyphicon glyphicon-pencil"></span>
						</button>
					</p>
				</td>
				<td>
				{{ Form::open(array('route' => ['question.delete', $iaq->id])) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    <button type="submit" class = "btn btn-danger">
                    	<span class="glyphicon glyphicon-trash"></span>
                    </button>                    
                {{ Form::close() }}	
				</td>
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

@include('common.modals.deleteModal')

@stop