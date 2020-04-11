<?php

class Register extends Operations{
	
	use Fam,Mails,Sms;
	
	public function userRegister(){	
		$data = [
       'mobile'            => $this->input('mobile'),
       'email'            => $this->input('email'),
       'password'         => password_hash($this->input('password'), PASSWORD_DEFAULT),
	   'created_at'		=> date("d/m/Y"),

   ];
   
   		$this->insertData($data);

   		//$this->regMail($data['email']);
		//$this->regsms($data['mobile']);

	}
	
	public function doctorRegister(){
		$password = mt_rand(10000,1000000);
		$data = [
		   'doctorName'            => $this->input('doctorName'),
		   'designation'            => $this->input('designation'),
		   'mobile'            => $this->input('mobile'),
		   'email'            => $this->input('email'),
		   'spaciality'            => $this->input('spaciality'),
		   'registrationNumber'            => $this->input('registrationNumber'),
		   'centerName'            => $this->input('centerName'),
		   'centerAddress'            => $this->input('centerAddress'),
		   'password'         => password_hash($password, PASSWORD_DEFAULT),
		   'created_at'		=> date("d/m/Y"),
		   'status'		=> 1,
		];
		
		$this->registerDoctor($data,$password);
		//print_r($data); 
	}
	
	public function adminRegister(){
		$password = mt_rand(10000,1000000);
		$data = [
		   'employeeName'            => $this->input('employeeName'),
		   'adminName'            => substr($this->input('email'), 0,5),
		   'designation'            => $this->input('designation'),
		   'mobile'            => $this->input('mobile'),
		   'email'            => $this->input('email'),
		   'employeeId'            => $this->input('employeeId'),
		   'roles'            => $this->input('roles'),
		   'password'         => password_hash($password, PASSWORD_DEFAULT),
		   'created_at'		=> date("d/m/Y"),
		   'status'		=> 1,
		];
		$table = "admin";
		$this->registerAdmin($table,$data,$password); 
		//print_r($data);  
	}
	
	public function covidRegister(){
		//$password = mt_rand(10000,1000000);
		$code = mt_rand(1000,1000)+mt_rand(1000,1000)+mt_rand(1000,1000);
		$data = [
		   'name'            => $this->input('name'),
		   'covidName'            => "hcc$code",
		   'mobile'            => $this->input('mobile'),
		   'email'            => $this->input('email'),
		   'password'         => password_hash($this->input('password'), PASSWORD_DEFAULT), 
		   'created_at'		=> date("d/m/Y"),
		];
		$table = "covid";
		$this->registerCovid($table,$data);
		//print_r($data); 
	}
	       
	public function verifyOtp(){
		$data = [
		'otpId' => $this->input('otpId'),
		'otp' => $this->input('otp')
		];
		$this->otpDB($data);
	}


	public function confirmUser(){

		$data = [
       'email'            => $this->input('emailcon'),
       'status'         => 1,
		 ];

		$table = "users";
		$uid = "email";
		if($this->updateData($data,$table,$uid)){
			echo "<div class='alert alert-success'>Successfully Confirm, Please <a href='login'>Login</a></div>";
		}
	}

	public function resend(){
		$email = $this->input('email');
		$this->regMail($email);
	}

}

?> 