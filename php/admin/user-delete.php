<?php

    include('../connection.php');

    if (isset($_POST['id'])) {

        $id = $_POST['id'];
    
        $query = "DELETE FROM users WHERE id = $id";
        $result = mysqli_query($mysqli, $query);
        if (!$result) {
            die('Consulta fallida.');
        }
        echo "Usuario eliminado correctamente";
    }

?>