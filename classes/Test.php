<?php

 class Test extends Qu{
	 
	 public function valuesDB(){
		return $this->select()->from('users')->result(); 
		}
		
	public function valueDB($id){
		return $this->select()->from('users')->where('id',$id)->result();
		}
		
	public function a($id){
		return $this->select()->from('users')->where('id',$id)->result();
	}
	
	public function delDB($id){
		return $this->from('users')->where('id',$id)->del();
	}
	
	public function joins($data){
				
		return $this->select()->from('users')->joinstable($data)->getjoins();
	}
	 
 } 