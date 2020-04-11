<?php
class Features extends Operations {
	use Fam;
	
	public function userBMI(){
		$data = [
		'users_id' => $this->input('users_id'),
		'bmiWeight' => $this->input('bmiWeight'),
		'bmiHeight' => $this->input('bmiHeight'),
		'bmi' => $this->input('bmi'),
		'bmiDate' => $this->input('bmiDate'),
		'bminotes' => $this->input('bminotes'),  
		];
		
		$table = "bmi";
		$this->insertDB($table,$data);
		
		//print_r($data);    
	}
	
	public function userBG(){
		$data = [
		'users_id' => $this->input('users_id'),
		'bgResult' => $this->input('bgResult'),
		'bgType' => $this->input('bgType'),
		'bgDate' => $this->input('bgDate'),
		'bgnotes' => $this->input('bgnotes'),  
		];
		
		$table = "bloodGlucose";
		$this->insertDB($table,$data);
		
		//print_r($data);    
	}

	public function userIM(){
		$data = [
		'users_id' => $this->input('users_id'),
		'immunization' => $this->input('immunization'),
		'imDate' => $this->input('imDate'),
		'imnotes' => $this->input('imnotes'),  
		];
		
		$table = "immunization";
		$this->insertDB($table,$data);
		
		//print_r($data);    
	}
	
	public function userAL(){
		$data = [
		'users_id' => $this->input('users_id'),
		'allergy' => $this->input('allergy'),
		'stillHave' => $this->input('stillHave'),
		'durationType' => $this->input('durationType'),
		'duration' => $this->input('duration'),
		'severity' => $this->input('severity'),
		'alnotes' => $this->input('alnotes'),  
		];
		
		$table = "allergy";
		$this->insertDB($table,$data);
		
		//print_r($data);    
	}
	
	public function prcdelete(){
		$id = $this->input('id');
		$this->deleteDB($id);
	}
}