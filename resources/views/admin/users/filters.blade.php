<div class="row">
  {!! Form::open(['class'=>'form-inline']) !!}
    <div class="form-group">
      <label class="radio-inline">
        <input class="user_filter" type="radio" name="gender" value="0" checked> Tous
      </label>
      <label class="radio-inline">
        <input class="user_filter" type="radio" name="gender" value="1" checked> Administrateurs
      </label>
      <label class="radio-inline">
        <input class="user_filter" type="radio" name="gender" value="2"> Experts
      </label>
      <label class="radio-inline">
        <input class="user_filter" type="radio" name="gender" value="3"> Clients
      </label>
      <label class="radio-inline">
        <input class="user_filter" type="radio" name="gender" value="4"> Clients prime
      </label>
    </div>
  {!! Form::close() !!}
</div>
<hr/>
<script type="text/javascript">
$(document).ready(function(){
	$('.user_filter').click(function() {
    var _type = $(this).val();
    console.log(_type);
		if(_type > 0){
			$.post("users/filter", {type:_type})
			.done(function(html){
				$('#main').html(html);
			});
		}else{
      console.log("all");
			$.get("users")
			.done(function(html){
				$('#main').html(html);
			});
		}
	});
});
</script>
