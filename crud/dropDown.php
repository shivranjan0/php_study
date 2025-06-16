<?php
include './config.php';
$getStudents = $conn->prepare("SELECT * FROM student");
$getStudents->execute();
// Check if any students were found

$student=$getStudents->fetchAll();

echo "<select name='students' id='students'>";
foreach($student as $students) {
    echo "<option value='" . htmlspecialchars($students['id']) . "'>" . htmlspecialchars($students['name']) . "</option>";
}


?>