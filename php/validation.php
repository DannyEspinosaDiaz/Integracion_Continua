<?php

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){

	require 'connection.php';
	sleep(2);
	session_start();

	$mysqli->set_charset('utf8');

	$usuario = $mysqli->real_escape_string($_POST['idlg']);
	$contraseña = $mysqli->real_escape_string($_POST['passlg']);

	if($nueva_consulta = $mysqli->prepare("SELECT fullname, typeuser FROM users WHERE id = ? AND pass = ? ")){
		
		$nueva_consulta->bind_param('ss', $usuario, $contraseña);

		$nueva_consulta->execute();

		$resultado = $nueva_consulta->get_result();

		if($resultado->num_rows == 1){
			$datos = $resultado->fetch_assoc();
			$_SESSION['usuario'] = $datos;
			echo json_encode(array('error' => false, 'type' => $datos['typeuser']));
		}
		
		else{
			echo json_encode(array('error' => true));
		}
		$nueva_consulta->close();

	}

}

$mysqli->close();

?>
