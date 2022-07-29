<?php
session_start();
include_once "../connect.php";
$ver = $_GET['ver'];

if ($ver == 0) {
    $query = "UPDATE `maps` SET `verify` = 1 WHERE `IDm` = '{$_GET['id']}'";
    $sql = mysqli_query($conn, $query);
} elseif ($ver == 1) {
    $query = "UPDATE `maps` SET `verify` = 0 WHERE `IDm` = '{$_GET['id']}'";
    $sql = mysqli_query($conn, $query);
}
$id = $_GET['id'];


exit('<meta http-equiv="refresh" content="0; url=./setmap.php?id='.$id.'" />');
mysqli_close($conn);
