 <?php
//The array_pad() function inserts a specified number of elements, with a specified value, to an array.
 // If you assign a negative size parameter, the function will insert new elements BEFORE the original elements
 // This function will not delete any elements if the size parameter is less than the size of the original array.

$a=array("red","green");
print_r(array_pad($a,5,"blue"));
?> 