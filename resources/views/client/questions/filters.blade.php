<div class="checkbox">
  <label><input id="state" type="checkbox" value="">Questions sans réponses</label>
</div>

<script type="text/javascript">	
$(document).ready(function(){
	$('#state').change(function() {
		if($("#state").is(':checked')){
			$.get("questions/filter/1")
			.done(function(html){
				$('#main').html(html);
			});
		}else{			
			$.get("questions/filter/0")
			.done(function(html){						
				$('#main').html(html);
			});
		} 
	});
});	
</script>