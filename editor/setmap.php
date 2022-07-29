<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/setmap.css">

    <title>Document</title>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript">

    </script>
    <script src="/jquery-3.6.0.min.js">
    </script>
    <script>
        var idmap = <?php echo ($_GET['id']) ?>;

        var coords = {}
        $.ajax({
            url: '../ajax/plcoords.php',
            method: 'post',
            dataType: "json",
            data: {
                idmap: idmap

            },
            success: function(data) {
                coords = data
                console.log(data)

            }
        });
        var info = {}
        $.ajax({
            url: '../ajax/pllink.php',
            method: 'post',
            dataType: "json",
            data: {
                idmap: idmap

            },
            success: function(data) {
                link = data
                console.log(data)
            }
        });
        var link = {}
        $.ajax({
            url: '../ajax/plname.php',
            method: 'post',
            dataType: "json",
            data: {
                idmap: idmap

            },
            success: function(data) {
                info = data
                console.log(data)


            }
        });
        $.ajax({
            url: '../ajax/plid.php',
            method: 'post',
            dataType: "json",
            data: {
                idmap: idmap

            },
            success: function(data) {
                idps = data
                console.log(data)


            }
        });
        $.ajax({
            url: '../ajax/img.php',
            method: 'post',
            dataType: "json",
            data: {
                idmap: idmap

            },
            success: function(data) {
                img = data
                console.log(data)


            }
        });
        $.ajax({
            url: '../ajax/description.php',
            method: 'post',
            dataType: "json",
            data: {
                idmap: idmap

            },
            success: function(data) {
                description = data
                console.log(data)


            }
        });
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
                zoom: 13
            });




            var i = 0
            var a = new Array();
            while (i < Object.keys(coords).length) {

                var result = coords[i].toString().split(',');
                var result1 = info[i].toString().split(',');
                var result1 = link[i].toString().split(',');
                var result1 = idps[i].toString().split(',');
                var myPlacemark = new ymaps.Placemark([result[0], result[1]], {
                    balloonContentHeader: info[i],
                    balloonContentBody: '<div style = "display: flex;"><img src = "' + img[i] + '"style = "width : 15vw; height:15vh; border:1px solid black;"> <div style = "word-break:break-word; margin-left:2%;">' + description[i] + ' </div></div>',
                    balloonContentFooter: ('<a href="' + link[i] + '">Читать дальше...</a>'),
                    iconContent: i + 1,
                }, {
                    preset: 'islands#redIcon',
                })

                myMap.geoObjects
                    .add(myPlacemark)


                var b = a.push(myPlacemark);
                var div = document.createElement('div');
                div.id = i;
                div.className = "listof";
                div.innerHTML = info[i];
                div.onclick = function() {
                    var id = event.target.id;
                    var result = coords[id].toString().split(',');
                    myMap.setCenter([result[0], result[1]], 15, {
                        delay: 1000
                    });
                    a[id].balloon.open()
                }
                document.getElementById("place").appendChild(div);


                var svg = document.createElement('div');
                svg.id = i + 'svg';
                svg.className = 'set';
                document.getElementById(i).appendChild(svg);
                var dell = document.createElement('img');
                dell.id = idps[i];
                dell.src = '../svg/del.svg';
                dell.className = 'image';
                dell.onclick = function() {
                    var answ = confirm("Вы действительно хотите удалить точку?");
                    if (answ == true) {
                        var idpl = this.id;
                        $.ajax({
                            url: '../ajax/delpl.php',
                            method: 'post',
                            dataType: "json",
                            data: {
                                idmap: idmap,
                                idpl: idpl

                            },
                            success: function(data) {

                            }

                        });
                        window.location.reload();
                    } else {

                    }
                }


                document.getElementById(i + 'svg').appendChild(dell);
                var set = document.createElement('a');

                set.id = idps[i] + "set";
                set.href = './setpl.php?idpl=' + idps[i] + 'set' + '&idmap=' + idmap + '';

                var setimg = document.createElement('img');
                setimg.src = '../svg/set.svg';
                setimg.className = 'image';
                document.getElementById(i + 'svg').appendChild(set);
                document.getElementById(idps[i] + "set").appendChild(setimg);
                i = i + 1;
            }
        }
    </script>
    <script>

    </script>

</head>

<body>
    <?php
    $id = ($_GET['id']);
    ?>
<?php

include_once "../connect.php";
?>



    <div id="main">

        <div id="map">
            <div id="dis">
                <?php
                include_once "./discription.php"
                ?>
            </div>

        </div>
        <div id="inf" style="display:none;">
            <?php
            echo $dis;
            ?>
            <img src="../svg/x.svg" alt="" id = "close" style = "position:absolute; right:0; top:0;">
        </div>
        <script>
               $("#close").on('click', function() {
                $("#inf").css({
                    display: "none"
                });

                $("#map").css({
                    filter: "blur(0px)"
                })
            })

            $("#dis").on('click', function() {

                $("#inf").css({
                    display: "block"
                });

                $("#map").css({
                    filter: "blur(5px)"
                })

            });
        </script>

        <div id="menu">
            <img src="../svg/arrow.svg" alt="">
        </div>
       
        <div id="mainmenu">
        <div id="mainmenu1">
            <img src="../svg/menu.svg" alt="">
        </div>
        <div id="mainmenu2" style="display:none;">
            <div id="x">
                <img src="../svg/x.svg" alt="">
            </div>
            <div class="listmap">

                <?php
                include_once "./listmap.php";
                ?>
            </div>
        </div>
        <script>
            $('#mainmenu1').on('click', function() {


                $("#mainmenu2").css({
                    display: "block",
                    width: "20vw"
                })




            });
            $('#x').on('click', function() {
                $("#mainmenu2").css({
                    display: "none",
                    width: "20vw"
                })
            });
        </script>
            <div id="place">

            </div>
            <div class="setting">
                <div onClick="return window.confirm('Вы уверены, что хотите сделать это действие');" class="but">
                    <?php
                    include_once "getmap.php";
                    ?>
                </div>
                <a href="createpl.php?id=<?= $id ?>" class="but">
                    Добавить метку на карту
                </a>
                <a href="./setdescription.php?id=<?= $id ?>" class="but">
                    Редактировать описание карты
                </a>
                <a href="dropmap.php?id=<?= $id ?>" class="but" onClick="return window.confirm('Вы уверены, что хотите сделать это действие');">
                    Удалить карту
                </a>
            </div>
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
                        display: "grid"
                    });
                    $("#mainmenu").animate({
                        width: "25vw",

                    }), 1000, "linear";

                    $("#menu").animate({
                        "right": "21vw",

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
                        width: "0vw",

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
    </div>






    <script>
        $.ajax({
            url: '../ajax/delpl.php',
            method: 'post',
            dataType: "json",
            data: {
                idmap: idmap,
                idpl: idpl

            },
            success: function(data) {

            }

        });
    </script>

</body>

</html>