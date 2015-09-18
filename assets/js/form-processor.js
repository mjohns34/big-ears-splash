function ajax() {
	
	var request = {};
	request.type = 'POST';
	request.url = 'assets/snippets/formProcessor.php';
	request.data = $('form').serialize();
	request.dataType = 'json';
	request.success = function(response) {
		$('form').append('<label>Thank you for signing up!</label>');
		console.log(response);
	};
	
	$.ajax(request);
	
}

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

	  	}
	});

});
