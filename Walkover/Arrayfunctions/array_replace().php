 <?php
//The array_replace() function replaces the values of the first array with the values from following arrays.
 //If a key from array1 exists in array2, values from array1 will be replaced by the values from array2. If the key only exists in array1, it will be left as it is
 //If a key exist in array2 and not in array1, it will be created in array1 
 //If multiple arrays are used, values from later arrays will overwrite the previous ones
 //applies replace in single index inner indexed arrays if available will remain without sorted
 

$a1=array("red","green");
$a2=array("blue","yellow");
$a3=array("orange","burgundy");
print_r(array_replace($a1,$a2,$a3));
?> 
