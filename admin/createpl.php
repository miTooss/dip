<!DOCTYPE html>
<html lang="en">

<head>

    <style>
        #map {
            width: 50vw;
            height: 50vh;
            padding: 0;
            margin: 0;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/form.css">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Document</title>



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
                zoom: 13
            });
            myMap.events.add('click', function(e) {

                if (!myMap.balloon.isOpen()) {
                    var coords = e.get('coords');
                    myMap.balloon.open(coords, {
                        contentHeader: 'Событие!',
                        contentBody: '<p>Кто-то щелкнул по карте.</p>' +
                            '<p>Координаты щелчка: ' + [
                                coords[0].toPrecision(6),
                                coords[1].toPrecision(6)
                            ].join(', ') + '</p>',
                        contentFooter: ' ',
                    })
                    $.ajax({
                        url: '../ajax/createpl.php',
                        method: 'post',
                        dataType: 'html',
                        data: {
                            coords1: coords[0],
                            coords2: coords[1]
                        },

                        success: function(data) {
                            $('#message').val(data);
                        }
                    });
                } else {
                    myMap.balloon.close();
                }
            });




            // Обработка события, возникающего при щелчке
            // правой кнопки мыши в любой точке карты.
            // При возникновении такого события покажем всплывающую подсказку
            // Скрываем хинт при открытии балуна.
            myMap.events.add('balloonopen', function(e) {
                myMap.hint.close();
            });


        }
    </script>
</head>

<body>
    <?php
    $idmap = $_GET['id'];
    ?>

    <div>
        <form id="form" action="createpl_script.php" method="post" enctype="multipart/form-data">
            <legend>Создание точки на карте</legend>
            <input required type="text" name="name" placeholder="Название точки">
            <input type="text" name="info" id="message" placeholder="Координаты точки(нажмите по карте)" readonly>
            <div id="map"></div>
            <input type="text" name="link" placeholder="Ссылка на статью">
            <input type="text" name="description" placeholder="Описание">
            <input type="file" name="myimage" id="myimage">
            <input style="display: none;" type="text" name="map" value="<? echo $idmap ?> " readonly>
            <input type="submit" value="Отправить" id="submit">
        </form>

    </div>

    <div id="list">

    </div>
</body>

</html>