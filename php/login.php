<?php 
	session_start();
	
 	if (isset($_SESSION['usuario'])){
 		if ($_SESSION['usuario']['typeuser'] == "Administrador"){
			header('Location: admin/admin.php'); 			
 		}
 		else if ($_SESSION['usuario']['typeuser'] == "Usuario") {
 			header('Location: user/user.php');
 		}
 	}
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
	<!-- Css Boostrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<!-- Css custom -->
	<link rel="stylesheet" href="../css/main.css">
	<title>My Bike</title>
</head>
<body>
	<!-- nav -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
	<div class="container">
		<a class="navbar-brand" href="#">
			<img src="../images/logo.png" alt="">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	</div>
	</nav>
	<!-- nav -->	
	<!-- form -->
	<div class="container mt-5">
		<div class="row justify-content-center align-items-center">
			<div class="col-md-6">
				<form action="" id="formlg">
					<div class="form-group">
						<label for="exampleInputEmail1">Usuario</label>
						<input type="number" class="form-control" name="idlg" aria-describedby="emailHelp" pattern="[A-Za-z0-9-]{1,30}" required>
						<small class="form-text text-muted">Nunca compartiremos tu datos con nadie más.</small>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Contraseña</label>
						<input type="password" class="form-control" name="passlg" pattern="[A-Za-z0-9-]{1,30}" required>
					</div>
						<input id="btnlg" type="submit" class="btn btn-primary" value="Iniciar sesión"/>
				</form>
			</div>
		</div>
	</div>
	<div class="container mt-5">
		<div class="row justify-content-center align-items-center">
			<div class="col-md-6">
			<div class="alert alert-danger error" role="alert">¡UPS! Los datos de ingreso son incorrectos, intenta nuevamente.</div>
			</div>
		</div>
	</div>
	<!-- form -->
	<!-- Footer -->
	<div class="containter mt-5">
		<footer class="page-footer font-small blue">
			<!-- Copyright -->
			<div class="footer-copyright text-center py-3">© 2020 Copyright:
			<a> MyBike.com</a>
			</div>
			<!-- Copyright -->
		</footer>
	</div>
	<!-- Footer --> 
	 <!-- Scripts Boostrap -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<!-- Scripts Boostrap -->
	<!-- Scripts custom -->
	<script src="../js/main.js"></script>
	<script src="../js/jquery-3.5.1.js"></script>
	<!-- Scripts custom -->
</body>
</html>
