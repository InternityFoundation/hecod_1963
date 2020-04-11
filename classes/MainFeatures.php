<?php 

class MainFeatures extends Operations{
	use Fam,Upload;
	
	public function userPhysiotherepy(){
		$phyReport = $_FILES['phyReport'];
		$data = [
		'users_id' => $this->input('users_id'),
		'phyHospital' => $this->input('phyHospital'),
		'phyDoctor' => $this->input('phyDoctor'),
		'phyPreOn' => $this->input('phyPreOn'),
		'phyPhone' => $this->input('phyPhone'),
		'phyAddress' => $this->input('phyAddress'),
		'phyNotes' => $this->input('phyNotes'),
		'phyReport' => $this->uploadImage($phyReport,'physio'),
		];
		
		 $table = "userPhysiotherepy";
		$this->insertDB($table,$data);
	}
	
	public function userPrescription(){
		$prcReport = $_FILES['prcReport'];
		$data = [
		'users_id' => $this->input('users_id'),
		'prcHospital' => $this->input('prcHospital'),
		'prcDoctor' => $this->input('prcDoctor'),
		'prcPreOn' => $this->input('prcPreOn'),
		'prcPhone' => $this->input('prcPhone'),
		'prcAddress' => $this->input('prcAddress'),
		'prcNotes' => $this->input('prcNotes'),
		'prcReport' => $this->uploadImage($prcReport,'presc'),
		];
		
		 $table = "prescription";
		$this->insertDB($table,$data);
	}

	public function userDiagnostic(){
		$diaReport = $_FILES['diaReport'];
		$data = [
		'users_id' => $this->input('users_id'),
		'diaCenter' => $this->input('diaCenter'),
		'diaDoctor' => $this->input('diaDoctor'),
		'diaPreOn' => $this->input('diaPreOn'),
		'diaRepOn' => $this->input('diaRepOn'),
		'diaPhone' => $this->input('diaPhone'),
		'diaAddress' => $this->input('diaAddress'),
		'diaNotes' => $this->input('diaNotes'),
		'diaReport' => $this->uploadImage($diaReport,'diag'),
		];

		//print_r($data);
		
		 $table = "diagnostic";
		$this->insertDB($table,$data);
	}
	
	public function phydelete(){
		$id = $this->input('id');
		$this->deleteDB($id);
	}
}