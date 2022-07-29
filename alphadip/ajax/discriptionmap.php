<?php
    $id = $_POST['id']; 
    include_once "../connect.php";
    $query = "SELECT `description`,`name` FROM `maps` WHERE `IDm` = '{$id}'";
    $sql = mysqli_query($conn, $query);
    $dis = array(); 
    
    while ($result = mysqli_fetch_assoc($sql)) {
        array_push($dis, $result['description']);
        array_push($dis, $result['name']);
    }
    echo json_encode($dis);
    
    
    mysqli_close($conn);
