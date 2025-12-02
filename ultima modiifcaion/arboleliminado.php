<?php
	session_start();
	if (!isset($_SESSION['perfil']))
	{
		header('location:index.php');		
	}
	else
	{
		if ($_SESSION['perfil'] != 1)
		{
			header('location:index.php');
		}
		
			
	}	
?>

<?php
	$nombre = $_SESSION['nombre'];
?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="shortcut icon" href="GreenRoots.png">
    <!-- fin Bootstrap CSS -->
    <!-- fuente -->
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
    </style>
    <!-- fin fuente -->
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
  </head>

    <body style= "background-color: #272121">
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
            <a class="dropdown-item bg-transparent text-white" href="interior.php"><font  size="4px" styles= " "> Patios</font></a>
            <a class="dropdown-item bg-transparent text-white" href="sendero.php"><font  size="4px"> Sendero</font></a>
            <a class="dropdown-item bg-transparent text-white" href="biblioteca.php"><font  size="4px"> Biblioteca</font></a>
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
        <li>
        <a class="nav-link text-white" href="creararbol.php"><font  size="4px"> Crear árbol</font></a>
        </li>
        <li>
        <a class="nav-link text-white" href="listararbol.php"><font  size="4px"> Listar árbol</font></a>
        </li>
        <li>
        <form action="cerrar_sesion.php" class="form-inline my-2 my-lg-0">														
								<button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Cerrar Sesión</button>
							</form>
        </li>
       
          </ul>
        </div>
        </nav>
         <title>Árbol Eliminado</title>
  </head>
  <body>
	<?php
	// Lectura de variables del Formulario anterior -->		
    $nombre_arbol = $_REQUEST['inputnombre'];		
	// Fin Lectura de variables del Formulario anterior  
	
	// Funciones escritas en PHP
	require ("funciones.php");		

	// Conexión a la Base de Datos
	$idCone = conexion();	
	
	// Consulta SQL		
	$SQL = "DELETE FROM arbol WHERE nombre = '$nombre_arbol'";					
	// Fin Consultas SQL			
	?>	
	
	<div class="container btn-danger">
	<!-- Content here -->
	<div class="jumbotron bg-light">
		<h1 class="display-4 text-danger">Árbol eliminado</h1>
		<form action="indexadmin.php" method="POST" enctype="multipart/form-data">	
			<div class="form-row text-secondary text-left">
				<div class="form-group col-md-12">
					<?php
					if (mysqli_query ($idCone, $SQL))
					{						
					?> 
						<div class="alert alert-danger text-center" role="alert">
							<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
								<path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
							</svg> Árbol eliminado satisfactoriamente!
						</div>	
					<?php					
					}
					else
					{						
					?> 
						<div class="alert alert-warning text-center" role="alert">
							<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
								<path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
							</svg> No se puede eliminar el árbol
						</div>	
					<?php
					}
					
					// Cerrar la conexión a la Base de Datos
					mysqli_close($idCone);								
					?>	
				</div>								
			</div>		
			<button type="submit" class="btn btn-danger btn-block btn-lg">
				<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
					<path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
					<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
				</svg> Inicio
			</button>	
		</form>	
	</div>	
	</div>
      

      <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>