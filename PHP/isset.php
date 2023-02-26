<?php

// what is isset function?

// isset — Determine if a variable is declared and is different than null

// This function accepts one or more parameters, but it must contain atleast one parameter.

// When you're working with form data submitted by users in PHP, it's important to validate and sanitize the input to ensure that it meets the expected format and doesn't contain any malicious code or unintended data.

// One of the most basic forms of validation is to check whether the required input fields have been filled out by the user. This is where the isset() function comes in handy.

// When you receive data from a form in PHP, it's typically stored in the $_POST or $_GET superglobal variables, depending on the form's method attribute (i.e., POST or GET). You can use isset() to check whether the input fields you expect to be present in the superglobal variables actually are.

// Ex.1

$var1 = 'test';
if (isset($var1)) {
    echo "The variable $var1 is set, so it will print. </br>";
    var_dump(isset($var1));
}


// Ex.2 use the unset() function to unset the variable. Look at the below example:

$var1 = 'test';
$var2 = 'another test';
unset($var1);
unset($var2);
echo "</br></br>Variables after unset: </br>";
var_dump(isset($var1));
var_dump(isset($var2));


?>