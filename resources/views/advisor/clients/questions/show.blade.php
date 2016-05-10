@extends('advisor.layout')
@section('title')
	Détails question Client
@stop
@section('buttons')	
	@include('advisor.ia.questions.buttons')
@stop
@section('body')								
	<h4>Question</h4>		
	<div class="form-group question" id="{{ $question->id }}">
		<div class="well">{{ $question->content }}</div>			
	</div>		
	@if(!$question->response())
		<span class="error"> Aucune réponse n'est affecté a cette question </span>
	@else			
		<h4>Réponse(s)</h4>
		@foreach($question->responses as $response)			
			<div class="response">
				<div class="form-group">
					<div class="well">@if(!is_null($response)) {{ $response->text }} @endif</div>			
				</div>
				<div class="button-group">
					<button class="btn btn-primary" onclick="edit_response({{ $response->id }})" data-toggle="modal" data-target="#modal">
						<span class="glyphicon glyphicon-pencil"></span>					
					</button>
					<button class="btn btn-danger" onclick="delete_response(this, {{ $response->id }})">			
						<span class="glyphicon glyphicon-trash"></span>					
					</button>
				</div>
				<hr/>
			</div>
		@endforeach
	@endif			
@stop

<script type="text/javascript">
	function create_response(){
		var question_id = $(".question").attr('id');
		$(".modal-title").text('Répondre à cette question')
		$(".modal-body").load(question_id +'/responses/create');	
	}

	function edit_response(response_id){
		var question_id = $(".question").attr('id');
		$(".modal-title").text('Modifier cette réponse')
		$(".modal-body").load(question_id +'/responses/'+ response_id +'/edit');
	}

	function delete_response(btn, id){
		var question_id = $(".question").attr('id');
		$.ajax({
		    url: question_id + '/responses/' + id,
		    type: 'DELETE',
		    success: function(result) {			    
		    	$(btn).parent().parent().remove();
		    	$("#notif").prepend("" +
		    			"<div id='success-alert' class='alert alert-success fade in'>" +
		    			" <a href='#' class='close' data-dismiss='alert' aria-label='close' title='close'>&times;</a>" +
		    			" Réponse supprimé !</strong></div>"
		    	);
		    }
		});
	}
</script>