<?php
$total=448;
$per=$total/900*100;
echo "Your Percentage is : ". $per;
echo "<br>";
if($per>=90){
    echo "Congratulation, You've got A Grade.";
}
elseif($per>=70){
    echo "Congratulation, You've got B Grade.";
}
elseif($per>=60)
{
    echo "Congratulation, You've got C Grade.";
}
elseif($per>=35){
    echo "Congratulation, You've got D Grade.";
}
else{
        echo "You failed in this Exam.";
}

?>