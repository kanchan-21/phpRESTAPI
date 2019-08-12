 <?php
//Return an array of random keys:
 //The array_rand() function returns a random key from an array, or it returns an array of random keys if you specify that the function should return more than one key.

$a=array("red","green","blue","yellow","brown");
$random_keys=array_rand($a,3);
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";
echo $a[$random_keys[2]];
?> 