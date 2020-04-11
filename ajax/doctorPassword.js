$.validator.setDefaults( {
			submitHandler: function () {
				$.ajax({
					type: "POST",
					url: "../action.php",
					data: $("#doctorResetForm").serialize(),
					beforeSend: function() {
					$("#loader_form").show();
					$("button").prop('disabled', true);
					},
					success: function(data) {
					$("#loader_form").hide();
						console.log(data);
						$("#doctorResetForm").trigger("reset");
						$("#doctorChange").modal('hide');
						$("#success-alert").html(data);
						setTimeout(function() {
						$(".alert").alert('close');
						}, 3000);
					}
				});
			}
		} );

		$( document ).ready( function () {
			$( "#doctorResetForm" ).validate( {
				rules: {				
					docPassword: {
						required: true,
						minlength: 5
					},
					confirm_password: {
						required: true,
						minlength: 5,
						equalTo: "#docPassword"
					},
				},
				messages: {				
					docPassword: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long"
					},
					confirm_password: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long",
						equalTo: "Please enter the same password as above"
					},
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
