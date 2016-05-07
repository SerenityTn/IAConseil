function create_ia_question(){
	$(".modal-title").text('Créer une question')
	$(".modal-body").load('questions/create');	
}

function show_ia_question(id){	
	$(".modal-title").text('Question IA')
	$(".modal-body").load('questions/' + id);
}

function edit_ia_question(id){
	$(".modal-title").text('Modifier Question IA')
	$(".modal-body").load('questions/' + id + '/edit');
}

function add_ia_response(){
	$(".modal-title").text('Ajouter une réponse')
	$(".modal-body").load(id + '/edit');
}

function edit_ia_response(id){
	
}

function delete_ia_question(id, btn){	
	$.ajax({
	    url: 'question/' + id,
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