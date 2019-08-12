<?php
// 	Returns an associative array, where the keys are the original array's values, and the values are the number of occurrences:Array ( [A] => 2 [Cat] => 1 [Dog] => 2 )

$a=array("A","Cat","Dog","A","Dog");
print_r(array_count_values($a));
?> 