<?php
//array_splice(array, start, length, array) 

// Preserve parameter set to true:
$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,1,2,true));//Array ( [1] => green [2] => blue )

// Preserve parameter set to false (default):
$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,1,2,false));//Array ( [0] => green [1] => blue ) 

// Note the differences in the array keys
?>