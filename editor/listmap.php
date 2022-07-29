<?php


$query = "SELECT `IDm` FROM `usermap` WHERE `IDu` = '{$_SESSION['idu']}'  ";
$sql = mysqli_query($conn, $query);
$idm = array();
$i = 0;
while ($result1 = mysqli_fetch_assoc($sql)) {
    array_push($idm, $result1['IDm']);
    $query1 = "SELECT `name`, `IDm`,`verify` FROM `maps` WHERE `IDm`= '{$idm[$i]}' ";
    $sql1 = mysqli_query($conn, $query1);
    if ($_SESSION['role'] == 1) {
        while ($result = mysqli_fetch_assoc($sql1)) {
            if ($result['verify'] == 1) {
                echo "<a href='setmap.php?id={$result['IDm']}' class = 'map'>Редактировать карту  {$result['name']} (Проверяется)</a>";
            } elseif ($result['verify'] == 0) {
                echo "<a href='setmap.php?id={$result['IDm']}' class = 'map'>Редактировать карту {$result['name']}  (Непроверяется)</a>";
            }elseif ($result['verify'] == 2) {
                echo "<a href='setmap.php?id={$result['IDm']}' class = 'map'>Редактировать карту {$result['name']}  (Опубликована)</a>";
            }
            $i = $i + 1;
        }
    }
}

