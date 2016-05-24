@extends('client.layout')
@section('title')
 Poser une question
@stop
<?php $question_id = -1 ?>
@section('buttons')
	<div>Poser vote question et nous essayerons de trouver les questions similaires à votre question</div>
	<div id="avis" class="hide">
		Vous êtes satisfait ? : @include('client.questions.feedback')
	</div>
@stop
@section('body')
	<div class="form-group">
		<textarea class="form-control" required="required" placeholder="Question ?" id="content" rows="5"></textarea>
	</div>
	<div class="form-group">
		<button onclick = "ask()" class="btn btn-success">Envoyer</button>
	</div>
	<div id="similar_questions">
	</div>
@stop

<script type="text/javascript">
	function ask(){
		clear_stars();
		$('#avis').removeClass('hide');
		var content = $('#content').val();
		$.ajax({
			type: 'POST',
		    url: '/client/questions',
		    data: "content="+content,
		    success: function(result) {
		    	$("#similar_questions").html(result);
		    }
		});
	}
</script>
