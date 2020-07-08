<?php

    include('../connection.php');

    $search = $_POST['search'];

    if (!empty($search)) {
        $query = "SELECT * FROM users WHERE fullname LIKE '%$search%' OR id LIKE '%$search%' OR serialbike LIKE '%$search%'";
        $result = mysqli_query($mysqli, $query);
        if (!$result) {
            die('Error de consulta'. mysqli_error($mysqli));
        }

        $json = array();
        while ($row = mysqli_fetch_array($result)) {
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
    }

?>
