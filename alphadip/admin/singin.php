<?php
include_once "../connect.php";
$password = $_POST['password'];
$passwordchek = $_POST['passwordchek'];
$role = $_POST['role'];
$hash = password_hash($password, PASSWORD_DEFAULT);

if ($password == $passwordchek) {

    $login = $_POST['login'];
    $query = "SELECT `name` FROM `users` WHERE `name` = '{$login}'";
    $sql = mysqli_query($conn, $query);
    $result = mysqli_fetch_row($sql);
    if ($result == NULL) {

        $query1 = "INSERT INTO `users` (`name`,`password`,`role`) VALUES ('{$login}','{$hash}','{$role}')";
        $sql1 = mysqli_query($conn, $query1);
        echo '<meta http-equiv="Refresh" content= "0 ; URL = ./pageadmin.php">';
    } else {
        echo "Такой пользователь уже зарегистрирован";
    }
} else {
    echo "Пароли не совпадают";
}
mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/form.css">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <legend>Зарегистрировать пользователя</legend>
        <input type="text" name="name" placeholder="Имя пользователя">
        <input type="text" name="login" placeholder="Логин">
        <label for="role">Выберите роль пользователя: </label>
            <select name="role" id="role">
                <option value="">Роль</option>
                <option value="1">editor</option>
                <option value="2">admin</option>
            </select>
       

        <input type="password" name="password" placeholder="Введите пароль">
        <input type="password" name="passwordchek" placeholder="Повторите пароль">
        <input type="submit">


    </form>
</body>

</html>