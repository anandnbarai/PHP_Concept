<?php

// foreach loop

$colors = array("red", "green", "blue");

foreach ($colors as $color) {
  echo $color;
  echo "<br>";
}

// to print key value we write $name => $age in foreach loop same as in array function.

$ages = array("Peter"=>32, "John"=>28, "Mary"=>45);

echo "<ul>";
foreach ($ages as $name => $age) {
  echo "<li> $name : $age </li>";
}
echo "</ul>";
?>