$( document ).ready( function () {
	
	//****************************************** Personal Information *********************************************************
			$( "#imForm" ).validate( {
				rules: {
					immunization: "required",
					imDate: "required",
					imnotes: "required", 
				},
				messages: {	
					immunization: "Please enter your First Name",
					imDate: "Please enter your Middle Name",	
					imnotes: "Please enter your Adhaar",	
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
						data: $("#imForm").serialize(),
					beforeSend: function() { 
						$("#loader_form").show(); 
					},
					success: function(data){						
						$("#loader_form").hide();
						//console.log(data);
						$("#imForm").trigger("reset");
						$("#im").modal('hide');
						$("#success-alert").html(data);
						setTimeout(function() {
						$(".alert").alert('close');
						}, 3000);
					},
				});
			}
			
} );
					
		} );