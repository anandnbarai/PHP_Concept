<?php 

// A local variable is one that is declared inside a function or 
// block of code and is only accessible from within that function or block of code

function anand()
{
    $a = "Hi, I am Anand.";
    echo $a;
}
anand();

// A global variable, on the other hand, is one that is declared outside 
// of any function or block of code and is accessible from anywhere in the script, including within functions.


$x = "Hi";

function an()
{
    // using echo $x inside this function will generate an error and not display value
    // first you need to define $x as global $x inside function then you can print value by echo function.

    global $x;
    echo "<br>".$x;
    
}
an();

?>
