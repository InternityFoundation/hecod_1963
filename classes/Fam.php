<?php
   
trait Fam{
	
	public function input($inputName){
		if($_SERVER['REQUEST_METHOD'] == "POST" || $_SERVER['REQUEST_METHOD'] == 'post'){
			return trim(strip_tags($_POST[$inputName]));
		} elseif($_SERVER['REQUEST_METHOD'] == "GET" || $_SERVER['REQUEST_METHOD'] == 'get'){
			return trim(strip_tags($_GET[$inputName]));
		} 
	}
	
	public function redirect($path){
		if(!empty($path)){
		echo("<script>location.href = '".$path."';</script>"); 
		}
	}
	
	public function otp(){
		$digits_needed=4;
		$random_number=''; // set up a blank string
		$count=0;

		while ( $count < $digits_needed ) {
			$random_digit = mt_rand(0, 9);
			
			$random_number .= $random_digit;
			$count++;
		};
		
		return $random_number;
	}
}