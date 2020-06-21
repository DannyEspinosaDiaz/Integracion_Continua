<?php 
	session_start();
	
 	if (isset($_SESSION['usuario'])){
        
        if ($_SESSION['usuario']['typeUser'] != "2"){
			header('Location: ../admin/admin.php'); 			
 		}

    }
    else{
        header('Location: ../login.php');
    }
     
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">
    <title>My Bike</title>
</head>
<body>
    <h1>Bienvenido usuario <?php echo $_SESSION['usuario']['firstname'] ?></h1>
    <a href="../exit.php">Cerrar sesión</a>
</body>
</html>
