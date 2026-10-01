<?php
function calculateAverage($marks)
{
$total = 0;
foreach ($marks as $mark)
{
$total += $mark;
}
return $total / count($marks);
}
function findGrade($average)
{
if ($average >= 80)
{
return "A+";
}
elseif ($average >= 70)
{
return "A";
}
elseif ($average >= 60)
{
return "A-";
}
elseif ($average >= 50)
{
return "B";
}
else
{
return "F";
}
}

$studentName = $_POST["student_name"];
$programming = (float)$_POST["programming"];
$database = (float)$_POST["database"];
$web = (float)$_POST["web"];
$fav_sub = $_POST["favorite"];
$marks = [
"Programming" => $programming,
"Database" => $database,
"Web Development" => $web
];
$average = calculateAverage($marks);
$grade = findGrade($average);
?>
<!DOCTYPE html>
<html>
<head>
<title>Result</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h2>Result</h2>
<p>
<strong>Student:</strong>
<?php echo htmlspecialchars($studentName); ?>
</p>
<p>

<strong>Favorite Course:</strong>
<?php echo htmlspecialchars($fav_sub); ?>
</p>
<h3>Course Marks</h3>
<?php
foreach($marks as $course => $mark)
{
echo $course . ": " . $mark . "<br>";
}
?>
<h3>
Average:
<?php echo round($average,2); ?>
</h3>
<h3>
Grade:
<?php echo $grade; ?>
</h3>
<br>
<a href="submitted.html">
Continue
</a>
</div>
</body>
</html>