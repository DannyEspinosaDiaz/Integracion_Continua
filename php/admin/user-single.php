<?php

    include('../connection.php');

    $id = $_POST['id'];
    $query = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($mysqli, $query);
    if (!$result) {
        die('Consulta fallida');
    }
    $json = array();
    while($row = mysqli_fetch_array($result)){
        $json[] = array(  
            'fullname' => $row['fullname'],
            'typeid' => $row['typeid'],
            'id' => $row['id'],
            'typebike' => $row['typebike'],
            'serialbike' => $row['serialbike'],
            'numberphone' => $row['numberphone'],
            'pass' => $row['pass'],
            'typeuser' => $row['typeuser']
        );
    }

    $jsonstring = json_encode($json[0]);
    echo $jsonstring;
?>