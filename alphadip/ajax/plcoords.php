<?php
    $id = $_POST['idmap']; 
    include_once "../connect.php";
    $query1 = "SELECT `IDp` FROM `main2` WHERE `IDm` = '{$id}' ";

    $sql = mysqli_query($conn, $query1);
    $idp = array();
    $coords = array(); 
    
    while ($result = mysqli_fetch_assoc($sql)) {
        array_push($idp, $result['IDp']);
        $coord = $result['IDp'];
        $query2 = "SELECT `info` FROM `placemarks` WHERE `IDp` = '{$coord}'";
        $sql1 = mysqli_query($conn, $query2);
        array_push($coords, mysqli_fetch_row($sql1));
    }





    echo json_encode($coords);
    
    mysqli_close($conn);
