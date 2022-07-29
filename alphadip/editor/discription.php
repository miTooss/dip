<?php

include_once "../connect.php";
$query = "SELECT `description`, `name` FROM `maps` WHERE `IDm` = '{$id}'";

$sql = mysqli_query($conn, $query);

while ($result = mysqli_fetch_assoc($sql)) {
    $dis = $result['description'];
    $name = $result['name'];
}
echo "<div class = 'namemap'>$name</div>";
echo "<div class = 'dis'>$dis</div>";
