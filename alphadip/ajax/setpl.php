<?php
    $id = $_POST['idpl']; 
    
    include_once "../connect.php";
    $query1 = "SELECT * FROM `placemarks` WHERE `IDp` = '{$id}' ";

    $sql = mysqli_query($conn, $query1);
    $idp = array();
    $place = array();
    
    while ($result = mysqli_fetch_assoc($sql)) {
        array_push($idp, $result);
    }
    array_push($place ,$idp[0]['IDp']);
    array_push($place ,$idp[0]['description']);
    array_push($place ,$idp[0]['img']);
    array_push($place ,$idp[0]['info']);
    array_push($place ,$idp[0]['link']);
    array_push($place ,$idp[0]['name']);


    echo json_encode($place);
    
    
    mysqli_close($conn);
