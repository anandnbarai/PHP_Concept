<?php

// A multidimensional array is an array containing one or more arrays.
$mobile = array (
    array("Nokia",15000,2),
    //place 00    01   02
    array("Samsung",25000,3),
    //       10      11   12
    array("Redmi",40000,8),
    //       20    21   22
    array("Apple",80000,1),
    //       30    31   32
);

for ($row=0; $row < 4; $row++){
    for($col=0;$col<3;$col++){
        echo $mobile[$row][$col];
        echo " | ";
    }
    echo "<br>";
}
// you can also wirte MD array in below format
// by use of print_r you can print all array data 
// with single line code.


$emp = [
    [1,"Anand","Manager",80000],
    [2,"Jay","Ass Manager",65000],
    [3,"Salman","Salesman",40000],
    [4,"Amir","Driver",15000]   
];
echo "<pre>";
print_r($emp);
echo "</pre>";


?>