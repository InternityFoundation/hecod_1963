<?php
class Values extends Operations{
	
	public function user($id){
		return $this->valueDB($id);
	}
	
	public function admin($table,$dataAdmin){
		return $this->valueDBs($table,$dataAdmin);
	}

	public function forgotUser($email,$key){
		$data = [
			'emailkey' => $key
		];

		$table = 'password_reset_temp';
		return $this->checks($table,$data);
	}

	public function verify($table,$data){
		return $this->checks($table,$data);
	}
	
	public function users(){
		$table = "users";
		return $this->valuesDB($table);
	}
	
	public function joins($id){
		return $this->joinsDB($id);
	}
	
	public function limits($limit){
		return $this->limitDB($limit);
	}
	
	public function pagination($limit){
		$total_records = $this->countDB();
		return $total_pages = ceil($total_records/$limit);
	}
	
	public function total_records(){
		return $this->countDB();
	}
	
	public function search($name){
		return $this->searchDB($name);
	}
	
}

?>