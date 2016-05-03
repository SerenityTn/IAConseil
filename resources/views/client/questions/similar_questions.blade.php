<legend>
	Liste des questions similaires
</legend>
@foreach($sqs as $sq)
	<div class="well">		
		{{ $sq['question']->content }}		
		<hr/>		
		{{ $sq['question']->response()->text }}
		<hr/>		
		<button class="btn btn-success" question-id="{{ $question->id }}" 
				response-id="{{ $sq['question']->response()->id }}" 
				score="{{ $sq['score'] }}"
				onclick="add_response()">
			Réponse pertinente
		</button>
			
	</div>
@endforeach

<script type="text/javascript">
	function add_response(){		
		var _response_id = $(event.target).attr('response-id');
		var _question_id = $(event.target).attr('question-id');
		var _score = $(event.target).attr('score');
		$.post(_question_id + '/response', {response_id: _response_id, score: _score}, function(data){
			console.log(data);
		}); 
	}
</script>