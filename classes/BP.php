<?php
class BP extends Operations {
	use Fam;
	
	public function userBP(){
		$data = [
		'users_id' => $this->input('users_id'),
		'systolic' => $this->input('systolic'),
		'distolic' => $this->input('distolic'),
		'bpDate' => $this->input('bpDate'),
		'bpnotes' => $this->input('bpnotes'), 
		];
		
		$table = "bloodPressure";
		$this->insertDB($table,$data);
		
		//print_r($data);    
	} 
	
	public function prcdelete(){
		$id = $this->input('id');
		$this->deleteDB($id);
	} 
} 