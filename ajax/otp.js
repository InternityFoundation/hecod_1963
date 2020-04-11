$(document).ready(function(){
	$.validator.setDefaults( {
			submitHandler: function () {
				$.ajax({
					type: "POST",
					url: "action.php",
					data: $("#otpForm").serialize(),
					beforeSend: function() {
					$("#loader_form").show();
					$("button").prop('disabled', true);
					},
					success: function(data) {						
					$("#loader_form").hide();
					$("#otpForm").trigger("reset");
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
			$( "#otpForm" ).validate( {
				rules: {
					otp: {
						required: true,
						minlength:4,
						maxlength:4
					}
				},
				messages: {				
					otp: {
						required: "Please enter OTP",
						minlength: "Your OTP must be at least 4 characters long",
						maxlength: "Your OTP must be at least 4 characters long",
					}
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