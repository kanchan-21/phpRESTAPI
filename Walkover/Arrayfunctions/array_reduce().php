 <?php
//The array_reduce() function sends the values in an array to a user-defined function, and returns a string.
 // If the array is empty and initial is not passed, this function returns NULL.

function myfunction($v1,$v2)
{
return $v1 . "-" . $v2;
}
$a=array("Dog","Cat","Horse");
print_r(array_reduce($a,"myfunction",5));
?> 