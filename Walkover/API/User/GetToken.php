<?php
// include database and object files
include_once '../config/database.php';
include_once '../objects/user.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare user object
$user = new User($db);

if($user->authenticateUser($_GET)){
    
    $user_arr=array(
        "status" => true,
        "message" => $user->message,
        "user_token" => $user->user_token
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