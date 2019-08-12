 <?php
//Remove the first element (red) from an array, and return the value of the removed element:
 // If the keys are numeric, all elements will get new keys, starting from 0 and increases by 1 

$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_shift($a);
print_r ($a);
?> 