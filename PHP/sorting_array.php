<?php

// the elements in array can be sorted in alphabatical or numerical order, desecnding or ascending order.

// 1. sort() - sort arrays in ascending order, sort function only sort the array, to print all data from array
// we need to use any loop function.


$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
}

// 2. rsort() - sort arrays in descending order

$numbers = array(4, 6, 2, 22, 11, 8, 28, 154, 48, 1, 58, 12, 87, 1);
rsort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) 
{
  echo $numbers[$x];
  echo "<br>";
}


// 3. asort() - sort associative arrays in ascending order, according to the value

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);

foreach($age as $x => $x_value) 
{
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

// 4. ksort() - sort associative arrays in ascending order, according to the key

echo "<br>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);

foreach($age as $x => $x_value) 
{
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}


// 5. arsort() - sort associative arrays in descending order, according to the value

echo "<br>";
$age = array ("Peter"=>35, "Ben"=>37, "Joe"=>43);
arsort($age);
foreach ($age as $x => $x_value)
{
    echo "Key=" . $x . ", Value=". $x_value;
    echo "<br>";

}

// 6. krsort() - sort associative arrays in descending order, according to the key

echo "<br>";
$age = array ("Peter"=>35, "Ben"=>37, "Joe"=>43);
krsort($age);
foreach ($age as $x => $x_value)
{
    echo "Key=" . $x . ", Value=". $x_value;
    echo "<br>";

}


?>