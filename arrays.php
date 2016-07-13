<?php
$array=array();
$array[]=1;$array[]=4;$array[]=5;$array[]=4;$array[]=6;$array[]=4;$array[]=3;
for($x=0;$x<count($array);$x++){
 echo (count(array_keys($array,$array[$x], false)>2)?'k':'n');
}
?>
