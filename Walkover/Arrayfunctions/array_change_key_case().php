<?php
//Change all keys in an array to uppercase:
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
print_r(array_change_key_case($age,CASE_UPPER));
print_r(array_change_key_case($age,CASE_LOWER));

//If two or more keys will be equal after running array_change_key_case() (e.g. "b" and "B"), the latest array will override the other:
$pets=array("a"=>"Cat","B"=>"Dog","c"=>"Horse","b"=>"Bird");
print_r(array_change_key_case($pets,CASE_UPPER));
?>