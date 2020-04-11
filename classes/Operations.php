<?php
	class Operations extends QueryBuilder{
		
		use Fam,Mails,Sms;

		public function insertData($data){
		$this->select()->from('users')->where('email',$data['email'])->getselect();
		if($this->countRows() == 0){
		if($this->from('users')->insert($data)){

		$expFormat = mktime(
   		date("H"), date("i")+15, date("s"), date("m") ,date("d"), date("Y")
   		);
  	 	$expDate = date("Y-m-d H:i:s",$expFormat);
		$data2 = [
			'mobile' => $data['mobile'],
			'otp' => $this->otp(),
			'expDate' => $expDate 
		];
		$this->from('otp_temp')->insert($data2);
		$this->regMail($data['email']);
		$this->regsms($data2['mobile'],$data2['otp']);
		echo $this->lastInsert();
		echo("<script>location.href = 'otp?otpId=".$this->lastInsert()."';</script>"); 
		} 
		else {
			echo "Data Not Insert"; }
		} else{
			echo "<div class='alert alert-danger'>Your Email Already Register</div>";	
		} 
	    }
		
		public function registerDoctor($data,$password){
		$this->select()->from('doctor')->where('mobile',$data['mobile'])->getselect();
		if($this->countRows() == 0){
		if($this->from('doctor')->insert($data)){
		$this->regDocMail($data['email'],$data['mobile'],$password);
		echo "<div class='alert alert-success'>Successfully Added</div>";
		} 
		else {
			echo "Data Not Insert"; }
		} else{
			echo "<div class='alert alert-danger'>Your Email Already Register</div>";	
		} 
	    }
		
		public function registerAdmin($table,$data,$password){
		//echo array_keys($data)[0];
		$this->select()->from($table)->where('mobile',$data['mobile'])->getselect();
		if($this->countRows() == 0){
		if($this->from($table)->insert($data)){
		$this->regDocMail($data['email'],$data['adminName'],$password);
		echo "<div class='alert alert-success'>Successfully Added</div>";
		} 
		else {
			echo "Data Not Insert"; }
		} else{
			echo "<div class='alert alert-danger'>Your Email Already Register</div>";	
		}
	    }
		
		public function registerCovid($table,$data){
		//echo array_keys($data)[0];
		if($this->from($table)->insert($data)){
		$this->regDocMail($data['email'],$data['covidName']);
		echo "<div class='alert alert-success'>Successfully Added</div>";
		} 
		else {
			echo "Data Not Insert"; } 
		}
		
		public function otpDB($data){
			$otp = $data['otp'];
			$otpId = $data['otpId'];
			$this->select()->from('otp_temp')->where('otpId',$data['otpId'])->getselect();
			if($this->countRows() == 1){				
				$row = $this->fetch();
				if($row->expDate >= date("Y-m-d H:i:s")){
					if($row->otpid == $otpId and $row->otp == $otp){
						//$mobile = $row->mobile;
						$data = [
						'mobile'         => $row->mobile,
						'status'         => 1,
						];

						$table = "users";
						$uid = "mobile";
						if($this->updateData($data,$table,$uid)){
						echo "<div class='alert alert-success'>Successfully Confirm, Please <a href='login'>Login</a></div>";					
						$this->from('otp_temp')->where('mobile',$data['mobile'])->del();
						}
					} else {
						echo "<div class='alert alert-danger'>Not Confirm</div>";
					}
				} else {
					echo "<div class='alert alert-danger'>OTP Expire</div>";
				}
			} else {
				echo "<div class='alert alert-danger'>Invalid Otp</div>";
			}
		}
		 
		public function insertDB($table,$data){
		if($this->from($table)->insert($data)){					  
			echo "<div class='alert alert-success'>successfully</div>";
		} else {
								
		echo "<div class='alert alert-danger'>Not Success</div>";	
			}
	    }

	    public function insertemail($table,$data){
		/*if($this->from($table)->insert($data)){					
			echo "<div class='alert alert-success'>successfully</div>";
		} else {
								
		echo "<div class='alert alert-danger'>Not Success</div>";	
			}*/
			$this->from($table)->insert($data);
	    }
		
		
		public function loginDB($data){
		$frame = new Frame;
		$this->select()->from('users')->where('email',$data['email'])->getselect();
		if($this->countRows() > 0){ 
			 $row = $this->fetch();
			 $dbpassword = $row->password;
			 $status = $row->status;
			 $id = $row->id; 
			 if(password_verify($data['password'],$dbpassword)){
			 if($status==1){  
				$_SESSION['id'] = $id;				
				echo "<div class='alert alert-success'>Your account find successfully</div>";
				$this->redirect('pages/dashboard');
				} else { echo "<div class='alert alert-danger'>Please Confirm Your account <a href='resend.php?email=".$data['email']."' class='text-info'>Resend</a></div>"; }
			 }else{
				 echo "<div class='alert alert-danger'>Password Not Macthed</div>";				 
			 }
		 } else {			 
				echo "<div class='alert alert-danger'>Your account find Not successfully</div>";
		}
		
		}
		
		public function adminLoginDB($data){
		$frame = new Frame;
		$this->select()->from('admin')->where('adminName',$data['admin'])->getselect();
		if($this->countRows() > 0){ 
			 $row = $this->fetch();
			 $dbpassword = $row->password;
			 $status = $row->status;
			 $id = $row->adminId; 
			 if(password_verify($data['password'],$dbpassword)){
			 if($status==1){  
				$_SESSION['adminid'] = $id;				
				echo "<div class='alert alert-success'>Your account find successfully</div>";
				$this->redirect('dashboard');
				} else { echo "<div class='alert alert-danger'>Please Confirm Your account <a href='resend.php?email=".$data['email']."' class='text-info'>Resend</a></div>"; }
			 }else{
				 echo "<div class='alert alert-danger'>Password Not Macthed</div>";				 
			 }
		 } else {			 
				echo "<div class='alert alert-danger'>Your account find Not successfully</div>";
		}
		
		}
		
		public function doctorLoginDB($data){
		$this->select()->from('doctor')->where('mobile',$data['mobile'])->getselect();
		if($this->countRows() > 0){ 
			 $row = $this->fetch();
			 $dbpassword = $row->password;
			 $status = $row->status;
			 $id = $row->doctorId; 
			 if(password_verify($data['password'],$dbpassword)){
			 if($status==1){  
				$_SESSION['doctorid'] = $id;				
				echo "<div class='alert alert-success'>Your account find successfully</div>";
				$this->redirect('dashboard');
				} else { echo "<div class='alert alert-danger'>Please Confirm Your account <a href='resend.php?email=".$data['email']."' class='text-info'>Resend</a></div>"; }
			 }else{
				 echo "<div class='alert alert-danger'>Password Not Macthed</div>";				 
			 }
		 } else {			 
				echo "<div class='alert alert-danger'>Your account find Not successfully</div>";
		}
		  
		}
		
		public function covidLoginDB($data){
		$this->select()->from('covid')->where('covidName',$data['covidName'])->getselect();
		if($this->countRows() > 0){ 
			 $row = $this->fetch();
			 $dbpassword = $row->password;
			 $status = $row->status;
			 $id = $row->covidId;   
			 if(password_verify($data['password'],$dbpassword)){
			 if($status==1){  
				$_SESSION['covidId'] = $id;				
				echo "<div class='alert alert-success'>Your account find successfully</div>";
				$this->redirect('dashboard');
				} else { echo "<div class='alert alert-danger'>Please Confirm Your account <a href='resend.php?email=".$data['email']."' class='text-info'>Resend</a></div>"; }
			 }else{
				 echo "<div class='alert alert-danger'>Password Not Macthed</div>";				 
			 }
		 } else {			 
				echo "<div class='alert alert-danger'>Your account find Not successfully</div>";
		}
		
		}
		
		public function covidAdminLoginDB($data){
		$this->select()->from('covid_admin')->where('mobile',$data['mobile'])->getselect();
		if($this->countRows() > 0){ 
			 $row = $this->fetch();
			 $dbpassword = $row->password;
			 $status = $row->status;
			 $id = $row->covidAdminId; 
			 if(password_verify($data['password'],$dbpassword)){
			 if($status==1){  
				$_SESSION['covidAdminId'] = $id;				
				echo "<div class='alert alert-success'>Your account find successfully</div>";
				$this->redirect('dashboard');
				} else { echo "<div class='alert alert-danger'>Please Confirm Your account <a href='resend.php?email=".$data['email']."' class='text-info'>Resend</a></div>"; }
			 }else{
				 echo "<div class='alert alert-danger'>Password Not Macthed</div>";				 
			 }
		 } else {			 
				echo "<div class='alert alert-danger'>Your account find Not successfully</div>";
		}
		  
		}
		
		
		
		public function valueDB($id){
		return $this->select()->from('users')->where('id',$id)->result();
		}
		
		public function valueDBs($table,$dataAdmin){
		$key = implode(',',array_keys($dataAdmin));
		$values = implode(',',array_values($dataAdmin));
		return $this->select()->from($table)->where($key,$values)->result();
		}
	
		public function valuesDB($table){
		return $this->select()->from($table)->result(); 
		}
		 
		public function joinsDB($id){
			$data = [
			'personalInformation' => 'users.id = personalInformation.users_id',
			'employerInformation' => 'users.id = employerInformation.users_id',
			'emergencyInformation' => 'users.id = emergencyInformation.users_id',
			'insuranceInformation' => 'users.id = insuranceInformation.users_id',
			'hospitalPerefernce' => 'users.id = hospitalPerefernce.users_id',
		];
			return $this->from('users')->joinstable($data)->where('id',$id)->getjoins();
		}
		
		public function userUpdateDB($data,$table,$uid){
			if($this->from($table)->where($uid,'')->condition($data)->update($data)){
				return ture;
			} else {
				return false;
			}
		}

		public function updateData($data,$table,$uid){
			if($this->from($table)->where($uid,'')->condition($data)->update($data)){
				return true;
			} else {
				return false;
			}
		}
		
		public function check($data){
		$this->select()->from('users')->where('email',$data['email'])->getselect();
		if($this->countRows() > 0){
			return true;
		 } else { 
			return false;
		 }			
		}

		public function checks($table,$data){
		$key = implode(',',array_keys($data));
		$values = implode(',',array_values($data));
		$this->select()->from($table)->where($key,$values)->getselect();
		if($this->countRows() > 0){
			return true;
		 } else { 
			return false;
		 }			
		}
		
		public function deleteDB($id){
			if($this->from('userPhysiotherepy')->where('phyid',$id)->del()){
				echo "delete";
			} else {
				echo "not";
			}
		}

		public function deleteData($table,$data){
			$key = implode(',',array_keys($data));
			$values = implode(',',array_values($data));
			if($this->from($table)->where($key,$values)->del()){
				return true;
			} else {
				return false;
			}
		}

	}
?>