 <?php
//The array_splice() function removes selected elements from an array and replaces it with new elements. The function also returns an array with the removed elements.
 // If the function does not remove any elements (length=0), the replaced array will be inserted from the position of the start parameter 
 //The keys in the replaced array are not preserved.
 //array_splice(array, start, length, array) 
 // If this start is set to a negative number, the function will stop that far from the last element. If this value is not set, the function will remove all elements, starting from the position set by the start-parameter.


$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"purple","b"=>"orange");
array_splice($a1,0,2,$a2);
print_r($a1);
print_r(array_splice($a1,0,2,$a2));
?> 