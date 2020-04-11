<?php
class Physiotherepy extends Operations {
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
		
		//print_r($data);    
	}
	
	public function phydelete(){
		$id = $this->input('id');
		$this->deleteDB($id);
	}
}