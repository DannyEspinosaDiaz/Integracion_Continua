<?php

    include('../connection.php');

    if(isset($_POST['fullname'])) {
        $fullname = $_POST['fullname'];
        $typeid = $_POST['typeid'];
        $id = $_POST['id'];
        $typebike = $_POST['typebike'];
        $serialbike = $_POST['serialbike'];
        $numberphone = $_POST['numberphone'];
        $pass = $_POST['pass'];
        $typeuser = $_POST['typeuser'];
        $query = "INSERT into users( fullname, typeid, id, typebike, serialbike, numberphone,
        pass, typeuser) VALUES ('$fullname', '$typeid', '$id', '$typebike', '$serialbike',
        '$numberphone', '$pass', '$typeuser')";
        $result = mysqli_query($mysqli, $query);
        if (!$result) {
            die('La creación a fallado');
        }
        echo 'Usuario creado satisfactoriamente';
    }

?>