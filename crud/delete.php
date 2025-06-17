<?php
include './config.php';
$getstudents = $conn->prepare("SELECT * FROM student");
$getstudents->execute();
$result = $getstudents->fetchAll();
echo "<table border='1'>";
foreach ($result as $row) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['id']) . "</td>";
    echo "<td>" . htmlspecialchars($row['name']) . "</td>";
    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
    echo "<td>" . htmlspecialchars($row['phone']) . "</td>";
    echo "<td><form method='post'><button type='submit' name='delete' value='" . htmlspecialchars($row['id']) . "'>Delete</button></form></td>";
    if (isset($_POST['delete']) && $_POST['delete'] == $row['id']) {
        $id = $row['id'];
        $deletestudent = $conn->prepare("DELETE FROM STUDENT WHERE ID = :ID");
        $deletestudent->execute([':ID' => $id]);
        if ($deletestudent) {
            echo "✅ Data deleted successfully.";
        } else {
            echo "❌ Data not deleted.";
        }
    }

    echo "</tr>";
}
?>