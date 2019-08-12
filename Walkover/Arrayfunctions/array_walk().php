 <?php
//The array_walk() function runs each array element in a user-defined function. The array's keys and values are parameters in the function.
 // You can change an array element's value in the user-defined function by specifying the first parameter as a reference: &$value
 // To work with deeper arrays (an array inside an array), use the array_walk_recursive() function

function myfunction(&$value,$key)
{
$value="yellow";
}
$a=array("a"=>"red","b"=>"green","c"=>"blue");
array_walk($a,"myfunction");
print_r($a);
?> 