@extends('advisor.layout')
@section('title')
	Liste des questions clients
@stop
@section('buttons')
	@include('advisor.questions.client.filters')
@stop
@section('body')
	@if(session('status'))
		<div class="alert alert-danger">
			{{ session('status') }}
		</div>
	@endif
	<div class="row">
		<div class="table-responsive">
			<table id="mytable" class="table table-bordred table-striped">
				<thead>				
					<th>Question</th>
					<th>Réponse</th>				
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
							<a class="btn btn-info" href="{{ route('advisor.questions.client.show', [$question->id])}}">
								<span class="glyphicon glyphicon-eye-open"></span>
							</a>
						</td>			
						<td>Pertinence
							@if(!is_null($question->response()))								
								 {{ $question->response()->pivot->score }}
							@endif					 			
						</td>
						<td>
							{{ Form::open(array('route' => ['advisor.questions.client.destroy', $question->id])) }}
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