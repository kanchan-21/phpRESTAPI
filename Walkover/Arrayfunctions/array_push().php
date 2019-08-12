 <?php
//Returns the new number of elements in the array
 //The array_push() function inserts one or more elements to the end of an array.
 //You can add one value, or as many as you like.
 //Even if your array has string keys, your added elements will always have numeric keys 

$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);
?> 