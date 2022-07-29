<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>Document</title>
</head>

<body>
    <?php
    include_once "connect.php";
    ?>
    <div id = "profile">
        <?php
        if ($_SESSION['role'] == 2) {
            echo " <a href = '/admin/pageadmin.php'> Настройки </a>";
        }
        if ($_SESSION['role'] == 1) {
            echo " <a href = '/editor/pageeditor.php'> Мои карты </a>";
        }
        if ($_SESSION == NULL) {
            echo '
        <a href="/user/login.php">
        <img src="./svg/profile.svg" alt="">
    </a>';
        }
        if ($_SESSION['role'] <> NULL) {
            echo '
        <a href="/user/logout.php">
        Выход
    </a>';
        }
        ?>


    </div>
    <div>
        <div style="width:max-content;margin-left: auto; margin-right:auto; margin-top:3vh;margin-bottom:3vh;">
            Список доступных карт:
        </div>

        <div class = "listmap">

            <?php
            include_once "show/listmap.php";
            ?>
        </div>

    </div>


</body>

</html>