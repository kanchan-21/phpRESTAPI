<?php
//indexed array - Arrays with numeric index
$cars=array("Volvo","BMW","Toyota");
$arrlength=count($cars);

for($x=0;$x<$arrlength;$x++)
  {
  echo $cars[$x];
  echo "<br>";
  }

//associative array - Arrays with named keys
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
foreach($age as $x=>$x_value)
  {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
  }

//multidimensional arrays - Arrays containing one or more arrays
// A two-dimensional array:
$cars=array
  (
  array("Volvo",100,96),
  array("BMW",60,59),
  array("Toyota",110,100)
  );
  for($x=0;$x<count($cars);$x++){
  	foreach ($cars[$x] as $Key => $value) {
  		echo "Key=" . $Key . ", Value=" . $value;
  		echo "<br>";
  	}
  }

?>