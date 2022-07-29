<?php

include_once "../connect.php";
$query = "DELETE FROM `maps` WHERE `IDm` = '{$_GET['id']}'";
$sql = mysqli_query($conn, $query);
mysqli_close($conn);

echo '<meta http-equiv="Refresh" content= "0 ; URL =pageeditor.php">';