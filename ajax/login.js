$.validator.setDefaults( {
			submitHandler: function () {
				$.ajax({
					type: "POST",
					url: "action.php",
					data: $("#loginForm").serialize(),
					beforeSend: function() {
					//$("#loader_form").show();
					$("#loading").html("Loading.. <img src='../img/ajax-loader.gif' />");
					$("button").prop('disabled', true); 
					},
					success: function(data) {						
					$("#loader_form").hide();
					$("#loginForm").trigger("reset");
					$("button").prop('disabled', false);
						$("#success-alert").show();
						$("#success-alert").html(data);
					}
				});
			}
		} );

		$( document ).ready( function () {  
			$( "#loginForm" ).validate( {
				rules: {				
					email: {
						required: true, 
						email: true
					},
					password: {
						required: true,
						minlength: 5
					}
				},
				messages: {				
					email: "Please enter a valid email address",
					password: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long"
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
