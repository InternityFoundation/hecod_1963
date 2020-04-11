<?php include("../functions.php");  ?>
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css?ver=1.1.0">

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
						<div class="row">
						<div class="col">
                        <h4 class="login-title float-left">Sign In</h4>
						</div>
						</div>
						<div id="success-alert"></div>
	                    <form id="covidLoginForm">							 
							<input type="hidden" name="csrf_token" value="<?php echo csrf_token(); ?>">
                            <div class="form-group">
                                <label for="covidName">Users Name</label>
                                <input type="text" name="covidName" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label> 
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
							<div class="row"> 
                            <div class="col-auto mr-auto"></div>
                            <div class="col-auto"><button type="submit" name="covidLogin" class="btn btn-primary"><span id="loading">Login &rarr;</span></button></div>
							</div>							
							<div class="mt-3 text-center"><span class="text-white">Or Login With Social</span></div>
							<div class="row justify-content-center pt-3">
								 <button type="button" class="btn btn-social btn-facebook"><i class="fab fa-facebook-f"></i></button>
                                    <button type="button" class="btn btn-social btn-twitter"><i class="fab fa-twitter"></i></button>
                                    <button type="button" class="btn btn-social btn-google"><i class="fab fa-google-plus-g"></i></button>
							</div>	
							<div class="mt-3 text-center"><span>Don't have an account <a href="index">signup</a></span></div>
							<div class="divider"></div>
							<div class="row">
							<div class="col-auto mr-auto"><a href="forgot" class="forgot-link"><span>Forgot Password?</span></a></div>
							</div>  
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
<script src="../ajax/covid-login.js"></script>

</body>

</html>