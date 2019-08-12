 <?php
//If the search parameter is a string and the type parameter is set to TRUE, the search is case-sensitive
 //in_array(search, array, type)

$people = array("Peter", "Joe", "Glenn", "Cleveland");

if (in_array("Glenn", $people))
  {
  echo "Match found";
  }
else
  {
  echo "Match not found";
  }
?> 