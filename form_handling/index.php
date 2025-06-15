<?php
echo "<br>";
if (isset($_POST['name'])) {
    echo "user name" . " is " . $_POST['name'];
    echo "<br>";
    echo "user password" . " is " . $_POST['password'];
    echo "<br>";
    echo "user email" . " is " . $_POST['email'];
    echo "<br>";
    echo "user number" . " is " . $_POST['number'];
    echo "<br>";
    echo "user search" . " is " . $_POST['search'];
    echo "<br>";
    echo "user tel" . " is " . $_POST['tel'];
    echo "<br>";
    echo "user url" . " is " . $_POST['url'];
    echo "<br>";
    echo "user color" . " is " . $_POST['color'];
    echo "<br>";
    echo "user date" . " is " . $_POST['date'];
    echo "<br>";
    echo "user time" . " is " . $_POST['time'];
    echo "<br>";
    echo "user week" . " is " . $_POST['week'];
    echo "<br>";
    echo "user month" . " is " . $_POST['month'];
    echo "<br>";
    echo "user datetime" . " is " . $_POST['datetime'];
    echo "<br>";
    echo "user gender" . " is " . $_POST['gender'];
    echo "<br>";
    echo "user hobby" . " is " . implode($_POST['hobby']);
    echo "<br>";
    echo "user country" . " is " . $_POST['country'];
    echo "<br>";
    echo "user file" . " is " . $_POST['file'];
    echo "<br>";
    echo "user experience" . " is " . $_POST['experience'];
    echo "<br>";
    echo "user user_id" . " is " . $_POST['user_id'];
    echo "<br>";
    echo "user comments" . " is " . $_POST['comments'];
    echo "<br>";
}
?>