$( document ).ready( function () {
	
	//****************************************** Personal Information *********************************************************
			$( "#doctorForm" ).validate( {
				rules: {
					doctorName: "required",
					designation: "required",
					mobile: {
						required: true,
						minlength:10,
						maxlength:10
					},
					email: "required", 
					spaciality: "required", 
					registrationNumber: "required", 
					centerName: "required", 
					centerAddress: "required", 
				},
				messages: {
					doctorName: "Please enter your Name",	
					designation: "Please enter your Designation",	
					mobile: {
						required: "Please enter Mobile Number",
						minlength: "Your Mobile must be at least 10 characters long",
						maxlength: "Your Mobile must be at least 10 characters long",
					},	
					email: "Please enter your Email",	
					spaciality: "Please enter your Spaciality",	
					registrationNumber: "Please enter your Registration",	
					centerName: "Please enter your Center Name",	
					centerAddress: "Please enter your Center Address",	
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
						data: $("#doctorForm").serialize(),
					beforeSend: function() { 
						//$("#loader_form").show(); 
						$("#loading").html("Loading.. <img src='../img/ajax-loader.gif' />");
					},
					success: function(data){						
						$("#loader_form").hide();
						console.log(data);
						$("#doctorForm").trigger("reset");
						$("#doctor").modal('hide');
						$("#success-alert").html(data);
						setTimeout(function() {
						$(".alert").alert('close');
						}, 3000);
					},
				});
			}
			
} );
					
		} );