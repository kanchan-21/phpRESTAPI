<?php
//Create an array by using the elements from one "keys" array and one "values" array:
//Both arrays must have equal number of elements or returns FALSE if number of elements does not match
// array_combine(keys, values)

$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

$c=array_combine($fname,$age);
print_r($c);

  ?>