<?php

// foreach loop

$colors = array("red", "green", "blue");

foreach ($colors as $color) {
  echo $color;
  echo "<br>";
}

$ages = array("Peter"=>32, "John"=>28, "Mary"=>45);

foreach ($ages as $name => $age) {
  echo "$name is $age years old.<br>";
}

?>