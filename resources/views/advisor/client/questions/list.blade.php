<div class="table-responsive">
	<table id="mytable" class="table table-bordred table-striped">
		<thead>
			<th>Client</th>				
			<th>Question</th>
			<th>Réponse</th>
			<th>Pertinence</th>
			<th>Avis</th>				
		</thead> 		
		<tbody>
			@foreach($questions as $question)
			<tr>
				<td>
					{{ $question->user->nom }}
				</td>
				<td>
					@if($question->deleted == 1)
						<span class="glyphicon glyphicon-trash" title="cette question a été supprimé par l'utilisateur"></span>
					@endif
					{{ $question->content }}
				</td>
				<td>
					@if(!is_null($question->response()))
						{{ $question->response()->text }}
					@endif
				</td>
				<td>
					@if(!is_null($question->response()))								
						 {{ $question->response()->pivot->score }}
					@endif
				</td>
				<td>
					@if($question->feedback > 0)
						{{ $question->feedback }}/5
					@else
						sans avis
					@endif
				</td>
				<td>
					<a class="btn btn-info" href="{{ route('advisor.client.questions.show', [$question->id])}}">
						<span class="glyphicon glyphicon-eye-open"></span>
					</a>
				</td>						
				<td>
					
				</td>
				<td>							
                    <button onclick="delete_question(this, {{ $question->id }})" class="btn btn-danger">
                    	<span class="glyphicon glyphicon-trash"></span>
                    </button>                    			                
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

<script type="text/javascript">
function delete_question(btn, id){
	$.ajax({
	    url: 'questions/' + id,
	    type: 'DELETE',
	    success: function(result) {
		    console.log(result);
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