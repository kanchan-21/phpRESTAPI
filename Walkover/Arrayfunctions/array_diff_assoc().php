<?php
//Returns an array containing the entries from array1 that are not present in any of the other arrays:compares the keys and values of two (or more) arrays, and returns the differences.

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","f"=>"green","g"=>"blue");
$a3=array("h"=>"red","b"=>"green","g"=>"blue");

$result=array_diff_assoc($a1,$a2,$a3);
print_r($result);
?> 