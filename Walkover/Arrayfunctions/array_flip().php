 <?php
//Returns the flipped/exchanged array on success. NULL on failure

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$result=array_flip($a1);
print_r($result);
?> 