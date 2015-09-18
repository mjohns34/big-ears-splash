/*
 *	Validates and processes the form data from the email signup in the footer
 *	Requires jquery.validate plugin
 *		@author Miranda Johnson miranda.j.johnson@gmail.com
 *		@date 09/17/2015
*/

$(document).ready(function() {		
	$('form#email').validate({
		rules: {
		    email: {
		      required: true,
		      email: true
		  	}
		},
		messages: {
			email: "Please enter a valid email address"
		},
		submitHandler: function(form) {
			ajax();
			$( '#email' ).val( '' );
			$( '.confirm' ).empty();
	  	}
	});
});

function ajax() {
	var request = {};
	request.type = 'POST';
	request.url = 'assets/snippets/formProcessor.php';
	request.data = $('form').serialize();
	request.dataType = 'json';
	request.success = function(response) {
		if (response == 'success') {
			$('form').append('<label class="confirm">Thank you for signing up!</label>');
		} else {
			$('form').append('<label class="confirm">This email address is already registered.</label>');
		}
	};
	$.ajax(request);
}
