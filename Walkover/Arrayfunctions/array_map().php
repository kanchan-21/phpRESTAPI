 <?php
//Returns an array containing the values of array1, after applying the user-made function to each array

function myfunction($v)
{
  return($v*$v);
}

$a=array(1,2,3,4,5);
print_r(array_map("myfunction",$a));


//null function:Array ( [0] => Array ( [0] => Dog [1] => Puppy ) [1] => Array ( [0] => Cat [1] => Kitten ) ) 
$a1=array("Dog","Cat");
$a2=array("Puppy","Kitten");
print_r(array_map(null,$a1,$a2));
?> 