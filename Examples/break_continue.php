<?php


// the break statement is used to terminate the execution of a loop prematurely.

/* It can be used with any of the loop constructs (for, foreach, while, and do-while) to 
stop the loop from iterating any further.*/

// in this example break terminate execution when i = 5

$i = 0;

while ($i < 10) {
  echo $i . " ". "<br>";
  $i++;
  if ($i == 5) {
    break;
  }
}


/* the continue statement is used to skip the current iteration of a loop and move on to the next iteration. 
It can be used with any of the loop constructs (for, foreach, while, and do-while) 
to skip the execution of the loop's remaining code for the current iteration and move on to the next iteration. 
*/

// in this example one iteration skipped when x = 4
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}

?>