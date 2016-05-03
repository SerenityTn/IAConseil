function create_user(){
	$(".modal-title").text('Créer un utilisateur')
	$(".modal-body").load('users/create');	
}

function show_user(id){	
	$(".modal-title").text('Détails utilisateur')
	$(".modal-body").load('users/' + id);	
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