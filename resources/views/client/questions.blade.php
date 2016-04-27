@extends('client.layout')
@section('body')
<div class="well"><h1>Mes questions</h1></div>
<div class="table-responsive">
	<table id="mytable" class="table table-bordred table-striped">
		<thead>
			<th><input type="checkbox" id="checkall" /></th>
			<th>Question</th>
			<th>Réponse</th>

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
					{{ Form::open(array('route' => ['client.questions.destroy', $question->id])) }}
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
@stop
