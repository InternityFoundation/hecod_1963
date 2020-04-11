$( document ).ready( function () {
	
	//****************************************** Personal Information *********************************************************
			$( "#bimForm" ).validate( {
				rules: {
					bmiWeight: "required",
					bmiHeight: "required",
					bmi: "required",
					bmiDate: "required",
					bminotes: "required", 
				},
				messages: {
					bmiWeight: "Please enter your First Name",	
					bmiHeight: "Please enter your First Name",	
					bmi: "Please enter your First Name",	
					bmiDate: "Please enter your Middle Name",	
					bmiotes: "Please enter your Adhaar",	
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
						data: $("#bimForm").serialize(),
					beforeSend: function() { 
						$("#loader_form").show(); 
					},
					success: function(data){						
						$("#loader_form").hide();
						//console.log(data);
						$("#bimForm").trigger("reset");
						$("#bmi").modal('hide');
						$("#success-alert").html(data);
						setTimeout(function() {
						$(".alert").alert('close');
						}, 3000);
					},
				});
			}
			
} );
					
		} );