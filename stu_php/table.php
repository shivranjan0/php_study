<?php
$usernames = [
[1,"shivranjan","shivranjankumar917@gmail.com"],
[2,"anil","kumarsharma33@gmail.com"],
[3,"raj","rajshambani99@gmail.com"],
[4,"kumar","kumarkishot@gmail.com"],
];

echo "<table border = 1>";
for($i=0; $i<count($usernames); $i++){
    echo "<tr>";
    for($j=0; $j<count($usernames[$i]); $j++){
        echo "<td>";
        echo $usernames[$i][$j];
        echo  "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>  