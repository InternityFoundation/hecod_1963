<?php include ("functions.php"); ?>
<?php

$email = $_GET['email'];

if(isset($_GET['email'])){

		$register->resend();
		$frame->redirect('login');
	}