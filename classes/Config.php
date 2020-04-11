
<?php 
abstract class Config {

   private $host = "localhost";
   private $username = "pakkedha_hecod";
   private $database = "pakkedha_hecod";
   private $password = "[@?9pr(V6quQ";
   protected $db;

   public function __construct(){
    try {
        
        /*
            * Create database connection
        */ 

        $this->db = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database,$this->username, $this->password);

    } catch(PDOException $e){
        echo "Connection Problem: ". $e->getMessage();

    }

   }
   
   public function __destruct(){
	   $this->db = null;
   }

}


 ?>
