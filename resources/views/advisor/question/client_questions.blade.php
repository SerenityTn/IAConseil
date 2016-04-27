@extends('advisor.layout')
@section('body')
<legend><h2>Liste des questions clients</h2></legend>
<div class="row">	
	{!! Form::open(['route' => ['advisor.client_questions.index', 'ans'=>'false', 'for'=>'all'], 'class'=>'form-inline']) !!}
		<div class="form-group col-md-3">
			{!! Form::label('answered', "Question sans réponses :") !!}
			{!! Form::checkbox('answered', 'Questions sans réponse', 'true', ['class' => 'form-control']) !!}<br/>
		</div>
		<div class="form-group col-md-4">
			{!! Form::label('user_id', "Question d'un utilisateur :") !!}
			{!! Form::select('user_id', ['Ali', 'Mohamed'], null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group col-md-4">			
			{!! Form::submit('Filtrer', ['class'=>'form-control btn btn-success']) !!}
		</div>
	{!! Form::close() !!}
</div>
<hr/>
<div class="row">
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
				@foreach($questions as $question)
				<tr>
					<td><input type="checkbox" class="checkthis" /></td>
					<td>{{ $question->content }}</td>
					<td>
						@if(!is_null($question->firstResponse()))
							{{ $question->firstResponse()->text }}
						@endif
					</td>					
					<td>
						<p data-placement="top" data-toggle="tooltip" title="Modifier">
							<button class="btn btn-primary">
								<span class="glyphicon glyphicon-pencil"></span>
							</button>
						</p>
					</td>
					<td>					
						{{ Form::open(array('route' => ['advisor.client_questions.destroy', $question->id])) }}
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
</div>
@stop