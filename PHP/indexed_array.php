<?php

// an index array is an array where each element is assigned a numeric index, starting from 0 and incrementing by 1 
// for each subsequent element. The values in an index array can be of any data type, including strings, 
// integers, floats, and even other arrays.

$colors = array("red", "green", "blue");
echo ($colors[2])."<br>";

// count function can count number of value store in array function

echo count($colors)."<br>";

// use for loop to print all value store in array funtion

$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo "I love ".$cars[$x].".";
  echo "<br>";
}

?>