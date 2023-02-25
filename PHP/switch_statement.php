<?php


$choice = 2;
// $choice = 1;

echo "1 for Calculate Square of a Number.<br>";
echo "2 for Calculate Cube of a Number.<br><br>";
$x=13;
switch($choice){
    case 1 :
        echo "Square of ",$x," is : ", $x*$x; 
    break;
    case 2 :
        echo "Cube of ",$x," is : ", $x*$x*$x;
    break; 
    default : echo "Wrong Choice.";
    }

?>