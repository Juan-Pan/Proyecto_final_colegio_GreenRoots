<?php
	session_start();
	if (isset($_REQUEST['cerrar_sesion']))
	{
		session_unset();
		session_destroy();
	}

	if (isset($_SESSION['perfil']))
	{
		switch($_SESSION['perfil'])
		{
			case 1:
				header('location:indexadmin.php');
			break;
			
			case 2:
				header('location:index.php');
			break;		
			
			default:
		}
	}

	if (isset($_REQUEST['inputUsuario']) && isset($_REQUEST['inputPassword']))
	{
		$username = $_REQUEST['inputUsuario'];
		$password = $_REQUEST['inputPassword'];
		$password = md5($password);
		
		// Consultando información del Administrador
		require ("funciones.php");	// Funciones escritas en PHP
		$idCone = conexion();		
		
		
		
		$SQL = "SELECT id_perfil, nombre FROM autenticar_usuario WHERE username = '$username' AND password = '$password'";
		
		$registro = mysqli_query($idCone,$SQL);																		
		while($tupla = mysqli_fetch_row($registro))																		
		{													
			$id_perfil = $tupla[0];
			$nombre = $tupla[1];						
		}
		$registros = mysqli_num_rows($registro);
		mysqli_free_result ($registro);
		mysqli_close($idCone);
		// Consultando información del Administrador
		
		if ($registros > 0)
		{
			$_SESSION['perfil'] = $id_perfil;
			$_SESSION['nombre'] = $nombre;
			
			switch($_SESSION['perfil'])
			{
				case 1:					
					header("location:indexadmin.php");
				break;
				
				case 2:
					header("location:index.php");
				break;		
				
				default:
			}
		}
		else
		{			
			?>
			<div class="alert alert-danger" align="center" role="alert">
				Datos incorrectos!							
			</div>	
			<?php
		}
	}	
?>


<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="shortcut icon" type="text/css" href="icono.png">

    <title>Bienvenidos</title>
  </head>
  <body  background="fondo3.jpg">
    
	<div class="container bg-danger">	
	<div class="jumbotron" style= "background-color: #272121">
	<h1 style="text-align:center"><font color="gray"> Ingreso al Sistema </font></h1>
	<form action="#" method="POST">		
		<div class="form-group row">
			<div class="col-sm-3">
			</div>		
			<label for="inputUsuario" class="col-sm-1 col-form-label"><font color="gray">Usuario:</font></label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="inputUsuario" name="inputUsuario" placeholder="Usuario">
			</div>
			<div class="col-sm-3"></div>
		</div>
	  
		<div class="form-group row">
			<div class="col-sm-3">
			</div>
			<label for="inputPassword" class="col-sm-1 col-form-label"><font color="gray">Clave:</font></label>
			<div class="col-sm-5">
				<input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Clave">
			</div>
			<div class="col-sm-3"></div>
		</div>
	  
		<div class="form-group row">
			<div class="col-sm-3">
			</div>		
			<div class="col-sm-6">
				<button type="submit" class="btn btn-danger btn-block">Ingresar al Sistema</button>
			</div>
		</div>	  	  
	</form>
	</div>
	</div>

<!-- Insertar usuarios 1: administrador * 2: colaborador
INSERT INTO autenticar_usuario (nombre, username, password) VALUES ('Cesar', 'cagm',MD5('1234'),'1')
-->

   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>
