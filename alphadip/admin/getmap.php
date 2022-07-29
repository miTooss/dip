<?php



$query1 = "SELECT `verify` FROM `maps` WHERE `IDm` = '{$id}'";
$sql1 = mysqli_query($conn, $query1);
while ($result1 = mysqli_fetch_assoc($sql1)) {
    $ver = $result1['verify'];
}
if ($ver == 1) {
    echo "
        <a href = 'verifymap.php?ver={$ver}&id={$id}'  class='but'>"?><div onClick="return window.confirm('Вы уверены, что хотите сделать это действие');"><?echo "
            Опубликовать карту
        "?></div><?echo "</a>";
} elseif ($ver == 2) {
    echo "
    <a href = 'verifymap.php?ver={$ver}&id={$id}'  class='but'>"?><div onClick="return window.confirm('Вы уверены, что хотите сделать это действие');"><?echo "
        Снять карту с публикации 
    "?></div><?echo "</a>";
}

mysqli_close($conn);
