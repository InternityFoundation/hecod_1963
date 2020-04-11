$.validator.setDefaults( {
			submitHandler: function () {
				$.ajax({
					type: "POST",
					url: "action.php",
					data: $("#forgotForm").serialize(),
					beforeSend: function() {
					$("#loader_form").show();
					$("button").prop('disabled', true);
					},
					success: function(data) {						
					$("#loader_form").hide();
					$("#forgotForm").trigger("reset");
					console.log(data);
					$("button").prop('disabled', false);
						$("#success-alert").show();
						$("#success-alert").html(data);
					}
				});
			}
		} );

		$( document ).ready( function () {
			$( "#forgotForm" ).validate( {
				rules: {				
					email: {
						required: true,
						email: true
					}
				},
				messages: {				
					email: "Please enter a valid email address",
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
