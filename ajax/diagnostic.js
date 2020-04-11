$( document ).ready( function () {
	
	//****************************************** Personal Information *********************************************************
			$( "#diagnosticForm" ).validate( {
				rules: {
					diaCenter: "required",
					diaDoctor: "required",
					diaPreOn: "required",
					diaRepOn: "required",
					diaPhone:  {
						required: true,
						minlength:10
					},
					diaAddress: "required",
					diaNotes: "required",
					diaReport: "required",
				},
				messages: {
					diaCenter: "Please enter your First Name",	
					diaDoctor: "Please enter your Middle Name",	
					diaPreOn: "Please enter your Last Name",
					diaRepOn: "Please enter your Last Name",
					diaPhone:  {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long"
					},
					diaAddress: "Please enter your Adhaar",
					diaNotes: "Please enter your Email",	
					diaReport: "Please enter your Photo",	
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
						console.log(data);						
						$("#loader_form").hide();
						$("#diagnosticForm").trigger("reset");
						$("#dia").modal('hide');
						$("#success-alert").html(data);
						setTimeout(function() {
						$(".alert").alert('close');
						}, 3000);
					},
				});
			}
			
} );
					
		} );