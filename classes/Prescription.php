<?php
class Prescription extends Operations {
	use Fam,Upload;
	
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
		
		//print_r($data);    
	}
	
	public function prcdelete(){
		$id = $this->input('id');
		$this->deleteDB($id);
	}
}