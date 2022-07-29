<?php

include_once "../connect.php";


$query1 = "SELECT `name`, `IDm`,`verify` FROM `maps` WHERE `verify`=  1 OR 2";
$sql1 = mysqli_query($conn, $query1);
if ($_SESSION['role'] == 2) {
    while ($result = mysqli_fetch_assoc($sql1)) {
        if ($result['verify'] == 1) {
            echo "<a href='setmap.php?id={$result['IDm']}' class= 'map'>Редактировать карту  {$result['name']} (Проверяется)</a>";
        }elseif ($result['verify'] == 2) {
            echo "<a a href='setmap.php?id={$result['IDm']}' class= 'map'>Редактировать карту{$result['name']}  (Опубликована)</a>";
        }
        $i = $i + 1;
    }
}

