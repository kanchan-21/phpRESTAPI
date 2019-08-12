 <?php
//The array_unique() function removes duplicate values from an array. If two or more array values are the same, the first appearance will be kept and the other will be removed.

//Note: The returned array will keep the first array item's key type.
 //array_unique(array, sorttype) 

$a=array("a"=>"red","b"=>"green","c"=>"red");
print_r(array_unique($a));
?> 