<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <form action=""  method="post"> 
        <input type="text" name="username" placeholder="Enter your name">
        <br>
        <br>
        <button name="button" value="set">Set Session</button>
        <br>
        <br>
        <button name="button" value="get">Display Session</button>
        <br>
        <br>
        <button name="button" value="delete">Delete Session</button>
    </form>
    
</body>
</html>

<?php
session_start();
if (isset($_POST['button'])) {
    if($_POST['button'] == 'set') {
        $val = $_POST['username'];
        $_SESSION['username'] = $val;
        echo "Session set for username: " . htmlspecialchars($val);
    } elseif($_POST['button'] == 'get') {
        if (isset($_SESSION['username'])) {
            echo "Stored session username: " . htmlspecialchars($_SESSION['username']);
        } else {
            echo "No session found!";
        }
    } elseif($_POST['button'] == 'delete') {
        session_unset();
        session_destroy();
        echo "Session deleted!";
    }
}
?>