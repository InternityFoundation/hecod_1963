$( document ).ready( function () {
	
	//****************************************** Personal Information *********************************************************
			$( "#bloodPressureForm" ).validate( {
				rules: {
					systolic: "required",
					distolic: "required",
					bpDate: "required",
					bpnotes: "required", 
				},
				messages: {
					systolic: "Please enter your First Name",	
					distolic: "Please enter your Middle Name",	
					bpDate: "Please enter your Last Name",
					bpnotes: "Please enter your Adhaar",	
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
				submitHandler: function (form) {
					$.ajax({
						url: "../action.php",
						type: "POST",
						data: new FormData(form),
						contentType: false,
						cache: false,
						processData: false,
					beforeSend: function() { 
						$("#loader_form").show();
					},
					success: function(data){						
						$("#loader_form").hide();
						$("#prescriptionForm").trigger("reset");
						$("#bp").modal('hide');
						$("#success-alert").html(data);
						setTimeout(function() {
						$(".alert").alert('close');
						}, 3000);
					},
				});
			}
			
} );
					
		} );