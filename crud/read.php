<?php
include 'config.php';
$getstudents = $conn->prepare("SELECT * FROM student");
$getstudents->execute();
$student=$getstudents->fetchAll();
if (!$student) {
    echo "No students found.";
    exit;
}
echo "<table border='1'>";
foreach($student as $students) {
    echo "<p>";
    echo "ID: " . htmlspecialchars($students['id']) . "<br>";
    echo "Name: " . htmlspecialchars($students['name']) . "<br>";
    echo "Email: " . htmlspecialchars($students['email']) . "<br>";
    echo "Phone: " . htmlspecialchars($students['phone']) . "<br>";
    echo "</p>";
}

echo "</table>";

?>