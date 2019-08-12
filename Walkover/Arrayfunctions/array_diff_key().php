 <?php
//Returns an array containing the entries from array1 whose keys are not present in any of the other arrays

$a1=array("red","green","blue","yellow");
$a2=array("red","green","blue");

$result=array_diff_key($a1,$a2);
print_r($result);
?> 