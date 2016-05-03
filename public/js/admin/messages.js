function show_message(id){	
	$(".modal-title").text('Détails Message')
	$(".modal-body").load('messages/' + id);	
}

function delete_message(id, btn){
	$.ajax({
	    url: 'messages/' + id,
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