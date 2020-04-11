<?php
	class Opr extends QueryBuilder{

		public function valueDB($table,$value){
		return $this->select()->from($table)->multiwhere('users_id',$value)->result();
		}
		
		public function AllvalueDB($table){
		return $this->select()->from($table)->result();
		}

		public function dataCountDB($table,$value){
			$this->select()->from($table)->where('users_id',$value)->getselect();
			return $this->countRows(); 
		}
		
		public function allDataCountDB($table){
			$this->select()->from($table)->getselect();
			return $this->countRows();
		}
}
?>