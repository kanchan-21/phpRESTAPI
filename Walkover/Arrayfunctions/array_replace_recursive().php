 <?php
//Replace the values of the first array with the values from the second array recursively in multiindexed array.
 //The array_replace_recursive() function replaces the values of the first array with the values from following arrays recursively.
 //If a key from array1 exists in array2, values from array1 will be replaced by the values from array2. If the key only exists in array1, it will be left as it is. If a key exist in array2 and not in array1, it will be created in array1. If multiple arrays are used, values from later arrays will overwrite the previous ones.
 //If you do not specify a key for each array, this function will behave exactly the same as the array_replace() function.

$a1=array("a"=>array("red"),"b"=>array("green","blue"),);
$a2=array("a"=>array("yellow"),"b"=>array("black"));
print_r(array_replace_recursive($a1,$a2));
?> 