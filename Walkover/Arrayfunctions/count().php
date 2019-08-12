 <?php
 //Return the number of elements in an array:
$cars=array("Volvo","BMW","Toyota");
echo count($cars);

//Count the array recursively:
$cars=array
  (
  "Volvo"=>array
  (
  "XC60",
  "XC90"
  ),
  "BMW"=>array
  (
  "X3",
  "X5"
  ),
  "Toyota"=>array
  (
  "Highlander"
  )
  );

echo "Normal count: " . count($cars)."<br>";
echo "Recursive count: " . count($cars,1);
?> 