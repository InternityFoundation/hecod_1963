$( document ).ready( function () {
	
	//****************************************** Personal Information *********************************************************
			$( "#piForm" ).validate( {
				rules: {
					firstName: "required",
					lastName: "required",
					dob: "required",
					gender: "required",
					adhaar: "required",
					email: {
						required: true,
						email: true
					},
					bloodGroup: "required",					
					mobile: {
						required: true,
						minlength:10
					},
					addLine1: "required",
					city: "required",
					distric: "required",
					state: "required",
					pincode: "required",
				},
				messages: {
					firstName: "Please enter your First Name",	
					middleName: "Please enter your Middle Name",	
					lastName: "Please enter your Last Name",
					dob: "Please enter your Last Name",
					gender: "Please enter your Gender",
					adhaar: "Please enter your Adhaar",
					email: "Please enter your Email",
					bloodGroup: "Please enter your Blood Group",
					mobile: "Please enter your Mobile",
					addLine1: "Please enter your Address",
					city: "Please enter your City",
					distric: "Please enter your Distric",
					state: "Please enter your State",
					pincode: "Please enter your Pincode",	
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
					type: "POST",
					url: "../action.php",
					data: $("#piForm").serialize(),
					beforeSend: function() {
					$("#loader_form").show();
					$("button").prop('disabled', true);
					},
					success: function(data) {						
					$("#loader_form").hide();
					$("button").prop('disabled', false);
						$("#success-alert").html(data);
					}
				});
			}
			} );
			
		//******************************************** Energency Information *******************************************************
	
			$( "#emForm" ).validate( {
				rules: {
					emName: "required",
					emRelation: "required",
					emMobile: {
						required: true,
						minlength:10
					},
					emaddLine1: "required",
					emity: "required",
					emdistric: "required",
					emstate: "required",
					empincode: "required",
				},
				messages: {
					emName: "Please enter Name",
					emRelation: "Please enter Relation",
					emMobile: "Please enter Mobile",
					emaddLine1: "Please enter Address",
					emcity: "Please enter City",
					emdistric: "Please enter Distric",
					emstate: "Please enter State",
					empincode: "Please enter Pincode",	
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
					type: "POST",
					url: "../action.php",
					data: $("#emForm").serialize(),
					beforeSend: function() {
					$("#loader_form").show();
					$("button").prop('disabled', true);
					},
					success: function(data) {						
					$("#loader_form").hide();
					$("button").prop('disabled', false);
						$("#success-alert").html(data);
					}
				});
			}
			} );
			
	//******************************************** Employer Information *******************************************************
	
				$( "#empiForm" ).validate( {
				rules: {
					empEmployer: "required",
					empDesignation: "required",
					empMobile: {
						required: true,
						minlength:10
					},
					empCUG: "required",
					empaddLine1: "required",
					empcity: "required",
					empdistric: "required",
					empstate: "required",
					emppincode: "required",
				},
				messages: {
					empEmployer: "Please enter Employer",
					empDesignation: "Please enter Designation",
					empMobile: "Please enter Mobile",
					empCUG: "Please enter CUG",
					empaddLine1: "Please enter Address",
					empcity: "Please enter City",
					empdistric: "Please enter Distric",
					empstate: "Please enter State",
					emppincode: "Please enter Pincode",	
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
					type: "POST",
					url: "../action.php",
					data: $("#empiForm").serialize(),
					beforeSend: function() {
					$("#loader_form").show();
					$("button").prop('disabled', true);
					},
					success: function(data) {						
					$("#loader_form").hide();
					$("button").prop('disabled', false);
						$("#success-alert").html(data);
					}
				});
			}
			} );
			
		//******************************************** Insurance Information *******************************************************
	
	$( "#iiForm" ).validate( {
				rules: {
					insuranceProv: "required",
					policyNo: "required",
					policyName: "required",
					validTill: "required",
				},
				messages: {
					insuranceProv: "Please enter Insurance Provider",
					policyNo: "Please enter Policy Number",
					policyName: "Please enter Policy Name",
					validTill: "Please enter Valid Till",	
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
					type: "POST",
					url: "../action.php",
					data: $("#iiForm").serialize(),
					beforeSend: function() {
					$("#loader_form").show();
					$("button").prop('disabled', true);
					},
					success: function(data) {						
					$("#loader_form").hide();
					$("button").prop('disabled', false);
						$("#success-alert").html(data);
					}
				});
			}
			} );
			
	//**************************************** Hospital Preference ***********************************************************
	
			$( "#hpForm" ).validate( {
				rules: {
					hospitalName: "required",
					hospitalAdd: "required",
					spaicialRequire: "required",
				},
				messages: {
					hospitalName: "Please enter Hospital Name",
					hospitalAdd: "Please enter Hospital Name",
					spaicialRequire: "Please enter Spaicial Requirements",
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
					type: "POST",
					url: "../action.php",
					data: $("#hpForm").serialize(),
					beforeSend: function() {
					$("#loader_form").show();
					$("button").prop('disabled', true);
					},
					success: function(data) {						
					$("#loader_form").hide();
					$("button").prop('disabled', false);
						$("#success-alert").html(data);
					}
				});
			}
			} );			
			
				
		} );