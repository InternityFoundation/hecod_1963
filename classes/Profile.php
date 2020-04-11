<?php

class Profile extends Operations{
	use Fam,Upload,Sms;
	
	public function profilePI(){
		//$this = new this;
		 $data = [
		 'users_id' => $this->input('users_id'),
		 'firstName' => $this->input('firstName'),
		 'middleName' => $this->input('middleName'),
		 'lastName' => $this->input('lastName'),
		 'dob' => $this->input('dob'),
		 'gender' => $this->input('gender'),
		 'adhaar' => $this->input('adhaar'),
		 'bloodGroup' => $this->input('bloodGroup'),
		 'secMobile' => $this->input('secMobile'),
		 'addLine1' => $this->input('addLine1'),
		 'addLine2' => $this->input('addLine2'),
		 'city' => $this->input('city'),
		 'distric' => $this->input('distric'),
		 'state' => $this->input('state'),
		 'pincode' => $this->input('pincode'),
		 ];
		 
		 $table = "personalInformation";
		 $uid = "users_id";
		 
		$data2 = [
		 'users_id' => $this->input('users_id')
		 ];
		 
		if($this->checks($table,$data2)){
			if($this->userUpdateDB($data,$table,$uid)){
				echo "<div class='alert alert-success'>Successfully Update</div>";
			} else {
			echo "<div class='alert alert-danger'>Not Update</div>";
			}
		} else {
			 if($this->from($table)->insert($data)){
				echo "<div class='alert alert-success'>Successfully Update</div>";
			} else {
				echo "<div class='alert alert-danger'>Not Update</div>";
			}
		}
		 
		// print_r($data);  
	}

	public function profileEM(){
		//$this = new this;
		 $data = [
		 'users_id' => $this->input('users_id'),
		 'emName' => $this->input('emName'),
		 'emRelation' => $this->input('emRelation'),
		 'emMobile' => $this->input('emMobile'),
		 'emsecMobile' => $this->input('emsecMobile'),
		 'emaddLine1' => $this->input('emaddLine1'),
		 'emaddLine2' => $this->input('emaddLine2'),
		 'emcity' => $this->input('emcity'),
		 'emdistric' => $this->input('emdistric'),
		 'emstate' => $this->input('emstate'),
		 'empincode' => $this->input('empincode'),
		 ];
		 
		 $table = "emergencyInformation";
		 $uid = "users_id";
		$data2 = [
		 'users_id' => $this->input('users_id')
		 ];
		 
		if($this->checks($table,$data2)){
			if($this->userUpdateDB($data,$table,$uid)){
				echo "<div class='alert alert-success'>Successfully Update</div>";
			} else {
			echo "<div class='alert alert-danger'>Not Update</div>";
			}
		} else {
			 if($this->from($table)->insert($data)){
				echo "<div class='alert alert-success'>Successfully Update</div>";
			} else {
				echo "<div class='alert alert-danger'>Not Update</div>";
			}
		}
	}
	
	public function profileEMPI(){
		//$this = new this;
		 $data = [
		 'users_id' => $this->input('users_id'),
		 'empEmployer' => $this->input('empEmployer'),
		 'empDesignation' => $this->input('empDesignation'),
		 'empMobile' => $this->input('empMobile'),
		 'empCUG' => $this->input('empCUG'),
		 'empaddLine1' => $this->input('empaddLine1'),
		 'empaddLine2' => $this->input('empaddLine2'),
		 'empcity' => $this->input('empcity'),
		 'empdistric' => $this->input('empdistric'),
		 'empstate' => $this->input('empstate'),
		 'emppincode' => $this->input('emppincode'),
		 ];
		 
		 $table = "employerInformation";
		 $uid = "users_id";
		$data2 = [
		 'users_id' => $this->input('users_id')
		 ];
		 
		if($this->checks($table,$data2)){
			if($this->userUpdateDB($data,$table,$uid)){
				echo "<div class='alert alert-success'>Successfully Update</div>";
			} else {
			echo "<div class='alert alert-danger'>Not Update</div>";
			}
		} else {
			 if($this->from($table)->insert($data)){
				echo "<div class='alert alert-success'>Successfully Update</div>";
			} else {
				echo "<div class='alert alert-danger'>Not Update</div>";
			}
		}
	}
	
	public function profileII(){
		//$this = new this;
		 $data = [
		 'users_id' => $this->input('users_id'),
		 'insuranceProv' => $this->input('insuranceProv'),
		 'policyNo' => $this->input('policyNo'),
		 'policyName' => $this->input('policyName'),
		 'validTill' => $this->input('validTill'),
		 ];
		 
		 $table = "insuranceInformation";
		 $uid = "users_id";
		$data2 = [
		 'users_id' => $this->input('users_id')
		 ];
		 
		if($this->checks($table,$data2)){
			if($this->userUpdateDB($data,$table,$uid)){
				echo "<div class='alert alert-success'>Successfully Update</div>";
			} else {
			echo "<div class='alert alert-danger'>Not Update</div>";
			}
		} else {
			 if($this->from($table)->insert($data)){
				echo "<div class='alert alert-success'>Successfully Update</div>";
			} else {
				echo "<div class='alert alert-danger'>Not Update</div>";
			}
		}
	}
	
	public function profileHP(){
		//$this = new this;
		 $data = [
		 'users_id' => $this->input('users_id'),
		 'hospitalName' => $this->input('hospitalName'),
		 'hospitalAdd' => $this->input('hospitalAdd'),
		 'spaicialRequire' => $this->input('spaicialRequire'),
		 ];
		 
		 $table = "hospitalPerefernce";
		 $uid = "users_id";
		 
		 $data2 = [
		 'users_id' => $this->input('users_id')
		 ];
		 
		if($this->checks($table,$data2)){
			if($this->userUpdateDB($data,$table,$uid)){
				echo "<div class='alert alert-success'>Successfully Update</div>";
			} else {
			echo "<div class='alert alert-danger'>Not Update</div>";
			}
		} else {
			 if($this->from($table)->insert($data)){
				echo "<div class='alert alert-success'>Successfully Update</div>";
			} else {
				echo "<div class='alert alert-danger'>Not Update</div>";
			}
		}
	}

	public function photoUpdate(){
		$profilePhoto = $_FILES['profilePhoto'];
		$data = [
		'id' => $this->input('users_id'),
		'profilePhoto' => $this->uploadImage($profilePhoto,'profile'),
		];

		$table = "users";
		$uid = "id";
		if($this->userUpdateDB($data,$table,$uid)){
		 	echo "<img src='../upload/profile/".$this->uploadImage($profilePhoto,'profile')."' class='rounded-circle'>";
		 } else {
		 	echo "<div class='alert alert-danger'>Not Update</div>";
		 }
	}

}

?> 