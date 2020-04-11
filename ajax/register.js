$(document).ready(function(){
	$.validator.setDefaults( {
			submitHandler: function () {
				$.ajax({
					type: "POST",
					url: "action.php",
					data: $("#signupForm").serialize(),
					beforeSend: function() {
					$("#loader_form").show();
					$("button").prop('disabled', true);
					},
					success: function(data) {				
					$("#loader_form").hide();
					$("#signupForm").trigger("reset");
					$("button").prop('disabled', false);
						$("#success-alert").html(data);
						setTimeout(function() {
						$(".alert").alert('close');
						}, 3000);
					}
				});
			}
		} ); 

		$( document ).ready( function () {
			$( "#signupForm" ).validate( {
				rules: {			
					email: {
						required: true,
						email: true
					},
					mobile: {
						required: true,
						minlength:10,
						maxlength:10
					},
					password: {
						required: true,
						minlength: 5
					},
					confirm_password: {
						required: true,
						minlength: 5,
						equalTo: "#password"
					},
					agree: {
						required: true
					}
				},
				messages: {				
					email: "Please enter a valid email address",
					mobile: {
						required: "Please enter Mobile Number",
						minlength: "Your Mobile must be at least 10 characters long",
						maxlength: "Your Mobile must be at least 10 characters long",
					},
					password: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long"
					},
					confirm_password: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long",
						equalTo: "Please enter the same password as above"
					},
					agree: "Please accept our policy"
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "text-danger" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}  
				},
			} );			
		} );
});