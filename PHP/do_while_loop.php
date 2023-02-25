<?php

/* The do-while loop in PHP is similar to the while loop, but with one key difference: 
 the code inside the loop is executed at least once, even if the condition is false from the start. */
// Syntax

 // do {
//    code to be executed
//   } while (condition);

 $i = 1;
 do {
   echo "i = "." ".$i;
   echo "<br>";
   $i++;
 } while ($i <= 5);


// here only value of a print one time because condition is false.
  
 $a = 11;
 do {
   echo "a = "." ".$a;
   echo "<br>";
   $a++;
 } while ($a <= 5);

?>