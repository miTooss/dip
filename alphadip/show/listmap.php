<?php
include_once "./connect.php";

$query = "SELECT `name`, `idm`  FROM `maps` WHERE `verify` = 2";

$sql = mysqli_query($conn, $query);


while ($result = mysqli_fetch_assoc($sql)) {
    echo "<a href='show/showmap.php?id={$result['idm']}' class = 'map'>Посмотреть карту {$result['name']} </a>";
}
$sql = mysqli_query($conn, $query);
$result =  0;



