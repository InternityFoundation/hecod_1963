$( document ).ready( function () {
	
	//****************************************** Personal Information *********************************************************
			$( "#alForm" ).validate( {
				rules: {
					allergy: "required",
					stillHave: "required",
					durationType: "required",
					duration: "required",
					severity: "required",
					alnotes: "required", 
				},
				messages: {	
					allergy: "Please enter your First Name",
					stillHave: "Please enter your Middle Name",	
					durationType: "Please enter your Middle Name",	
					duration: "Please enter your Middle Name",	
					severity: "Please enter your Middle Name",	
					alnotes: "Please enter your Adhaar",	
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
						data: $("#alForm").serialize(),
					beforeSend: function() { 
						$("#loader_form").show(); 
					},
					success: function(data){						
						$("#loader_form").hide();
						//console.log(data);
						$("#alForm").trigger("reset");
						$("#al").modal('hide');
						$("#success-alert").html(data);
						setTimeout(function() {
						$(".alert").alert('close');
						}, 3000);
					},
				});
			}
			
} );
					
		} );