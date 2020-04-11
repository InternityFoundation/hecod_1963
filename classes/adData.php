<?php
class adData extends Opr{

	public function fetureDataCount($table,$users_id){
		return $this->dataCountDB($table,$users_id);
	}
	
	public function allDataCount($table){
		return $this->allDataCountDB($table);
	}

	public function fetureData($table,$users_id){
		return $this->valueDB($table,$users_id);
	}
	
	public function AllData($table){
		return $this->AllvalueDB($table);
	}

	//public userData($table,$email) 
	
}

?>