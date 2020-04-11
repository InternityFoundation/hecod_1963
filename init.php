
<?php 

spl_autoload_register(function($class_name){

    include "classes/$class_name.php";


});

 
$login = new Login;
$register = new Register; 
$values = new Values;
$frame = new Frame;
$profile = new Profile;
$mainFeatures = new MainFeatures;
$vitals = new Vitals;
$features = new Features;  
$adData = new adData;


 ?> 