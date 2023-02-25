<?php 
function add()
{
    // static word can hold or save the value of variable a & b after code execution.
    Static $a=10;
    static $b=20;
    $a++;
    $b++;

    echo $a;
    echo "<br>";
    echo $b;
    echo "<br>";
}

add();
add();
add();
add();
add();
add();
add();
add();

?>