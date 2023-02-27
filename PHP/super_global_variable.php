<?php

// website for reference
//  https://www.php.net/manual/en/reserved.variables.server.php


//* a superglobal variable is a special type of variable that is available in all scopes throughout your script.

//* These variables are automatically created by PHP and contain useful information about the server, 
//* the request, and other aspects of the current runtime environment.


//? 1.   $GLOBALS : is a PHP super global variable which is used to access global variables from anywhere in the PHP script.

$x = 75;
$y = 25;
 
function addition() 
{
    global $x, $y, $z;    // define global funtion inside any function to use outside function inside.
    $z = $x + $y;      
}

addition();
echo "Addition of x and y is :".$z;


//? 2. $_SERVER : provides access to various server-related information, including 

// request headers, environment variables, and server configuration settings.

echo "<br>";
echo $_SERVER['PHP_SELF'];  //file path 
echo "<br>";

echo $_SERVER['REQUEST_METHOD'];  // The HTTP request method used to access the page (e.g., "GET", "POST").
echo "<br>";

echo $_SERVER['HTTP_REFERER'];  // contains the URL of the page that referred the current page
echo "<br>";

echo $_SERVER['HTTP_USER_AGENT']; // The user agent string of the client's web browser.
echo "<br>";

echo $_SERVER['REMOTE_ADDR'];  // IP address of the client making the request.
echo "<br>";

echo $_SERVER['SERVER_NAME']; //The server's hostname or IP address.
echo "<br>";

//? 3. $_REQUEST : PHP super global variable which is used to collect data after submitting an HTML form.

// contains the contents of both the $_GET, $_POST, and $_COOKIE superglobal variables.


if (isset($_REQUEST['username']) && isset($_REQUEST['password'])) {
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    
    // Do something with the username and password
  }
  

//? 4. $_POST



//? 5. $_GET
//? 6. $_FILES
//? 7. $_ENV
//? 8. $_COOKIE
//? 9. $_SESSION

?>