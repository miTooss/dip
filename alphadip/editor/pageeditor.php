<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/editor.css">
    <title>Document</title>
</head>

<body>
    <a href="../index.php">
        ← Вернуться на главную
    </a>
    <div id="main">
        <div id="head">
            Список моих карт:
        </div>
        <div class="listmap">
            <?php
            include_once "listmap.php";
            ?>
        </div>
        <div id="edit">
            <a href="createmap.php">
                Создать карту
            </a>
        </div>

    </div>

</body>

</html>