<?php
    $id = $_POST['idmap']; 
    include_once "../connect.php";
    $query1 = "SELECT `IDp` FROM `main2` WHERE `IDm` = '{$id}' ";

    $sql = mysqli_query($conn, $query1);
    $idp = array();
    $coords = array(); 
    
    while ($result = mysqli_fetch_assoc($sql)) {
        array_push($idp, $result['IDp']);
    }





    echo json_encode($idp);
    
    mysqli_close($conn);