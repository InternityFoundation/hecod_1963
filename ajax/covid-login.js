$.validator.setDefaults( {
			submitHandler: function () {
				$.ajax({
					type: "POST",
					url: "../action.php",
					data: $("#covidLoginForm").serialize(),
					beforeSend: function() {
					//$("#loader_form").show(); 					
					$("button").prop('disabled', true);
					$("#loading").html("Loading.. <img src='../img/ajax-loader.gif' />");
					},
					success: function(data) {						
					$("#loader_form").hide();
					console.log(data);
					$("#covidLoginForm").trigger("reset");
					$("button").prop('disabled', false);
						$("#success-alert").show(); 
						$("#success-alert").html(data);
					}
				});
			}
		} );

		$( document ).ready( function () {
			$( "#covidLoginForm" ).validate( {
				rules: {				
					covidName: {
						required: true
					},
					password: {
						required: true,
						minlength: 5
					}
				},
				messages: {				
					covidName: "Please enter a valid User Name",
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
