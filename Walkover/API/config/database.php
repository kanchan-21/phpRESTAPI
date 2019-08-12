<?php

class Database{
 
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "walkover";
    private $username = "root";
    private $password = "";
    public $conn;
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 

        //    $this->conn =mysqli_connect($host,$username,$password,$db_name);
        
            
        
            $this->conn = mysqli_connect($this->host, $this->username, $this->password,$this->db_name);
            if(!($this->conn))
            {
                die ("Connection error: " . mysqli_error($this->conn)); 
            }
            
        
        return $this->conn;
    }
}
?>
