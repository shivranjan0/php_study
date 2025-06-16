<?php
$user = ["anil", "kumar", "sharma","raj", "kumar","sharma", "raj", "kumar", "sharma", "raj", "kumar", "sharma", "raj", "kumar", "sharma", "raj", "kumar", "sharma", "raj"];

// for($i=0;$i<count($user); $i++){
//     echo $user[$i];
//     echo "<br>";
// }


foreach($user as $i){
    echo "<h1>".$i."</h1>";
    if($i=="raj"){
        break;
    }
}
?>