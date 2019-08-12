<?php
 
// get database connection
include_once '../config/database.php';
 
// instantiate user object
include_once '../objects/user.php';
 
$database = new Database();
$db = $database->getConnection();
 
$user = new User($db);

//jason format server configuration

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
 
// create the user
if($user->userRegistration($decode)){

    $user_arr=array(
        "status" => true,
        "message" => $user->message,
        "user_token"=>$user->user_token
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