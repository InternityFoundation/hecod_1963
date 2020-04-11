<?php include("functions.php");  ?>

<?php

$email = $_GET['email'];
$key = $_GET['key'];

//$valid = $values->forgotUser($email,$key);
$valid = $values->verify('password_reset_temp',['emailkey' => $key]);
$data = $values->fetch();

?>
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
                    	<?php if($valid &&  $data->email==$_GET['email']){ ?>
                    	<?php if($data->expDate >= date("Y-m-d H:i:s")){ ?>
                        <h4 class="login-title">Reset Your Password</h4>
						<div id="success-alert"></div>
	                    <form id="passwordResetForm">	                    
							<input type="hidden" name="csrf_token" value="<?php echo csrf_token(); ?>">							
							<input type="hidden" name="email" value="<?php echo $email; ?>">							
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" name="confirm_password" class="form-control" id="confirm_password">
                            </div>
							<div class="row">
                            <div class="col-auto mr-auto"><button type="submit" name="reset" class="btn btn-outline-warning">Reset &rarr;</button></div>
                            <div class="col-auto"><a href="login" class="btn btn-outline-primary">Login</a></div>
							</div>
                        </form>
                    <?php } else { ?>
                    <h4 class="login-title">Invalid Link</h4>
<p>The link is invalid/expired. Either you did not copy the correct link
from the email, or you have already used the key in which case it is 
deactivated.</p>
<p><a href="https://hecod.in/forgot">
Click here</a> to reset password.</p>
                    <?php } } else { ?>
                    <h4 class="login-title">Your are Not Valid User</h4><p>The link is invalid/expired. Either you did not copy the correct link
from the email, or you have already used the key in which case it is 
deactivated.</p>
<p><a href="https://hecod.in/forgot" class="btn btn-warning">
Click here</a> to reset password.</p>
					<?php } ?>
                    </div>
                </div>
            </div>
            <!-- end page right sidebar -->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page container -->    <!-- all js include start -->

<?php include('inc/js.inc.php'); ?>
<script src="ajax/passwordreset.js"></script>

</body>

</html>