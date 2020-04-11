<?php
	abstract class QueryBuilder extends Config{
		
	//****************************************************  Veriable Define *********************************
	
    private $selectables = array();
    private $table;
    private $whereClause;
    private $limit;
    private $value;
    private $likeClause;
    private $keys;
    private $condition;
    private $joinstable;
    private $multi;
	
	//****************************************************  Function Select *********************************

    public function select() {
        $this->selectables = func_get_args();
        return $this;
    }
	
	//****************************************************  Function From *********************************

    public function from($table) {
        $this->table = $table;
        return $this;
    }
	
	//****************************************************  Function WHERE *********************************

    public function where($data,$value) {
		$this->keys = ":".$data;
        $this->whereClause = $data."= ". $this->keys;
        $this->value = $value;
        return $this;
		
    }
	
	//****************************************************  Function WHERE *********************************

    public function multiwhere($data,$value) {
		$this->keys = ":".$data;
        $this->multi = $data."= ". $this->keys;
        $this->value = $value;
        return $this;
		
    }
	
	//****************************************************  Function LIKE *********************************
	
	public function like($data,$value){
		$this->likeClause = $data." LIKE CONCAT('%', :".$data.", '%')";
		$this->value = $value;
		return $this;
	}
	
	//****************************************************  Function Limit *********************************

    public function limit($limit) {
        $this->limit = $limit;
        return $this;
    }
	
	//****************************************************  Result *********************************

    public function result() {
        $query[] = "SELECT";
        // if the selectables array is empty, select all
        if (empty($this->selectables)) {
            $query[] = "*";  
        }
        // else select according to selectables
        else {
            $query[] = join(', ', $this->selectables);
        } 

        $query[] = "FROM";
        $query[] = $this->table;

        if (!empty($this->whereClause)) {
            $query[] = "WHERE ";
;
            $query[] = $this->whereClause;
        }

        if (!empty($this->multi)) {
            $query[] = "WHERE ";
;
            $query[] = $this->multi;
        }

        if (!empty($this->limit)) {
            $query[] = "LIMIT";
            $query[] = $this->limit;
        }
		
		if (!empty($this->likeClause)){
            $query[] = "WHERE ";
			$query[] = $this->likeClause;
		}

        if(!empty($this->whereClause) and !empty($this->value)){
			$qry = join(' ', $query);
				$this->result = $this->db->prepare($qry);
				$this->result->bindParam($this->keys,$this->value, PDO::PARAM_STR);
				$this->result->execute();
			return $this->result->fetch(PDO::FETCH_OBJ);
		}

		else if(!empty($this->multi) and !empty($this->value)){
			$qry = join(' ', $query);
				$this->result = $this->db->prepare($qry);
				$this->result->bindParam($this->keys,$this->value, PDO::PARAM_STR);
				$this->result->execute();
			return $this->result->fetchAll(PDO::FETCH_OBJ);
		}
		
		else if(!empty($this->likeClause) and !empty($this->value)){
			$qry = join(' ', $query);
				$this->result = $this->db->prepare($qry);
				$this->result->execute([':name'=>$this->value]);
				return $this->result->fetchAll(PDO::FETCH_OBJ);
		} 
		
		else {
			$qry = join(' ', $query);
				$this->result = $this->db->prepare($qry);
				$this->result->execute();
				return $this->result->fetchAll(PDO::FETCH_OBJ);
		}    
    }
	
	//****************************************************  INSERT *********************************
	
	public function insert($data){		
		$key = implode(',',array_keys($data));
		$var = implode(', :',array_keys($data));
		$values = implode(',',array_values($data));
			$qry = "INSERT INTO ".$this->table." (".$key.") values ( :".$var.")"; 
				$this->Query = $this->db->prepare($qry);
					if($this->Query->execute($data)){
						return true;
					} else {
						return false;
					}
	}
	
	//**************************************************** getselect  *********************************
	
	public function getselect(){
		$query[] = "SELECT";
        // if the selectables array is empty, select all
        if (empty($this->selectables)) {
            $query[] = "*";  
        }
        // else select according to selectables
        else {
            $query[] = join(', ', $this->selectables);
        }

        $query[] = "FROM";
        $query[] = $this->table; 

        if (!empty($this->whereClause)) {
            $query[] = "WHERE ";
;
            $query[] = $this->whereClause;
        }

        if(!empty($this->whereClause) and !empty($this->value)){
			$qry = join(' ', $query);
				$this->result = $this->db->prepare($qry);
				$this->result->bindParam($this->keys,$this->value, PDO::PARAM_STR);
				return $this->result->execute();
			//return $this->result->fetch(PDO::FETCH_OBJ);
		}else {
			$qry = join(' ', $query);
			$this->result = $this->db->prepare($qry);
			return $this->result->execute(); 
		} 
		
	}
	
	//**************************************************** joinstable  *********************************
	
	public function joinstable($tables){
		$this->joinstable = "";
		foreach($tables as $table => $value){			
			$this->joinstable .= "INNER JOIN $table ON $value ";
		}
		return $this;
	}
	
	public function getjoins(){
		$query[] = "SELECT";
        // if the selectables array is empty, select all
        if (empty($this->selectables)) {
            $query[] = "*";  
        }
        // else select according to selectables
        else {
            $query[] = join(', ', $this->selectables);
        }

        $query[] = "FROM";
        $query[] = $this->table; 
		
		//$query[] = $this->joinstable;

        if (!empty($this->whereClause)) {
            $query[] = "WHERE ";
            $query[] = $this->whereClause;
        }

        if(!empty($this->whereClause) and !empty($this->value)){
				$qry = join(' ', $query);
				$this->result = $this->db->prepare($qry);
				$this->result->bindParam($this->keys,$this->value, PDO::PARAM_STR);
				$this->result->execute();
				return $this->result->fetch(PDO::FETCH_OBJ);
		}else {
			$qry = join(' ', $query);
			$this->result = $this->db->prepare($qry);
			$this->result->execute();
			return $this->result->fetchAll(PDO::FETCH_OBJ);
		} 
		
	}
	
	//**************************************************** Function Condition  *********************************
	
	public function condition($data){			
		$condition = ''; 
		foreach(array_splice($data, 1) as $key => $value){
			$condition .= $key." = :".$key.", ";
		}
		$this->condition = substr($condition,0,-2);
		return $this;
	}
	
	//**************************************************** UPDATE  *********************************
	
	public function update($data){ 
		$qry = "UPDATE ".$this->table ." SET " .$this->condition." where ".$this->whereClause;
		$this->Query = $this->db->prepare($qry);
		if($this->Query->execute($data)){
			return true;
		} else {
			return false;
		}
		
	}
	
	//**************************************************** UPDATE  *********************************
	
	public function del(){ 
		$qry = "DELETE FROM ".$this->table ." where ".$this->whereClause;
		$this->Query = $this->db->prepare($qry);
		$this->Query->bindParam($this->keys,$this->value, PDO::PARAM_STR);
		if($this->Query->execute()){
			return true;
		} else {
			return false;
		}
		
	}
	
	//**************************************************** fetch  *********************************
	
	public function fetch(){
        return $this->result->fetch(PDO::FETCH_OBJ);
	}
	
	//**************************************************** countRows  *********************************
	
	public function countRows(){
        return $this->result->rowCount();
	}
	
	//**************************************************** countRows  *********************************
	
	public function lastInsert(){
        return $this->db->lastInsertId();
	}

	}
	
	


?>