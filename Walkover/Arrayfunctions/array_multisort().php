 <?php
 //The array_multisort() function returns a sorted array. You can assign one or more arrays. The function sorts the first array, and the other arrays follow, then, if two or more values are the same, it sorts the next array, and so on.
//String keys will be maintained, but numeric keys will be re-indexed, starting at 0 and increase by 1.
 //You can assign the sortorder and the sorttype parameters after each array. If not specified, each array parameter uses the default values.

$a1=array("Dog","Dog","Cat");
$a2=array("Pluto","Fido","Missy");
array_multisort($a1,SORT_ASC,$a2,SORT_DESC);
print_r($a1);
print_r($a2);

//Merge two arrays and sort them as numbers, in descending order:
$a1=array('a','b','d','f','c');
$a2=array(4,30,20,41,66);
$num=array_merge($a1,$a2);
array_multisort($num,SORT_DESC,SORT_NUMERIC);
print_r($num);
?> 