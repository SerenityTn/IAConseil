<div class="tadble-responsive">
	@if(session('status'))
		<div class="alert alert-success">		
			{{ session('status') }}
		</div>
	@endif
	<table id="mytable" class="table table-bordred table-striped">
		<thead>			
			<th>Question</th>
			<th>Réponse</th>
			<th colspan="2"></th>			
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
					<button onclick="show_question({{ $question->id }})" data-toggle = "modal" data-target="#modal" class="btn btn-info">
						<span class="glyphicon glyphicon-eye-open"></span>
					</button>									
                </td>
				<td>				
					<button onclick="delete_cquestion({{ $question->id }}, this)" data-toggle="modal" data-target="#delaeteModal" class="btn btn-danger">
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
	function show_question(id){	
		$(".modal-title").text('Détails question')
		$(".modal-body").load('questions/' + id);	
	}

	function delete_cquestion(id, btn){
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