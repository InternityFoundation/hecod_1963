$( document ).ready( function () {
	
	//****************************************** Personal Information *********************************************************
			$( "#bloodTempForm" ).validate( {
				rules: {
					btResult: "required",
					btCollDate: "required",
					btnotes: "required", 
				},
				messages: {
					btResult: "Please enter your First Name",	
					btCollDate: "Please enter your Middle Name",	
					btnotes: "Please enter your Adhaar",	
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
				submitHandler: function () {
					$.ajax({
						url: "../action.php",
						type: "POST",
						data: $("#bloodTempForm").serialize(),
					beforeSend: function() { 
						$("#loader_form").show();
					},
					success: function(data){						
						$("#loader_form").hide();
						//console.log(data);
						$("#bloodTempForm").trigger("reset");
						$("#bt").modal('hide');
						$("#success-alert").html(data);
						setTimeout(function() {
						$(".alert").alert('close');
						}, 3000);
					},
				});
			}
			
} );
					
		} );