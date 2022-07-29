<?php
$id = $_POST['idmap'];
$idpl = $_POST['idpl'];
include_once "../connect.php";
$query1 = "DELETE FROM `main2` WHERE `IDp` = '{$idpl}' ";

$sql = mysqli_query($conn, $query1);

mysqli_close($conn);