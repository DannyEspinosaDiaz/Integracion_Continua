<?php
    $mysqli = new mysqli('localhost', 'root', '', 'mybike');
    if ($mysqli->connect_errno):
        echo "Error al conectarse con MYSQL debido a un error ".$mysqli->connect_error;
    endif;
?>