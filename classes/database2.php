<?php
	class database2 extends connection{

		
    private $selectables = array();
    private $table;
    private $whereClause;
    private $limit;
    private $value;

    public function select() {
        $this->selectables = func_get_args();
        return $this;
    }

    public function from($table) {
        $this->table = $table;
        return $this;
    }

    public function where($data,$value) {
        $this->whereClause = $data."= ?";
        $this->value = $value;
        return $this;
    }

    public function limit($limit) {
        $this->limit = $limit;
        return $this;
    }

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

        if (!empty($this->limit)) {
            $query[] = "LIMIT";
            $query[] = $this->limit;
        }

        if(!empty($this->value)){
        $qry = join(' ', $query);
        $this->result = $this->con->prepare($qry);
		$this->result->execute([$this->value]);
        return $this->result->fetch(PDO::FETCH_OBJ);
        //return $this->value;
    } else {
    	$qry = join(' ', $query);
        $this->result = $this->con->prepare($qry);
		$this->result->execute();
        return $this->result->fetchAll(PDO::FETCH_OBJ);
    }
    }

	} 


?>