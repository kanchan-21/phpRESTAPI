<?php
class User{
 
    // database connection and table name
    private $conn;
    private $table_name = "user";

    public $user_token;
    public $message;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    // user registration
    function userRegistration($decode){

    //validations
            if(!preg_match('/^[a-zA-Z]+$/',$decode["user_firstname"])){
                $this->message="invalid user first name";
                return false;
            }
            if(!preg_match('/^[a-zA-Z]+$/',$decode["user_lastname"])){
                $this->message="invalid user last name";
                return false;
            }
            if(!filter_var($decode["user_email"], FILTER_VALIDATE_EMAIL)){
                $this->message="invalid user email";
                return false;
            }
            if(!filter_var($decode["user_mno"], FILTER_VALIDATE_INT)){
                $this->message="invalid user mobile no";
                return false;
            }
         $this->user_token=base64_encode($decode["user_email"]+time());
    
        if($this->isAlreadyExist($decode)){
            $this->message="user already exist";
            return false;
        }
        $user_password=md5($decode["user_password"]);

        // query to insert record
        $query = "INSERT INTO " . $this->table_name . "(user_token,user_password,user_firstname,user_lastname,user_email,user_mno) VALUES('".$this->user_token."','".$user_password."','".$decode["user_firstname"]."', '".$decode["user_lastname"]."','".$decode["user_email"]."',".$decode["user_mno"].");";
        
        $query_execute=mysqli_query($this->conn,$query);
        if(!($query_execute)){
            $this->message="invalid credentials";
            return false;
        }
        else{
            $this->message="Successful registration";
            return true; 
        }
        
    }
    // Authenticate user
    function getUserDetail(){
        // select all query

        $query = "SELECT *
                FROM
                    " . $this->table_name . " 
                WHERE
                    user_token='".$this->user_token."'";
        $query_execute=mysqli_query($this->conn,$query);
        if(!($query_execute)){
            $this->message="invalid credentials";
            return false;
        }
        else{
            $this->message="Successful authentication";
            return mysqli_fetch_assoc($query_execute);
        }
    }

    function updateUserDetail($decode){
    //validations

    if(isset($decode["user_firstname"])){
       if(!preg_match('/^[a-zA-Z]+$/',$decode["user_firstname"])){
       $this->message="invalid user email";
        return false;
       }
    }
    if(isset($decode["user_lastname"])){
       if(!preg_match('/^[a-zA-Z]+$/',$decode["user_lastname"])){
       $this->message="invalid user email";
        return false;
      }
    }

    if(isset($decode["user_mno"])){
       if(!filter_var($decode["user_mno"], FILTER_VALIDATE_INT)){
       $this->message="invalid user mobile no";
        return false;
        }
    }
    $user_password=md5($decode["user_password"]);
    foreach ($decode as $key => $value) {
       $cols[]="$key='$value'";
    }
    // query to update record
    $query = "UPDATE " . $this->table_name . " SET " .implode(",",$cols).",user_password='".$user_password."',update_date=current_timestamp() where user_token='". $this->user_token."';";
        
        $query_execute=mysqli_query($this->conn,$query);
        if(!($query_execute)){
            $this->message="internal server error";
            return false;
        }
        else{
            $this->message="Successfully updated record for ".$this->user_token."!";
            return true;
        }
        
    }

    function authenticateUser($decode){
        if(isset($decode['user_email'])){
            if(isset($decode['user_password'])){
                $decode['user_password']=md5($decode['user_password']);
            }
            else{
                $this->message="enter password";
            }
        }
        else{
           $this->message="enter user email"; 
        }

    $query = "SELECT user_token
                FROM
                " . $this->table_name . " 
            WHERE
                user_email='".$decode['user_email']."'and user_password='".$decode['user_password']."'";

    $query_execute=mysqli_query($this->conn,$query);
    
            if((mysqli_num_rows($query_execute))>0){
            $result=mysqli_fetch_assoc($query_execute);
            $this->user_token=$result["user_token"];
            $this->message="user authenticated successfully";
                return true;
            }
            return false;

    }

    function isAlreadyExist($decode){
    $query = "SELECT *
                FROM
                " . $this->table_name . " 
            WHERE
                user_email='".$decode['user_email']."'";
            
    $query_execute=mysqli_query($this->conn,$query);
    
            if((mysqli_num_rows($query_execute))>0){
                return true;
            }
            return false;
    }
}