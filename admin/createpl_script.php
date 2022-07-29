<?php


include_once "../connect.php";
$id  = $_POST['map'];
$path = '../uploads/';
$ext = array_pop(explode('.',$_FILES['myimage']['name'])); 
$new_name = time().'.'.$ext;
$full_path = $path.$new_name;
move_uploaded_file($_FILES['myimage']['tmp_name'], $full_path ); 
$conn = mysqli_connect($servername, $username, $password, $database);
$query = "INSERT INTO `placemarks` (`name` , `info` , `link` , `img`, `description`) VALUES ('{$_POST['name']}','{$_POST['info']}','{$_POST['link']}','{$full_path}','{$_POST['description']}')";
$sql1 = mysqli_query($conn, $query);
$query1 = "SELECT `IDp` FROM `placemarks` WHERE  `info`  =  '{$_POST['info']}' AND `name` = '{$_POST['name']}' ";
$sql2 = mysqli_query($conn, $query1);
while ($result = mysqli_fetch_row($sql2)) {
    $a = $result[0];
}
$query2 = "INSERT INTO `main2` (`IDm` , `IDp`) VALUES ('{$_POST['map']}','{$a}')";
$sql3 = mysqli_query($conn, $query2);

mysqli_close($conn);
echo '<meta http-equiv="Refresh" content= "0 ; URL = setmap.php?id= '.$id.'">';

exit();
