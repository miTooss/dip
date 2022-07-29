<?php
session_start();
$idmap = $_POST['idmap'];
include_once "../connect.php";
$path = '../uploads/';
$ext = array_pop(explode('.', $_FILES['myimage']['name']));
$new_name = time() . '.' . $ext;
$full_path = $path . $new_name;
move_uploaded_file($_FILES['myimage']['tmp_name'], $full_path);
if ($ext == NULL) {
    $query = "UPDATE `placemarks` SET `name` = '{$_POST['name']}',`info`= '{$_POST['info']}',`link`= '{$_POST['link']}',`description`= '{$_POST['description']}' WHERE `IDp` = '{$_POST['idpl']}' ";
    $sql = mysqli_query($conn, $query);
} else {
    $path = '../uploads/';
    $ext = array_pop(explode('.', $_FILES['myimage']['name']));
    $new_name = time() . '.' . $ext;
    $full_path = $path . $new_name;
    $query = "UPDATE `placemarks` SET `name` = '{$_POST['name']}',`info`= '{$_POST['info']}',`link`= '{$_POST['link']}',`description`= '{$_POST['description']}',`img`= '{$full_path}' WHERE `IDp` = '{$_POST['idpl']}' ";
    $sql = mysqli_query($conn, $query);
}


mysqli_close($conn);
echo '<meta http-equiv="Refresh" content= "0 ; URL = setmap.php?id='.$idmap.'">';