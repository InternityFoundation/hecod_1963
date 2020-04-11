<?php
if(!isset($_SESSION)){
   @session_start();
}
?>
<?php
date_default_timezone_set('Asia/kolkata');
include("init.php");


function base_url(){
	echo "https://hecod.in";
}

function base_url2(){
	echo "https://hecod.in/beta";
}

@$id = $_SESSION['id'];
@$adminid = $_SESSION['adminid'];
@$doctorid = $_SESSION['doctorid'];
@$covidid = $_SESSION['covidId'];
@$covidAdminId = $_SESSION['covidAdminId'];


function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}

function csrf_token(){
	$token = bin2hex(random_bytes(32));
	$_SESSION['token'] = $token;
	return $token;
}
 












?>