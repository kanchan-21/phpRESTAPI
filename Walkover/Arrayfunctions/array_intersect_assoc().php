 <?php
//Returns an array containing the entries from array1 that are present in all of the other arrays,Compare the keys and values of two arrays, and return the matches:

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","c"=>"blue");

$result=array_intersect_assoc($a1,$a2);
print_r($result);
?> 