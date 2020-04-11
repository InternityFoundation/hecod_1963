<?php

class extra extends operations {
	
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
	
	public function insertData($data){
		$this->select()->from('user')->where('email',$data['email'])->getrow();
		if($this->countRows() == 0){
		if($this->from('user')->insert($data)){
		echo "Your account is successfully created";} else {
			echo "not"; }
		} else{
			echo "Your Email Already Register";
		}
	} 
	
	public function loginDB($data){
		$this->select()->from('user')->where('email',$data['email'])->getrow();
		if($this->countRows() > 0){ 
			 $row = $this->fetch();
			 $dbpassword = $row->password;
			 $id = $row->user_id;
			 if(password_verify($data['password'],$dbpassword)){  
				$_SESSION['id'] = $id;				
				//$this->redirect('dashboard');
				echo "ok";
			 }else{
				 echo "passwordNotMacthed";				 
			 }
		 }
		
	}
	
	public function valueDB($id){
		return $this->select()->from('user')->where('user_id',$id)->result();
	}
	
	public function valuesDB(){
		return $this->select()->from('user')->result(); 
	}
	
	public function userUpdateDB($data){
		if($this->from('user')->wh('user_id')->condition($data)->update($data)){
			echo "ok";
		} else {
			echo "not";
		}
	} 
	
	public function photoUpdateDB($data){
		if($this->from('user')->wh('user_id')->condition($data)->update($data)){
			echo "ok";
		} else {
			echo "not";
		}
	}
	 
	public function countDB(){
		$this->select()->from('user')->getrow();
		return $this->countRows();
	}
	
	public function limitDB($limit){		
		return $this->select()->from('user')->limit($limit)->result();
	}
	
	public function searchDB($name){
		return $this->select()->from('user')->like('name',$name)->result();
	}
}

?>