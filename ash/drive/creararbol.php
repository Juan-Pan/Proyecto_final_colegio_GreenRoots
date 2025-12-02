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

    <title>Bienvenido</title>
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
          <a class="dropdown-item bg-transparent text-white" href="entrada.php"><font  size="4px"> entrada</font></a>
            <a class="dropdown-item bg-transparent text-white" href="interior.php"><font  size="4px" styles= " "> Patios</font></a>
            <a class="dropdown-item bg-transparent text-white" href="biblioteca.php"><font  size="4px"> Biblioteca</font></a>
            <a class="dropdown-item bg-transparent text-white" href="sendero.php"><font  size="4px"> Sendero</font></a>
            <a class="dropdown-item bg-transparent text-white" href="musica.php"><font  size="4px"> Música</font></a
          </div>
            </li>
        <li class="nav-item ">
          <a class="nav-link text-white" href="#"><font  size="4px"> Busca tu árbol</font><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="about.php"><font  size="4px"> ¿Quiénes somos?</font></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          <font  size="4px">CRUD</font>
          </a>
          <div class="dropdown-menu bg-transparent   p-3 mb-5  rounded">
            <a class="dropdown-item bg-transparent text-white" href="creararbol.php"><font  size="4px" styles= " ">Crear árbol</font></a>
            <a class="dropdown-item bg-transparent text-white" href="listararbol.php"><font  size="4px">Listar árbol</font></a>
            <a class="dropdown-item bg-transparent text-white" href="buscararbol.php"><font  size="4px"> Buscar árbol</font></a>
            <a class="dropdown-item bg-transparent text-white" href="eliminararbol.php"><font  size="4px">Eliminar árbol</font></a>
            <a class="dropdown-item bg-transparent text-white" href="modificararbol.php"><font  size="4px">Modificar árbol</font></a>
          </div>
            </li>
        <li>
        <form action="cerrar_sesion.php" class="form-inline my-2 my-lg-0">														
								<button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Cerrar Sesión</button>
							</form>
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


    <title>Inicio</title>
  </head>
  <body >
	<div class="container bg-danger"  >
	<!-- Content here -->
	<div class="jumbotron bg-secundary" >
		<h1 class="display-4" align="center"> <font color="gray">Crear árbol</font></h1>
    <form action="destino.php">
		<div class="form-row text-success text-left">	
			<div class="form-group col-md-4">
      <label class="text-secondary" for="inputhoja"><font size="5">Tipo hoja </font></label>													
				<select class="form-control" aria-label="Default select example" id="inputhoja" name="inputhoja" required>
				  <option selected disabled value>Escoge...</option>
				  <option value="1">Ancha</option>
				  <option value="2">Redonda</option>
				  <option value="3">Cuadrada</option>
				  <option value="4">Triangular</option>
          <option value="5">Delgada</option>
				</select>
			</div>
			<div class="form-group col-md-8">
				<label class="text-secondary" for="inputnombre"><font size="5">Nombre árbol</font></label>													
				<input type="text" class="form-control" id="inputnombre" name="inputnombre" placeholder="Ingresa campo" required>
			</div>			
		</div>
		<div class="form-row text-success text-left">
			<div class="form-group col-md-4">
				<label class="text-secondary" for="inputtronco"><font size="5">Tipo tronco </font></label>													
				<select class="form-control" aria-label="Default select example" id="inputtronco" name="inputtronco" required>
				  <option selected disabled value>Escoge...</option>
				  <option value="1">Gordo</option>
				  <option value="2">Delgado</option>
				  <option value="3">Con corteza</option>
				  <option value="4">Sin corteza</option>
				</select>
			</div>
			<div class="form-group col-md-4">
				<label class="text-secondary" for="inputfruto"><font size="5">Fruto</font></label>			
				<select class="form-control" aria-label="Default select example" id="inputfruto" name="inputfruto" required>
				  <option selected disabled value>Escoge...</option>
				  <option value="1">No aplica</option>
				  <option value="2">Si</option>
				  <option value="3">No</option>
				</select>	
    			
				
			</div>
			<div class="form-group col-md-4">
				<label class="text-secondary" for="inputdescripcion"><font size="5">Descripción</font></label>													
				<input type="text" class="form-control" id="inputdescripcion" name="inputdescripcion" placeholder="Ingresa campo">
			</div>
    </div>					
    <div class="form-row text-success text-left">
      <div class="form-group col-md-6">
				<label class="text-secondary" for="inputsitio"><font size="5">Sitio</font></label>			
				<select class="form-control" aria-label="Default select example" id="inputsito" name="inputsitio" required>
				  <option selected disabled value>Escoge...</option>
				  <option value="1">Patios </option>
				  <option value="2">Biblioteca</option>
				  <option value="3">Sendero</option>
				</select>									
			</div>
      <div class="form-group col-md-6">
				<label class="text-secondary" for="inputubicaion"><font size="5">Ubicación</font></label>													
				<input type="text" class="form-control" id="inputubicacion" name="inputubicacion" placeholder="Ingresa campo" required>
			</div>
    </div>
  <div class="form-row text-success text-left">
			<div class="form-group col-md-6">
		<button type="submit" class="btn btn-danger btn-block btn-lg">
				<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
				  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
				</svg> Enviar!
			</button>
			</div>
			<div class="form-group col-md-6">
			<button type="reset" class="btn btn-danger btn-block btn-lg">
				<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-file-earmark-x" viewBox="0 0 16 16">
 			 	<path d="M6.854 7.146a.5.5 0 1 0-.708.708L7.293 9l-1.147 1.146a.5.5 0 0 0 .708.708L8 9.707l1.146 1.147a.5.5 0 0 0 .708-.708L8.707 9l1.147-1.146a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146z"/>
  				<path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
				</svg> Eliminar!
			</button>
			</div>	
		</div>
  </div>
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
  </body>
</html>