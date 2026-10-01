<?php
$studentName = "Ali";
$marks = [100,90,50];
$total = 0;
foreach($marks as $mark){
    $total = $total + $mark;
}
$average = $total /count($marks);
echo "Student Name: " .$studentName;
echo "<ber>";
echo "Average Marks: ".$average;
echo "<br>";
if($average  >= 80){
    echo "Grade: A+";
}elseif($average >= 70){
    echo "Grade: A";
}elseif($average >= 60){
    echo "Grade: A-";
}else{
    echo "Grade: F";
}
?>