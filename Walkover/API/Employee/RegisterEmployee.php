<?php
 
// get database connection
include_once '../config/database.php';
 
// instantiate user object
include_once '../objects/employee.php';

$database = new Database();
$db = $database->getConnection();

$employee = new Employee($db);

//jason or xml format server configuration

$incomingContentType =$_SERVER['CONTENT_TYPE'];
if($incomingContentType != 'application/json'){
        if($incomingContentType != 'application/xml'){
            header($_SERVER['SERVER_PROTOCOL']."data not json/xml");
        exit();
        }
        else{
        $content=trim(file_get_contents("php://input"));
        $decode=new SimpleXMLElement($content);  
        }
}
else{
    $content=trim(file_get_contents("php://input"));
    $decode=json_decode($content,true);
} 

// create the employee
if($employee->insertEmployee($decode)){

    $employee_arr=array(
        "status" => true,
        "message" => $employee->message
    );
}
else{
    $employee_arr=array(
        "status" => false,
        "message" => $employee->message
    );
}
print_r(json_encode($employee_arr));

?>