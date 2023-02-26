<?php
// what is session variable?

// a session variable is a special type of variable that is used to store data across multiple pages of a website. 

// Session variables are used to store information that needs to be accessible across multiple pages or requests, such as user authentication status, shopping cart contents, and user preferences.

// They are stored on the server, rather than on the user's computer, so they can be accessed and modified from any page in the website.

// Syntax :

// Start a new session
session_start();

// Set a session variable
$_SESSION['username'] = 'johndoe';

// Retrieve the session variable
$username = $_SESSION['username'];

// Display the username
echo "Welcome, $username!";


// PHP $_SESSION is an associative array that contains all session variables. It is used to set and get session variable values.



?>