<?php

//? What is PHP Scope?

// A variable's scope determines where in your code you can access that variable. variables can be declared anywhere in the script.
// The scope of a variable is the part of the script where the variable can be referenced/used.


//* There are three main variable scopes in PHP:

//? 1. Local

// A variable declared inside function and have a local scope. only accessed within that function
// you can have a local variables with the same name in different functions


//? 2. Global

//A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function
// To access the Global Variable within a function, use the GLOBAL keyword before variable
// PHP also stores all global variables in an array called $GLOBALS[index].

//? 3. Static

// when a function is completed/executed, all of its variables are deleted. 
// However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
// variable declared with the static keyword inside a function have a static scope and retain their value betweem function calls



?>