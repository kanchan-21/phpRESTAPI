 <?php
//array_keys(array, value, strict)

$a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
print_r(array_keys($a));

//Using the value parameter:
$a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
print_r(array_keys($a,"Highlander"));

//Using the strict parameter, false:
$a=array(10,20,30,"10");
print_r(array_keys($a,"10",false));

//Using the strict parameter, true:
$a=array(10,20,30,"10");
print_r(array_keys($a,"10",true));
?> 