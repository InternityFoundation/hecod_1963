$( document ).ready( function () {
	
	//****************************************** Personal Information *********************************************************
			$( "#prescriptionForm" ).validate( {
				rules: {
					prcHospital: "required",
					prcDoctor: "required",
					prcPreOn: "required",
					prcPhone:  {
						required: true,
						minlength:10
					},
					prcAddress: "required",
					prcNotes: "required",
					prcReport: "required",
				},
				messages: {
					prcHospital: "Please enter your First Name",	
					prcDoctor: "Please enter your Middle Name",	
					prcPreOn: "Please enter your Last Name",
					prcPhone:  {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long"
					},
					prcAddress: "Please enter your Adhaar",
					prcNotes: "Please enter your Email",	
					prcReport: "Please enter your Photo",	
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
						$("#prc").modal('hide');
						$("#success-alert").html(data);
						setTimeout(function() {
						$(".alert").alert('close');
						}, 3000);
					},
				});
			}
			
} );
					
		} );