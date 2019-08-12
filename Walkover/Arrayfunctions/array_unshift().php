 <?php
//The array_unshift() function inserts new elements to an array. The new array values will be inserted in the beginning of the array. 
 //Numeric keys will start at 0 and increase by 1. String keys will remain the same
 //array_unshift(array, value1, value2, value3, ...)

$a=array("a"=>"red","b"=>"green");
array_unshift($a,"blue");
print_r($a);
?> 