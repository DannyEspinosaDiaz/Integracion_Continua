<?php

    include('../connection.php');

    $search = $_POST['search'];

    if (!empty($search)) {
        $query = "SELECT * FROM users WHERE firstname LIKE '%$search%' OR lastname LIKE '%$search%' OR id LIKE '%$search%' OR serialBike LIKE '%$search%'";
        $result = mysqli_query($mysqli, $query);
        if (!$result) {
            die('Error de consulta'. mysqli_error($mysqli));
        }

        $json = array();
        while ($row = mysqli_fetch_array($result)) {
            $json[] = array(
                'firstname' => $row['firstname'],
                'lastname' => $row['lastname'],
                'id' => $row['id']
            );
        }
        $jsonstring = json_encode($json);
        echo $jsonstring;
    }

?>
