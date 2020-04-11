<?php include("functions.php");  ?>
<?php if(!empty($id)){ $frame->redirect('pages/dashboard'); }?>
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
    <title>Hecod</title>

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
	<div class="logo">
	<a href="https://hecod.in">
                <!--<span>HeCod</span>-->
				<img src="https://hecod.in/img/logos/logo.png" class="image-responsive">
            </a>
			</div>
        <!-- start page inner -->
        <div class="page-inner login-page">
            <div id="main-wrapper" class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6 col-sm-12 login-box">
					<h4 class="login-title">Verify OTP</h4>
						    <div id="success-alert"></div>
                        <form id="otpForm" action="" method="post">
				<input type="hidden" name="otpId" id="otpId" value="<?php echo $_GET['otpId']; ?>">
				<div class="form-group"> 
                <label for="mobile">OTP</label>
                <input type="number" name="otp" class="form-control" id="otp"> 
                </div>
				<div class="row">
                <div class="col-auto mr-auto"></div>
                <div class="col-auto"><button type="submit" name="verifyOtp" id="verifyOtp" class="btn btn-block btn-outline-secondary">Verify &rarr;</button></div>
				</div>
	        </form>	
                    </div>
                </div>
            </div>
            <!-- end page right sidebar -->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page container -->  
	<!-- all js include start -->

<?php include('inc/js.inc.php'); ?> 
<script src="ajax/otp.js"></script>
</body>
</html>