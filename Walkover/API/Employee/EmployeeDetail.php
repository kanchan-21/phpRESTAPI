<?php
// include database and object files
include_once '../config/database.php';
include_once '../objects/employee.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare user object
$employee = new Employee($db);
// set ID property of user to be edited
$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : die("provide a valid user id");
// read the details of user to be edited
 $stmt=array();
$stmt = $employee->getEmployeeDetail($user_id);

if(count($stmt) > 0){
    $employee_arr=array(
        "status" => true,
        "message" => $employee->message,
        "details" => $stmt
    );
}
else{
    $employee_arr=array(
        "status" => false,
        "message" => $employee->message,
    );
}
// make it json format
print_r(json_encode($employee_arr));
?>