<div class="row">
  {!! Form::open(['class'=>'form-inline']) !!}
    <div class="form-group col-md-3">
      {!! Form::label('answered', "Questions sans réponses :") !!}
      {!! Form::checkbox('answered', null, false, ['class' => 'form-control', 'id' => 'state']) !!}
    </div>
  {!! Form::close() !!}
</div>
<script type="text/javascript">
$(document).ready(function(){
	$('#state').change(function() {
		if($("#state").is(':checked')){
			$.post("questions/filter", {state:0})
			.done(function(html){
				$('#main').html(html);
			});
		}else{
			$.get("questions")
			.done(function(html){
				$('#main').html(html);
			});
		}
	});
});
</script>
