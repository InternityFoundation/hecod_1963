<?php

class Frame{
	
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
}