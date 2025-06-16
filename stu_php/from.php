<!DOCTYPE html>
<html lang="en">
<head>
    <title>from_cookie</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="user" placeholder="Enter your name">
        <br>
        <br>
        <button name="button" value="set">Set cookie</button>
        <br>
        <br>
        <button name="button" value="display">Display cookie</button>
        <br>
        <br>
        <button name="button" value="delete">delete</button>
</form>       
</body>
</html>


<?php
if(isset($_POST['button'])){
    if($_POST['button'] == "set"){
        $val = $_POST['user'];
        setcookie("user", $val, time() + (86400 * 30), "/");
        echo "cookie set";

    }

if($_POST['button'] == 'display'){
    if(isset($_COOKIE['user'])){
        echo $_COOKIE['user'];
    }
}

if($_POST['button'] == 'delete'){
    if(isset($_COOKIE['user'])){
        setcookie("user", "", time() - 3600, "/");
        echo "cookie deleted";
    }
}

}



?>