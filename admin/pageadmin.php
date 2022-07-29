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
    <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript">

    </script>
    <script type="text/javascript">
        // Функция ymaps.ready() будет вызвана, когда
        // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
        ymaps.ready(init);

        function init() {


            // Создание карты.
            myMap = new ymaps.Map("map", {
                // Координаты центра карты.
                // Порядок по умолчанию: «широта, долгота».
                // Чтобы не определять координаты центра карты вручную,
                // воспользуйтесь инструментом Определение координат.
                center: [55.752004, 37.617734],
                // Уровень масштабирования. Допустимые значения:
                // от 0 (весь мир) до 19.
                zoom: 13,
            });
        }
    </script>
    <script src="/jquery-3.6.0.min.js">
    </script>
    <title>Document</title>
</head>

<body>
    <?php
    include_once "../connect.php";
    ?>
    <div id="main">
        <div id="map">
        </div>

        <div id="menu">
            <img src="../svg/arrow.svg" alt="">
        </div>
        <script>
            var pr = 0;
            $('#menu').on('click', function() {
                console.log(pr)
                if (pr == 0) {
                    $("#main").css({
                        gridTemplateColumns: "1fr 1fr"
                    });
                    $("#mainmenu").css({
                        display: "grid",
                        gridTemplateRows: "max-content 1fr 1fr"
                    });
                    $("#mainmenu").animate({
                        width: "20vw",

                    }), 1000, "linear";

                    $("#menu").animate({
                        "right": "16vw",

                    });
                    $("#menu").css({
                        "transform": "rotate(90deg)"
                    })
                    pr = 1;
                } else {
                    $("#main").css({
                        gridTemplateColumns: "1fr 0fr"
                    });
                    $("#mainmenu").css({
                        display: "none"
                    });
                    $("#mainmenu").animate({
                        width: "0",

                    }), 1000, "linear";

                    $("#menu").animate({
                        "right": "-1vw",

                    });
                    $("#menu").css({
                        "transform": "rotate(-90deg)"
                    })
                    pr = 0;
                }



            });
        </script>
        <div id="mainmenu">
            <a href="../index.php">
                <img src="../svg/arrow.svg" alt="" style="transform: rotate( 270deg);">
            </a>

            <div class="listmap">

                <?php
                include_once "./listmap.php";
                ?>
            </div>
            <div class="logout">
                <a href="../user/logout.php">
                    Выйти из аккаунта
                </a>
            </div>

            <div id="edit">
                <a href="./singin.php">
                    Зарегистрировать пользователя
                </a>
            </div>

        </div>



    </div>


    </div>
    <!-- <div class="listmap">
        <?php
        include_once "listmap.php";
        ?>
    </div>
    <div id="edit">
        <a href="createmap.php">
            Создать карту
        </a>
    </div>

    </div> -->

</body>

</html>