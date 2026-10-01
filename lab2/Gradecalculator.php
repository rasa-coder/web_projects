<!DOCTYPE html>
<html>
<head>
<title>Grade Calculator</title>
<style>
body {
font-family: Arial;
background-color: #f5f5f5;
}
.container {
width: 500px;
margin: 40px auto;
background: white;
padding: 30px;
}
input {
width: 95%;
padding: 8px;
margin-bottom: 10px;
}
button {
padding: 10px 20px;
}
</style>
</head>
<body>
<div class="container">
<h2>Student Grade Calculator</h2>

<form method="POST">
<label>Student Name:</label>
<input
type="text"
name="student_name"

required
>

<label>Programming Marks:</label>
<input
type="number"
name="programming"
required
>

<label>Database Marks:</label>
<input
type="number"
name="database"
required
>

<label>Web Development Marks:</label>
<input
type="number"
name="web"
required
>

<button type="submit">
Calculate Result
</button>
</form>

<?php

// Function for calculating average
function calculateAverage($marks) {
$total = 0;

foreach ($marks as $mark) {
$total = $total + $mark;
}
return $total / count($marks);
}

// Function for finding grade
function findGrade($average) {
if ($average >= 80) {
return "A+";
} elseif ($average >= 70) {
return "A";
} elseif ($average >= 60) {
return "A-";
} elseif ($average >= 50) {
return "B";
} else {
return "F";
}
}

// Check whether the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

// Receive student name

$studentName = $_POST["student_name"];

// Type casting form values
$programming = (float)$_POST["programming"];
$database = (float)$_POST["database"];
$web = (float)$_POST["web"];

// Store marks inside an array
$marks = [
"Programming" => $programming,
"Database" => $database,
"Web Development" => $web
];

// Calculate average
$average = calculateAverage($marks);

// Find grade
$grade = findGrade($average);

echo "<hr>";
echo "<h2>Result</h2>";

echo "<p>Student: "
. htmlspecialchars($studentName)
. "</p>";

echo "<h3>Course Marks</h3>";

foreach ($marks as $course => $mark) {
echo $course . ": " . $mark;
echo "<br>";
}

echo "<h3>Average: "
. round($average, 2)
. "</h3>";

echo "<h3>Grade: "
. $grade
. "</h3>";
}
?>
</div>
</body>
</html>