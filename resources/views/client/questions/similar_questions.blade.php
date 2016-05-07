<input id="question" type="hidden" value="{{ $question->id }}" feedback = "1"/>
@if($sqs)
	<legend>
		Liste des questions similaires
	</legend>
@else
	<b class="error">Auncune réponse similar trouvé !</b>
@endif
@foreach($sqs as $sq)
	<div class="well">		
		{{ $sq['question']->content }}		
		<hr/>		
		{{ $sq['question']->response()->text }}
		<hr/>		
		<button class="btn btn-success" question-id="{{ $question->id }}" 
				response-id="{{ $sq['question']->response()->id }}" 
				score="{{ $sq['score'] }}"
				onclick="add_response(this)">
			Réponse pertinente
		</button>		
		<a style="cursor: pointer" class="hide" onclick="remove_response(this)">Annuler</a>
		<button onclick="hide_response(this)" class="btn btn-danger"><span class="glyphicon glyphicon-eye-close"></span></button>
	</div>	
	<button onclick="show_response(this)" class="hide btn btn-success"><span class="glyphicon glyphicon-eye-open"></span></button>
	<hr/>
@endforeach

<script type="text/javascript">
	//init buttons
	$(document).ready(function(){
		$('.feedback').each(function(){
			var btn = this;
			var _response_id = $(this).attr('response-id');
			var _question_id = $(this).attr('question-id');
			/*
			$.get(_question_id + '/response/' + _response_id, function(data){
				if(data == 'true') disableBtn(btn);
				console.log(data);				
			}); 
			*/
		});
	});

	//handle response
	function show_response(btn){		
		$(btn).prev().removeClass('hide');
		$(btn).addClass('hide');
	}
	
	function hide_response(btn){
		$(btn).parent().addClass('hide');
		$(btn).parent().next().removeClass('hide');
	}

	//ajax database
	function add_response(btn){		
		var _response_id = $(event.target).attr('response-id');
		var _question_id = $(event.target).attr('question-id');
		var _score = $(event.target).attr('score');
		$.post(_question_id + '/responses', {response_id: _response_id, score: _score}, function(data){
			$(btn).next().removeClass('hide');
			disableBtn(btn);
		}); 
	}

	
	function remove_response(btn){		
		var _response_id = $(event.target).prev().attr('response-id');
		var _question_id = $(event.target).prev().attr('question-id');		
		$.ajax({
			url: _question_id + '/responses/' + _response_id,
			type: 'DELETE',
			success: function(result){
				console.log(result);
				$(btn).addClass('hide');
				enableBtn($(btn).prev());	
			}			
		});		
	}

	//handle buttons	
	function disableBtn(btn){
		$(btn).removeClass('btn-success');
		$(btn).removeAttr('onclick');
	}

	function enableBtn(btn){
		$(btn).addClass('btn-success');
		$(btn).attr('onclick', "add_response(this)");
	}
		
	
</script>