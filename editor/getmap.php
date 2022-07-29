<?php


$query1 = "SELECT `verify` FROM `maps` WHERE `IDm` = '{$id}'";
$sql1 = mysqli_query($conn, $query1);
while ($result1 = mysqli_fetch_assoc($sql1)) {
    $ver = $result1['verify'];
}
    if ($ver == 1){
        echo "
        <a href = 'verifymap.php?ver={$ver}&id={$id}' style = 'text-decoration:none; color: black;'>
            Убрать карту с проверки 
        </a>";
        
    }elseif($ver == 0){
        echo "
        <a href = 'verifymap.php?ver={$ver}&id={$id}' style ='text-decoration:none; color: black;'>
            Отослать карту на проверку
        </a>";

    }elseif($ver == 2){
        echo "
        <div>
            Карта опубликована
        </div>";

    }


