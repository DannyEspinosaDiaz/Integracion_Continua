<?php 
	session_start();
	
 	if (isset($_SESSION['usuario'])){
        
        if ($_SESSION['usuario']['typeUser'] != "1"){
			header('Location: ../user/user.php'); 			
 		}

    }
    else{
        header('Location: ../login.php');
    }
     
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">
    <!-- Css bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Css Custom -->
    <title>My Bike</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="../../images/logo.png" alt="">
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">¡Hola <?php echo $_SESSION['usuario']['firstname'] ?>!</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Usuarios
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" data-toggle="modal" data-target="#creatUser" href="#">Crea un usuario o admin</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Configuración</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../exit.php" tabindex="-1" aria-disabled="true">Cerrar sesión</a>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" id="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </div>
    </nav>
    <!-- Navbar -->
    <!-- Table users -->
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Bici</th>
                <th scope="col">Código</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>GW</td>
                <td>13245</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Cannondale</td>
                <td>13245</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>Trek</td>
                <td>13245</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Larry</td>
                <td>BMC</td>
                <td>13245</td>
            </tr>
        </tbody>
    </table>
    <!-- Table users -->
    <!-- Modal created user -->
    <!-- Modal -->
    <div class="modal fade" id="creatUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Crea un usuario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form>
        <div class="row">
            <div class="col">
            <input type="text" class="form-control" placeholder="Nombre">
            </div>
            <div class="col">
            <input type="text" class="form-control" placeholder="Apellido">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <select id="inputState" class="form-control">
                    <option selected>Tipo de identificación</option>
                    <option name="cedula">Cédula de ciudadanía</option>
                    <option name="tarjeta">Tarjeta de identidad</option>
                    <option name="pasaporte">Pasaporte</option>
                </select>
            </div>
            <div class="col">
            <input type="number" class="form-control" placeholder="Número de identificación">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <select id="inputState" class="form-control">
                    <option selected>Tipo de bicicleta</option>
                    <option name="gw">GW</option>
                    <option name="cannondale">Cannondale</option>
                    <option name="trek">Trek</option>
                    <option name="optimus">Optimus</option>
                    <option name="otra">Otra</option>
                </select>
            </div>
            <div class="col">
            <input type="number" class="form-control" placeholder="Número de serie">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
            <input type="number" class="form-control" placeholder="Teléfono">
            </div>
            <div class="col">
            <input type="text" class="form-control" placeholder="Contraseña">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <select id="inputState" class="form-control">
                    <option selected>Tipo de usuario</option>
                    <option name="2">Usuario</option>
                    <option name="1">Administrador</option>
                </select>
            </div>
        </div>
        </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary">Crear</button>
        </div>
        </div>
    </div>
    </div>
    <!-- Modal created user -->
    <!-- Javascript Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- Javascript custom -->
    <script src="../../js/main.js"></script>
    <!-- Javascript custom -->
</body>
</html>
