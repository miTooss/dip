<?php
session_start();
include_once "../connect.php";
$name = $_POST['name'];
$description = $_POST['description'];

$query = "INSERT INTO `maps` (`name`,`description`) VALUES ('{$name}','{$description}')";

$sql = mysqli_query($conn, $query);
$query1 = "SELECT `IDm` FROM `maps` WHERE `name`  =  '{$name}'";
$sql1 = mysqli_query($conn, $query1);
$result  = mysqli_fetch_assoc($sql1);

$query2 = "INSERT INTO `usermap` (`IDu`,`IDm`) VALUES ('{$_SESSION['idu']}','{$result['IDm']}')";
$sql2 = mysqli_query($conn, $query2);



mysqli_close($conn);
echo '<meta http-equiv="Refresh" content= "0 ; URL = pageeditor.php">';
