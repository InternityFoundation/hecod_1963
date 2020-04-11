<?php include("../functions.php"); ?>
<?php if(empty($covidid)){ $frame->redirect('../covid'); }?>
<?php
$dataAdmin = [
'covidId' => $covidid
];
$table  = "covid";
$data = $values->admin($table,$dataAdmin);
 ?>  
<!DOCTYPE html>  
<html lang="en"> 

<head>

    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="sddd" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="admin,dashboard" />
    <meta name="description" content="sddd" />

    <!-- title  -->
    <title>Dashboard - Health</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="<?php base_url(); ?>/img/logos/favicon.png">
    <link rel="apple-touch-icon" href="<?php base_url(); ?>/img/logos/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/logos/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/logos/apple-touch-icon-114x114.png">
	
    <!-- common plugins -->
    <link rel="stylesheet" href="<?php base_url(); ?>/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css?ver=1.1.0">	
    <link rel="stylesheet" href="<?php base_url(); ?>/plugins/icomoon/style.css" />
	
    <!-- bootstrap-datepicker plugin -->
    <link rel="stylesheet" href="<?php base_url(); ?>/plugins/bootstrap-datepicker/css/datepicker.css" />

    <!-- datatables plugin -->
    <link rel="stylesheet" href="<?php base_url(); ?>/plugins/datatables/css/jquery.datatables.min.css" />
    <link rel="stylesheet" href="<?php base_url(); ?>/plugins/datatables/css/jquery.datatables_themeroller.css" />		
	
    <!-- vertical-timeline plugin -->
    <link rel="stylesheet" href="<?php base_url(); ?>/plugins/vertical-timeline/css/style.css" />

    <!-- custom css -->
    <link rel="stylesheet" href="<?php base_url(); ?>/css/styles.css" />
    <link rel="stylesheet" href="<?php base_url(); ?>/css/custom.css" />
</head>