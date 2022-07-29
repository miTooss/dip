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
                            $('#coords').val(data);
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
    <script>
        <?php
        $idmap = $_GET['idmap'];
        $idpl = str_replace('set', '', $_GET['idpl']);

        ?>
        var idpl = <?php echo ($idpl) ?>;
        var inf = {};
        $.ajax({
            url: '../ajax/setpl.php',
            method: 'post',
            dataType: 'json',
            data: {
                idpl: idpl
            },

            success: function(data) {
                
                inf = data;
                console.log(data);
                $('#name').val(data[5]);
                $('#coords').val(data[3]);
                $('#link').val(data[4]);
                $('#description').val(data[1]);
                $('#image').attr('src',data[2]);
            }
        });
    </script>
</head>

<body>

    
    <div>

        <form id="form" action="setpl_script.php" method="post" enctype="multipart/form-data">
            <input required type="text" id = "name" name="name" placeholder="Название точки">
            <input required type="text" id = "coords" name="info" id="message" placeholder="Координаты точки(нажмите по карте)" readonly>
            <div id="map"></div>
            <input required type="text" id = "link" name="link" placeholder="Ссылка на статью">
            <input required  type="text" id = "description" name="description" placeholder="Описание">
            <img style = "width:16vw; height:19vh" id = "image" src="" alt="">
            <input type="file"  name="myimage">
            <input style="display: none;" type="text" name="idpl" value="<? echo $idpl?> " readonly>
            <input style="display: none;" type="text" name="idmap" value="<?  echo $idmap?> " readonly>
            <input type="submit" value="Отправить">
        </form>

    </div>

    <div id="list">

    </div>
    <div id = "inf">

    </div>
</body>

</html>