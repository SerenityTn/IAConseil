<span id="feedback">	
	@for($i = 1; $i <= 5; $i++)
		<span id="{{ $i }}" class="star glyphicon glyphicon-star-empty"></span>
	@endfor
</span>
<script type="text/javascript">
	function init_stars(){
		$(".star").each(function(index){
			if(index+1 <= $('#question').attr('feedback'))
				$(this).addClass('glyphicon-star').removeClass('glyphicon-star-empty')
			else
				$(this).addClass('glyphicon-star-empty').removeClass('glyphicon-star')
		});
	}

	init_stars();	

	$(".star").each(function(){						
		$(this).mouseover(function(){
			id = $(this).attr('id');
			$(".star").each(function(index){
				console.log(index);
				if(index+1 <= id)
					$(this).addClass('glyphicon-star').removeClass('glyphicon-star-empty')
				else
					$(this).addClass('glyphicon-star-empty').removeClass('glyphicon-star')
			});
		});		

		$(this).click(function(){
			var note = $(this).attr('id');
			$("#question").attr('feedback', note);
			save_feedback(note);
		});	
	});	

	$("#feedback").mouseout(function(){
			$(".star").each(function(index){
				if(index+1 <= $('#question').attr('feedback'))
					$(this).addClass('glyphicon-star').removeClass('glyphicon-star-empty')
				else
					$(this).addClass('glyphicon-star-empty').removeClass('glyphicon-star')
			});
	});

	function clear_stars(){
		$(".star").each(function(index){
			$(this).addClass('glyphicon-star-empty').removeClass('glyphicon-star')			
		});
	}
	
	function save_feedback(_note){		
		var question_id = $("#question").attr('value');
		$.ajax({
			type: 'POST',
			url: '/client/questions/'+ question_id + '/feedback',
			data: {note : _note}		
		}).done(function(result){
			console.log(result);
		});
	}
</script>