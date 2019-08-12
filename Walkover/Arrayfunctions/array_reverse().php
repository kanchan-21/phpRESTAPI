 <?php
//Return the original array, the reversed array and the preserved array

$a=array("Volvo","XC90",array("BMW","Toyota"));
$reverse=array_reverse($a);
$preserve=array_reverse($a,true);

print_r($a);
print_r($reverse);
print_r($preserve);
?> 