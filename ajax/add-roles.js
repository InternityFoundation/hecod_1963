$( document ).ready( function () {
	
	//****************************************** Personal Information *********************************************************
			$( "#adminForm" ).validate( {
				rules: {
					employeeName: "required",
					designation: "required",
					mobile: {
						required: true,
						minlength:10,
						maxlength:10
					},
					email: "required", 
					employeeId: "required", 
					roles: "required",  
				},
				messages: {
					employeeName: "Please enter Employee Name",	
					designation: "Please enter your Designation",	
					mobile: {
						required: "Please enter Mobile Number",
						minlength: "Your Mobile must be at least 10 characters long",
						maxlength: "Your Mobile must be at least 10 characters long",
					},	
					email: "Please enter your Email",	
					employeeId: "Please enter your Employee ID",	
					roles: "Please select Roles",		
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
						data: $("#adminForm").serialize(),
					beforeSend: function() { 
						//$("#loader_form").show(); 
						$("#loading").html("Loading.. <img src='../img/ajax-loader.gif' />");
					},
					success: function(data){
						$("#loading").html("Add");						
						console.log(data);
						//$("#adminForm").trigger("reset");
						//$("#admin").modal('hide');
						$("#success-alert").html(data);
						setTimeout(function() {
						$(".alert").alert('close');
						}, 3000);
					},
				});
			}
			
} );
					
		} );