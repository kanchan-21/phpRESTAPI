<?php
 
// get database connection
include_once '../config/database.php';
 
// instantiate user object
include_once '../objects/user.php';

$database = new Database();
$db = $database->getConnection();
 
$user = new User($db);
$incomingContentType =$_SERVER['CONTENT_TYPE'];
if($incomingContentType != 'application/json'){
        if($incomingContentType != 'application/xml'){
            header($_SERVER['SERVER_PROTOCOL']."data not json/xml");
        exit();
        }
        else{
        $content=trim(file_get_contents("php://input"));
        $decode=simplexml_load_string($content);
        $user->user_token=$decode->user_token;    
        }
}
else{
    $content=trim(file_get_contents("php://input"));
    $decode=json_decode($content,true);
    $user->user_token=$decode["user_token"];
}


unset($decode["user_token"]);
if($user->updateUserDetail($decode)){
    $user_arr=array(
        "status" => true,
        "message" => $user->message
    );
}
else{
    $user_arr=array(
        "status" => false,
        "message" => $user->message
    );
}
print_r(json_encode($user_arr));


?>