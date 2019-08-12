 <?php
//his function passes each value of the input array to the callback function. If the callback function returns true, the current value from input is returned into the result array. Array keys are preserved.

function test_odd(int $var)
  {
  return($var & 1);
  }

$a1=array(1,3,2,3,4);
print_r(array_filter($a1,"test_odd"));
?> 