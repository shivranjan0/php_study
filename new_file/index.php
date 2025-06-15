<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>button</title>
</head>
<body>
    <form action="" method="post">
        <button name="button" value="btn1">Call_Button</button>

    </form>
    
</body>
</html>

<?php
if(isset($_REQUEST['button'])){
    btn_clicked();
}

function btn_clicked(){
    echo "Button clicked!";
}
?>