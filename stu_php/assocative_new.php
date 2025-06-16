<?php
$user_id = [["name" => "shivranjan", "email" => "shivranjankumar917@gmail.com"],
            ["name" => "anil", "email" => "ragkumar917@gmail.com" ],
            ["name" => "raj", "email" => "vipulkuar917@gmail.com"],
            ["name" => "kumar", "email" => "paplukumar95@yahoo.com"],
        ];

echo "<table border = 1>";
foreach($user_id as $user){
    echo "<tr>";
    foreach($user as $key=> $item){
        echo "<td>";
        echo $key . " is " .$item;
    }

    echo "</tr>";


}
echo "</table>";

?>