<?php

// The for loop is used when you know in advance how many times the script should run.

// Syntax
// for (initialization; condition; increment/decrement) {
//     code to be executed
//   }


for ($i = 1; $i <= 5; $i++) 
{
    echo "i = "." ". $i;
    echo "<br>";

}

  
$n = 14;
$a;

for ($b = 5; $b <= 15; $b++) 
{
    $a = $n * $b;
    echo "n * b ="." ".$a;
    echo "<br>";
}
?>