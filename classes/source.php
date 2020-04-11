<?php 
class source extends db {

    public $Query;
    
    /*
        * Query method accept all database queries
    */ 
    public function Query($query, $param = []){
    if(empty($param)){
     /*
        * if we dont have the parameters
     */ 
     $this->Query = $this->db->prepare($query);
     return $this->Query->execute();
    } else {
     /*
        * if we have some parameters
     */ 

     $this->Query = $this->db->prepare($query);
     return $this->Query->execute($param);
    }

    }

    /*      
        * Count the number of rows
    */ 

    public function CountRows(){
        return $this->Query->rowCount();
    }
	
	/*      
        * Last Id
    */ 

    public function LastInsert(){
        return $this->db->lastInsertId();
    }

    /*
       * Fetch all records from specific table
    */ 

    public function FetchAll(){ 
        return $this->Query->fetchAll(PDO::FETCH_OBJ);
    }
	
	/* 
		* Fetch Record from specific table
	*/
	
	public function Fetch(){
		return $this->Query->fetch(PDO::FETCH_OBJ);
	}
	
	public function FetchAssoc(){
		return $this->Query->fetch(PDO::FETCH_ASSOC);
	}
	
	public function FetchAssocAll(){
		return $this->Query->fetchALL(PDO::FETCH_ASSOC);
	}

    /*
        * fetch single row from specific table
    */ 

    public function Single(){
        return $this->Query->fetch(PDO::FETCH_OBJ);
    }
	

}


 ?>