 <?php
//This function uses two user-defined functions for comparison; the key is used in the first function and the value is used in the second!

// This function compares the keys and values of two (or more) arrays, and return an array that contains the entries from array1 that are present in array2, array3, etc.


function myfunction_key($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

function myfunction_value($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","b"=>"green","c"=>"green");

$result=array_uintersect_uassoc($a1,$a2,"myfunction_key","myfunction_value");
print_r($result);
?> 