$( document ).ready( function () {
	
	//****************************************** Personal Information *********************************************************
			$( "#bgForm" ).validate( {
				rules: {
					bgResult: "required",
					bgType: "required",
					bgDate: "required",
					bgnotes: "required", 
				},
				messages: {
					bgResult: "Please enter your First Name",	
					bgType: "Please enter your First Name",	
					bmi: "Please enter your First Name",	
					bgDate: "Please enter your Middle Name",	
					bgnotes: "Please enter your Adhaar",	
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
						data: $("#bgForm").serialize(),
					beforeSend: function() { 
						$("#loader_form").show(); 
					},
					success: function(data){						
						$("#loader_form").hide();
						//console.log(data);
						$("#bgForm").trigger("reset");
						$("#bg").modal('hide');
						$("#success-alert").html(data);
						setTimeout(function() {
						$(".alert").alert('close');
						}, 3000);
					},
				});
			}
			
} );
					
		} );