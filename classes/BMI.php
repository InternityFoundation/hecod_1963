<?php
class BMI extends Operations {
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
	
	public function prcdelete(){
		$id = $this->input('id');
		$this->deleteDB($id);
	} 
} 