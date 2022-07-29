<?

$hash = password_hash($password, PASSWORD_DEFAULT);
echo ($hash);
include_once "connect.php";

$query = "INSERT INTO `users`  (`name`, `password`) VALUES ('{$_POST['login']}', '{$hash}') ";

$sql = mysqli_query($conn, $query);

mysqli_close($conn);
