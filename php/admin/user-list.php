<?php

    include('../connection.php');
    $query = "SELECT * from users";
    $result = mysqli_query($mysqli, $query);

    if (!$result) {
        die('Consulta fallida'. mysqli_error($mysqli));
    }

    $json = array();
    while($row = mysqli_fetch_array($result)){
        $json[] = array(
            'nº' => $row['nº'],
            'id' => $row['id'],
            'fullname' => $row['fullname'],
            'typebike' => $row['typebike'],
            'serialbike' => $row['serialbike']          
        );    
    }

    $jsonstring = json_encode($json);
    echo $jsonstring;

?>