<?php include ("functions.php"); ?>
<?php


	//******************************************** Register **********************************
	if(isset($_POST['register'])){
		if($_POST['csrf_token'] != $_SESSION['token']){
			echo "session token not valid";
		} else {
		$register->userRegister();
		}
	}
	
	if(isset($_POST['otp'])){
		$register->verifyOtp();
	}
	
	//******************************************** Login *************************************
	if(isset($_POST['login'])){
		if($_POST['csrf_token'] != $_SESSION['token']){
			echo "session token not valid";
		} else {
			$login->userLogin();
		}
	}
	
	//******************************************** Login *************************************
	if(isset($_POST['adminLogin'])){
		if($_POST['csrf_token'] != $_SESSION['token']){
			echo "session token not valid";
		} else {
			$login->adminLogin();
		}
	}
	
	if(isset($_POST['employeeName'])){
		$register->adminRegister();
	}
	
	if(isset($_POST['password2'])){ 
		$login->passwordChange();
	}
	
	if(isset($_POST['docPassword'])){ 
		$login->docChange();
	}
	
	//******************************************** Login *************************************
	if(isset($_POST['doctorLogin'])){
		if($_POST['csrf_token'] != $_SESSION['token']){
			echo "session token not valid";
		} else {
			$login->doctorLogin();
		}
	}
	 
	if(isset($_POST['doctorName'])){
		$register->doctorRegister(); 
	}

	//******************************************** Login *************************************
	if(isset($_POST['covidLogin'])){
		if($_POST['csrf_token'] != $_SESSION['token']){
			echo "session token not valid";
		} else {
			$login->covidLogin();
		}
	}   
	
	if(isset($_POST['covidRegister'])){
		if($_POST['csrf_token'] != $_SESSION['token']){
			echo "session token not valid";
		} else {
			$register->covidRegister();
		}
	}
	
	//******************************************** Login *************************************
	if(isset($_POST['covidAdminLogin'])){
		if($_POST['csrf_token'] != $_SESSION['token']){
			echo "session token not valid";
		} else {
			$login->covidAdminLogin();
		}
	}   
	
	if(isset($_POST['covidAdminRegister'])){
		if($_POST['csrf_token'] != $_SESSION['token']){
			echo "session token not valid";
		} else {
			$register->covidRegister();
		}
	}
	
	//******************************************** Frogot *************************************
	if(isset($_POST['forgot'])){
		if($_POST['csrf_token'] != $_SESSION['token']){
			echo "session token not valid";
		} else {
			$login->userForgot();
		}
	}

	//******************************************** reset *************************************
	if(isset($_POST['reset'])){
			$login->userReset();
	}
	
	//******************************************** Login *************************************
	if(isset($_POST['pi'])){
		$profile->profilePI();
	}
	
	if(isset($_POST['mobileVerify'])){
		//$profile->mobileVerify();
		if($profile->mobileVerify()){
			;
		}
	}
	
	//******************************************** Login *************************************
	if(isset($_POST['em'])){
		$profile->profileEM();
	}
	
	//******************************************** Login *************************************
	if(isset($_POST['empi'])){
		$profile->profileEMPI();
	}
	
	//******************************************** Login *************************************
	if(isset($_POST['ii'])){
		$profile->profileII();
	}
	
	//******************************************** Login *************************************
	if(isset($_POST['hp'])){
		$profile->profileHP();
	}
	 
	//******************************************** Login *************************************
	if(isset($_POST['phyHospital'])){
		$mainFeatures->userPhysiotherepy();
	}
	
	if(isset($_POST['prcHospital'])){
		$mainFeatures->userPrescription();  
	}

	
	if(isset($_POST['diaCenter'])){
		$mainFeatures->userDiagnostic(); 
	}
	
	if(isset($_POST['systolic'])){
		$vitals->userBP();
	}
	
	if(isset($_POST['btResult'])){
		$vitals->userBT();
	}
	
	if(isset($_POST['bmiWeight'])){
		$features->userBMI(); 
	}
	
	if(isset($_POST['bgResult'])){
		$features->userBG(); 
	}
	
	if(isset($_POST['immunization'])){
		$features->userIM(); 
	}
	
	if(isset($_POST['allergy'])){
		$features->userAL(); 
	}
	
	if(isset($_GET['id'])){
		$physiotherepy->phydelete();
	}

	if(isset($_POST['emailcon'])){

		$register->confirmUser();
	}

	if(isset($_FILES['profilePhoto'])){
		$profile->photoUpdate();
	}
