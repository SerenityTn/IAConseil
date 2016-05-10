<div class="row">	
	{!! Form::open(['class'=>'form-inline']) !!}
		<div class="form-group col-md-3">
			{!! Form::label('answered', "Question sans réponses :") !!}
			{!! Form::checkbox('answered', null, false, ['class' => 'form-control', 'id' => 'state']) !!}<br/>
		</div>
		<div class="form-group col-md-4">			
			{!! Form::select('user_id', $clients, null, ['class'=>'form-control', 'id' => 'select_nom']) !!}
		</div>		
	{!! Form::close() !!}
</div>
<script type="text/javascript">	
$(document).ready(function(){	
	$('#state').change(function() {
		filter_list();
	});

	$('#select_nom').change(function(){
		filter_list();		
	});
	
});

function filter_list(){	
	var _state = $("#state").is(':checked');
	var _client = $('#select_nom').find('option:selected').val();	
	if(_state == true || _client != 0){
		$.post("questions/filter", {state:_state, client_id:_client})
		.done(function(html){
			console.log(html);
			$('#main').html(html);
		});
	}else{			
		$.get("questions/")
		.done(function(html){						
			$('#main').html(html);
		});
	} 
}
</script>