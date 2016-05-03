@extends('client.layout')
@section('title')
	Liste des questions posées
@stop
@section('buttons')
	<button class="btn btn-success">
		Poser une question
	</button>
@stop
@section('body')
	<div class="table-responsive">
		@if(session('status'))
			<div class="alert alert-success">		
				{{ session('status') }}
			</div>
		@endif
		<table id="mytable" class="table table-bordred table-striped">
			<thead>			
				<th>Question</th>
				<th>Réponse</th>
				<th>&nbsp;</th>			
			</thead> 		
			<tbody>
				@foreach($questions as $question)
				<tr>				
					<td>{{ $question->content }}</td>
							
					<td>
						@if(!is_null($question->response()))
							{{ $question->response()->text }}
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
		<div class="col-md-10 col-md-offset-2">
			{!! $questions->links() !!}
		</div>	
	</div>
@stop
