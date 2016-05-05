@extends('client.layout')
@section('title')
	Liste des questions posées
@stop
@section('buttons')
	@include('client.questions.filters')
@stop
@section('body')
	@include('client.questions.list');
@stop
<script type="text/javascript">
	function show_question(id){	
		$(".modal-title").text('Détails question')
		$(".modal-body").load('questions/' + id);	
	}

	function delete_question(id, btn){
		$.ajax({
		    url: 'questions/' + id,
		    type: 'DELETE',
		    success: function(result) {
		    	$(btn).parent().parent().remove();
		    	$("#notif").append("" +
		    			"<div id='success-alert' class='alert alert-success fade in'>" +
		    			" <a href='#' class='close' data-dismiss='alert' aria-label='close' title='close'>&times;</a>" +
		    			" Question supprimé !</strong></div>"
		    	);
		    }
		});
	}
</script>
