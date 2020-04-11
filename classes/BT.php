<?php
class BT extends Operations {
	use Fam;
	
	public function userBT(){
		$data = [
		'users_id' => $this->input('users_id'),
		'btResult' => $this->input('btResult'),
		'btCollDate' => $this->input('btCollDate'),
		'btnotes' => $this->input('btnotes'), 
		];
		
		$table = "bloodTemp";
		$this->insertDB($table,$data);
		
		//print_r($data);    
	} 
	
	public function prcdelete(){
		$id = $this->input('id');
		$this->deleteDB($id);
	} 
} 