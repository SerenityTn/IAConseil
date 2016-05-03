$(document).ready(function () {	
	console.log($('#create_user'));
    $('#create_user').validate({
        lang: 'fr',
        rules: {
            nom: {
                required: true,
                minlength: 5
            },
            email: {
                required: true,
                email: true
            }            
        },
        highlight: function(element) {
        	console.log($(element));
        	//console.log($(element).parent().prev().prev());        	           
        },
        unhighlight: function(element) {
        },
        submitHandler: function (form) { // for demo
            return true;
        }
    });
});