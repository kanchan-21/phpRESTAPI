<?php
class Employee{
// database connection and table name
    private $conn;
    private $table_name = "employee";

    public $message;

    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

	// insert employee record
    function insertEmployee($decode){

    //validations
            if(!preg_match('/^[a-zA-Z]+$/',$decode["employee_name"])){
                $this->message="invalid employee name";
                return false;
            }
            if(!filter_var($decode["user_id"], FILTER_VALIDATE_INT)){
                $this->message="invalid user";
                return false;
            }

       		if(!filter_var($decode["employee_mno"], FILTER_VALIDATE_INT)){
       			$this->message="invalid employee mobile no";
        		return false;
        	}
        

        // query to insert record
        $query = "INSERT INTO " . $this->table_name . "(user_id,employee_name,employee_mno) VALUES('".$decode["user_id"]."', '".$decode["employee_name"]."',".$decode["employee_mno"].");";

        
        $query_execute=mysqli_query($this->conn,$query);
        if(!($query_execute)){
            $this->message="invalid credentials";
            return false;
        }
        else{
            $this->message="record inserted successfully";
            return true; 
        }
        
    }

     // get employee details
    function getEmployeeDetail($user_id){
        // select all query

        $query = "SELECT *
                FROM
                    " . $this->table_name . " 
                WHERE
                    user_id='".$user_id."'";
        $query_execute=mysqli_query($this->conn,$query);
        foreach (mysqli_query($this->conn,$query) as $key) {
        	$cols[]=mysqli_fetch_assoc($query_execute);
        }

        if(!($query_execute)){
            $this->message="invalid user id";
            return false;
        }
        else{
            $this->message="Successful authentication";
            return $cols;
        }
    }

    function updateEmployeeDetail($decode){

    //validations

    if(isset($decode["employee_name"])){
       if(!preg_match('/^[a-zA-Z]+$/',$decode["employee_name"])){
       $this->message="invalid employee_name";
        return false;
       }
    }
    if(isset($decode["employee_id"])){
       if(!filter_var($decode["employee_id"], FILTER_VALIDATE_INT)){
       $this->message="invalid employee id";
        return false;
        }
        $employee_id=$decode["employee_id"];
        unset($decode["employee_id"]);
    }

    if(isset($decode["user_id"])){
       if(!filter_var($decode["user_id"], FILTER_VALIDATE_INT)){
       $this->message="invalid user id";
        return false;
        }
    }

    if(isset($decode["employee_mno"])){
       if(!filter_var($decode["employee_mno"], FILTER_VALIDATE_INT)){
       $this->message="invalid employee mobile no";
        return false;
        }
    }
    foreach ($decode as $key => $value) {
       $cols[]="$key='$value'";
    }
    // query to update record
    $query = "UPDATE " . $this->table_name . " SET " .implode(",",$cols).",update_date=current_timestamp() where employee_id='". $employee_id."';";
        
        $query_execute=mysqli_query($this->conn,$query);
        if(!($query_execute)){
            $this->message="internal server error";
            return false;
        }
        else{
            $this->message="Successfully updated record for employee id ".$employee_id."!";
            return true;
        }
        
    }
    
}
?>