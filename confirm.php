<?php include("functions.php");  ?>

<?php

$email = $_GET['email'];

$valid = $values->verify('users',['email' => $email]);
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
            <div id="success-alert"></div>
                    	<?php if($valid){ ?>
                        <h4 class="login-title">Confirm Your Account</h4>
                        <a href="#" data-id="<?php echo $_GET['email'] ?>" id="confirm" class="btn btn-warning">Confirm</a>
                    <?php } else { ?>
                    <h4 class="login-title">Your are Not Valid User</h4>
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

<script>
    $("#confirm").click(function(){
        var email = $("a#confirm").attr('data-id');
        $.ajax({
            type: "POST",
            url: "action.php",
            data : {emailcon:email},
            beforeSend: function() {
            $("#loader_form").show();
            $("button").prop('disabled', true);
            },
            success: function(data) { 
                console.log(data);
                $("#loader_form").hide();
                    $("#signupForm").trigger("reset");
                    $("button").prop('disabled', false);
                        $("#success-alert").html(data);
                        setTimeout(function() {
                        $(".alert").alert('close');
                        }, 3000);
            }
        });
    });
</script>

</body>

</html>