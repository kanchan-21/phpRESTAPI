 <?php
//Create an array from variables and their values:

$firstname = "Peter";
$lastname = "Griffin";
$age = "41";

$name = array("firstname", "lastname");
$result = compact($name, "location", "age");

print_r($result);
?> 