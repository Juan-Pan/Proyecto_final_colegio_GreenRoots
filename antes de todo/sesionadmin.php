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
     <link rel="shortcut icon" type="text/css" href="logo.png">
 <!-- css -->
 <style>
      .header{
        width: 100%;
        background-image: url(indexlogo.png);
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
        position: relative;
        color: #f2f2f2;
        text-align: center;
        min-height:100vh;

      }
      .header .navbar{
        background-color: transparent !important;
      }
  
      .logo img {
        width: 50px;

      }
      
      .card {
          margin: 30px;
          width: 300px ;
          height: 300px;
          border-radius: 30px;
          background: var(--i);
          background-size: cover;
          box-shadow: 3px 5px 5px rgba(3, 32, 51, .8);
          overflow: hidden;
      }

      .content {
          width: 100%;
          height: 100%;
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          background: rgba(0, 0, 0, .4);
          opacity: 0;
          transition: .8s;
      }

      .content h2, a {
          color: rgba(255, 255, 255, .8);
          margin: 5px 0;
      }

      .card:hover .content {
          opacity: 10;
      }
      .btn.custom-btn {
          padding: 12px 25px;
          font-size: 16px;
          font-weight: 600;
          color: #f2f2f2;
          background: #FF7F3F;
          border: 2px solid #FF7F3F;
          border-radius: 5px;
          transition: .5s;
      }
      
      .btn.custom-btn:hover {
          color: #FF7F3F;
          background: transparent;
      }
      
      .btn.custom-btn:focus,
      .form-control:focus,
      .custom-select:focus {
          box-shadow: none;
      }
      p{
        margin-left:10%;
        margin-right:10%;
      }
      .mover{
        position: fixed;
        z-index: 1;
      }
      .text-white:hover{
        text-decoration: none;
      }
      div.sticky{
        background:#FF7F3F;
        padding: -5px 300px;
        transition: .5s;
        height: 90px !important;  
        

      }
      div.sticky ul li a {
  
        transition: .5s;
      }
      div.sticky .bg-transparent{
        color: #f2f2f2 !important;
        background: #FF7F3F !important;
        transition: .5s;
      }
      div.sticky .nav-item{
        color: #f2f2f2 !important;
        background: #FF7F3F !important;
        transition: .5s;
      }
      div.sticky .nav-link{
        color: #f2f2f2 !important;
      }

    </style>
    <!-- fin css -->

    <title>Iniciar Sesión</title>
  </head>
  <body  body style= "background-color: #272121">
  <header class="header">
      <!-- navbar -->
    <div class="mover container-fluid">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 mb-5 bg-white rounded" >
      <label for="" class="logo">
          <a href="index.php"><img src="logo.png"></a>
        </label>
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          <font  size="4px"> Árboles</font>
          </a>
          <div class="dropdown-menu bg-transparent   p-3 mb-5  rounded">
            <a class="dropdown-item bg-transparent text-white" href="entrada.php"><font  size="4px"> Entrada</font></a>
            <a class="dropdown-item bg-transparent text-white" href="interior.php"><font  size="4px" styles= " "> Patios</font></a>
            <a class="dropdown-item bg-transparent text-white" href="biblioteca.php"><font  size="4px"> Biblioteca</font></a>
            <a class="dropdown-item bg-transparent text-white" href="sendero.php"><font  size="4px"> Sendero</font></a>
            <a class="dropdown-item bg-transparent text-white" href="musica.php"><font  size="4px"> Música</font></a>
          </div>
            </li>
        <li class="nav-item ">
          <a class="nav-link text-white" href="#"><font  size="4px"> Busca tu árbol</font><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="about.php"><font  size="4px"> ¿Quiénes somos?</font></a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-white" href="sesionadmin.php"><font  size="4px"> Iniciar sesión</font></a>
       
        </li>
       
          </ul>
        </div>
      </nav>
    </div>
      <br>
      <br>
      <br>
  
			
      <br>
      <br>
      <br>
      <br>
      <br>
      
      <div class="container" style="background-color: #FF7F3F">	
	<div class="jumbotron" style= "background-color: #272121">
	<h1 style="text-align:center"><font color="#f2f2f2"> Iniciar Sesión</font></h1>
	<form action="#" method="POST" autocomplete="off">		
		<div class="form-group row">
			<div class="col-sm-3">
			</div>		
			<label for="inputUsuario" class="col-sm-1 col-form-label"><font color="#f2f2f2" size="4px">Usuario:</font></label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="inputUsuario" name="inputUsuario" placeholder="Usuario" >
			</div>
			<div class="col-sm-3"></div>
		</div>
	  
		<div class="form-group row">
			<div class="col-sm-3">
			</div>
			<label for="inputPassword" class="col-sm-1 col-form-label"><font color="#f2f2f2" size="4px">Clave:</font></label>
			<div class="col-sm-5">
				<input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Clave">
			</div>
			<div class="col-sm-3"></div>
		</div>
	  
		<div class="form-group row">
			<div class="col-sm-3">
			</div>		
			<div class="col-sm-6">
				<button type="submit" class="btn  btn-block" style="background-color: #FF7F3F"><font color="#f2f2f2" size="4px">Iniciar Sesión</font></button>
			</div>
		</div>	  	  
	</form>
	</div>
	</div>

    </header>
	
    <!-- Fin navbar -->
  	
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
