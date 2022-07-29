<?php
session_start();
include_once "../connect.php";


$query = "SELECT `password` FROM `users` WHERE `name` = '{$_POST['login']}'";
$sql = mysqli_query($conn, $query);
$result = [];
while ($result = mysqli_fetch_array($sql)) {
    $pass = $result[0];
}



if (password_verify($_POST['password'], $pass)) {
    $_SESSION['login'] = $_POST['login'];
    $query1 = "SELECT `role`,`IDu` FROM `users` WHERE `name` = '{$_POST['login']}'";
    $sql1 = mysqli_query($conn, $query1);
    $result = [];
    while ($result = mysqli_fetch_array($sql1)) {
        $role = $result[0];
        $idu = $result[1];
        $_SESSION['role'] = $role;
        $_SESSION['idu'] = $idu;

    }

    exit('<meta http-equiv="refresh" content="0; url=../index.php" />');
} else {
    exit('<meta http-equiv="refresh" content="0; url=login.php" />');
}
mysqli_close($conn);
