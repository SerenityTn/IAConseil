function ask(){
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

function edit_user(id){
	$(".modal-title").text('Modifier utilisateur')
	$(".modal-body").load('users/' + id + '/edit');	
}

function delete_user(id, btn){
	$.ajax({
	    url: 'users/' + id,
	    type: 'DELETE',
	    success: function(result) {
	    	$(btn).parent().parent().remove();
	    	$("#notif").append("" +
	    			"<div id='success-alert' class='alert alert-success fade in'>" +
	    			" <a href='#' class='close' data-dismiss='alert' aria-label='close' title='close'>&times;</a>" +
	    			" Utilisateur supprimé !</strong></div>"
	    	);
	    }
	});
}