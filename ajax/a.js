$( document ).ready( function () {
	
	//****************************************** Personal Information *********************************************************
			$( "#physiotherapyForm" ).validate( {
				rules: {
					phyHospital: "required",
					phyDoctor: "required",
					phyPreOn: "required",
					phyPhone:  {
						required: true,
						minlength:10
					},
					phyAddress: "required",
					phyNotes: "required",
				},
				messages: {
					phyHospital: "Please enter your First Name",	
					phyDoctor: "Please enter your Middle Name",	
					phyPreOn: "Please enter your Last Name",
					phyPhone:  {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long"
					},
					phyAddress: "Please enter your Adhaar",
					phyNotes: "Please enter your Email",	
					phyreport: "Please enter your Photo",	
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
						url: "../a.php",
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
						console.log(data);
					},
				});
			}
			
} );
					
		} );