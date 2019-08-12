<?php
// include database and object files
include_once '../config/database.php';
include_once '../objects/user.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare user object
$user = new User($db);
// set ID property of user to be edited
$user->user_token = isset($_GET['user_token']) ? $_GET['user_token'] : die("provide an user access token");
// read the details of user to be edited
 $stmt=array("");
$stmt = $user->getUserDetail();
if(count($stmt) > 0){
    
    $user_arr=array(
        "status" => true,
        "message" => $user->message,
        "details" => $stmt
    );
}
else{
    $user_arr=array(
        "status" => false,
        "message" => $user->message,
    );
}
// make it json format
print_r(json_encode($user_arr));
?>