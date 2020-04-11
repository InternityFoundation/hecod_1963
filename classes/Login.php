<?php

class Login extends Operations{
	
	use Fam,Mails;
	
	public function userLogin(){
		 $data = [
		 'email' => $this->input('email'),
		 'password' => $this->input('password'),
		 ];
		 
		 $this->loginDB($data);
	}

	public function adminLogin(){
		 $data = [
		 'admin' => $this->input('admin'),
		 'password' => $this->input('password'),
		 ];
		 
		 $this->adminLoginDB($data);  
	}
	
	public function doctorLogin(){
		 $data = [
		 'mobile' => $this->input('mobile'),
		 'password' => $this->input('password'),
		 ];
		 
		 $this->doctorLoginDB($data);
	}
	
	public function covidLogin(){
		 $data = [
		 'covidName' => $this->input('covidName'),
		 'password' => $this->input('password'),
		 ];
		 
		 $this->covidLoginDB($data);
		 //print_r($data);
	}
	
	public function covidAdminLogin(){
		$data = [
		'mobile' => $this->input('mobile'),
		'password' => $this->input('password'),
		];
		
		$this->covidAdminLoginDB($data);
		//print_r($data);
   }
	 
	public function userForgot(){		
		$data = [
		 'email' => $this->input('email'),
		 ];	 
		 if($this->check($data)){
		 $expFormat = mktime(
   		date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
   		);
  	 		$expDate = date("Y-m-d H:i:s",$expFormat);
   			$key = md5(2418*2+$email);
   			$addKey = substr(md5(uniqid(rand(),1)),3,10);
   			$key = $key . $addKey;

   			$data2 = [
   				'email' => $data['email'],
   				'emailkey' => $key,
   				'expDate' => $expDate,
   			];

   			$table2 = "password_reset_temp";
			$this->insertemail($table2,$data2);
			if($this->forgotMail($data['email'],$key)){
				echo "We have Send Reset Link to Your Mail";
			} else {
				echo "send Not mail";
			}
		 } else {
			 echo "Mail Not Found";
		 }
	} 

	public function userReset(){
		$data = [
       'email'            => $this->input('email'),
       'password'         => password_hash($this->input('password'), PASSWORD_DEFAULT),
		 ];

		 $table = "users";
		 $uid = "email";

		$this->deleteData('password_reset_temp',['email'=>$this->input('email')]);
		if($this->updateData($data,$table,$uid)){
			echo "<div class='alert alert-success'>Password Successfully Change</div>";
		}
	}
	
	
	public function passwordChange(){
		$data = [
       'adminId'            => $this->input('adminId'),
       'password'         => password_hash($this->input('password2'), PASSWORD_DEFAULT),
		 ];

		 $table = "admin";
		 $uid = "adminId";

		//$this->deleteData('password_reset_temp',['email'=>$this->input('email')]);
		if($this->updateData($data,$table,$uid)){
			echo "<div class='alert alert-success'>Password Successfully Change</div>";
		}
	}
	
	public function docChange(){
		$data = [
       'doctorId'            => $this->input('doctorId'),
       'password'         => password_hash($this->input('docPassword'), PASSWORD_DEFAULT),
		 ];

		 $table = "doctor";
		 $uid = "doctorId";

		//$this->deleteData('password_reset_temp',['email'=>$this->input('email')]);
		if($this->updateData($data,$table,$uid)){
			echo "<div class='alert alert-success'>Password Successfully Change</div>";
		}
	}

}

?> 