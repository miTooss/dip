
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/form.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <title>Document</title>
    <script>
        <?php
        $id = $_GET['id'];

        ?>
        var id = <?php echo ($id) ?>;
            $.ajax({
            url: '../ajax/discriptionmap.php',
            method: 'post',
            dataType: "json",
            data: {
                id: id,
                

            },
            success: function(data) {
                console.log(data)
            $('#dis').val(data[0]);
            $('#name').val(data[1]);
            }

        });
    </script>
</head>
<body>
<?php
include_once "../connect.php";
mysqli_close($conn);
// echo '<meta http-equiv="Refresh" content= "0 ; URL = setmap.php?id='.$idmap.'">';
?>
<form action="./setdescription_script.php" method="POST">
<input type="text" id = "dis" name = "des">
<input type="text" id = "name" name = "name">
<input style="display: none;" type="text" value="<? echo $id ?>"  name = "map">
<input type="submit">
</form>

</body>
</html>
