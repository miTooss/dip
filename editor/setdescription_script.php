<?php
$idmap = $_POST['map'];
include_once "../connect.php";
$query = "UPDATE `maps` SET `description` = '{$_POST['des']}',`name` = '{$_POST['name']}' WHERE `IDm` = '{$_POST['map']}' ";
$sql = mysqli_query($conn, $query);
mysqli_close($conn);
echo '<meta http-equiv="Refresh" content= "0 ; URL = setmap.php?id=' . $idmap . '">';
