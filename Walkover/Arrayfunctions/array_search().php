 <?php
//Search an array for the value "red" and return its key:

$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("red",$a);

//array_search(value, array, strict),When strict set to true, the number 5 is not the same as the string 5 i.e. it will search for identical element

$a=array("a"=>"5","b"=>5,"c"=>"5");
echo array_search(5,$a,true);
?> 