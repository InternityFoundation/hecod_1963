<?php include("../functions.php");  ?>
<?php password_hash('admin@321', PASSWORD_DEFAULT) ?>
<!DOCTYPE html>
<html lang="en">
 
<head>
 
    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="login" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="login" />
    <meta name="description" content="login" />

    <!-- title  -->
    <title>Hecod - Login</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="<?php base_url(); ?>/img/logos/favicon.png">
    <link rel="apple-touch-icon" href="<?php base_url(); ?>/img/logos/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php base_url(); ?>/img/logos/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php base_url(); ?>/img/logos/apple-touch-icon-114x114.png">

    <!-- common plugins -->
    <link rel="stylesheet" href="<?php base_url(); ?>/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php base_url(); ?>/plugins/font-awesome/css/font-awesome.min.css" />

    <!-- custom css -->
    <link rel="stylesheet" href="<?php base_url(); ?>/css/styles.css" />
    <link rel="stylesheet" href="<?php base_url(); ?>/css/custom.css" />

</head>
<body>

    <!-- start page loading -->
    <!--<div id="preloader">
        <div class="row loader">
            <div class="loader-icon"></div>
        </div>
    </div> -->
    <!-- end page loading -->	
	
	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

    <!-- start page container -->
    <div class="page-container">
        <!-- start page inner -->
        <div class="page-inner login-page">
            <div id="main-wrapper" class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6 col-sm-12 login-box">
                        <h4 class="login-title">Sign in to your account</h4>
						<div id="success-alert"></div>
	                    <form id="loginForm">							
							<input type="hidden" name="csrf_token" value="<?php echo csrf_token(); ?>">
                            <div class="form-group">
                                <label for="mobile">Mobile</label>
                                <input type="number" name="mobile" class="form-control" id="mobile">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
							<div class="row">
                            <div class="col-auto mr-auto"><button type="submit" name="covidAdminLogin" class="btn btn-outline-warning">Login &rarr;</button></div>
                            </div>
                            <a href="forgot" class="forgot-link">Forgot Password?</a>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end page right sidebar -->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page container -->    <!-- all js include start -->

<?php include('../inc/js.inc.php'); ?>

<script>
$.validator.setDefaults( {
			submitHandler: function () {
				$.ajax({
					type: "POST",
					url: "../action.php",
					data: $("#loginForm").serialize(),
					beforeSend: function() {
					$("#loader_form").show();
					$("button").prop('disabled', true);
					},
					success: function(data) {						
					$("#loader_form").hide();
					$("#loginForm").trigger("reset");
					$("button").prop('disabled', false);
						$("#success-alert").show();
						$("#success-alert").html(data);
					}
				});
			}
		} );

		$( document ).ready( function () {
			$( "#loginForm" ).validate( {
				rules: {				
					mobile: {
						required: true,
						minlength:10,
						maxlength:10
					},
					password: {
						required: true,
						minlength: 5
					}
				},
				messages: {				
					mobile: "Please enter a valid Mobile Number",
					password: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long"
					}
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
			} );			
		} );

</script>

</body>

</html>