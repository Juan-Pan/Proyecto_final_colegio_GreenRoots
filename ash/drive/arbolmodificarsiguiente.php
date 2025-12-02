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
            <a class="dropdown-item bg-transparent text-white" href="musica.php"><font  size="4px"> Música</font></a>
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
      <title>Modificar árbol</title>
  </head>
  <body>
	<?php
	require ("funciones.php");	// Funciones escritas en PHP
	$documento_usuario = $_REQUEST['inputDocumento'];
	
	$idCone = conexion();	


	// Consultas SQL	
	
	// Consultar el usuario completamente

	$SQL1 = "SELECT arbol.*, hoja.id_hoja, hoja.tipo_hoja, tronco.id_tronco, tronco.tipo_tronco FROM arbol 			
			INNER JOIN hoja
			INNER JOIN tronco
			WHERE nombre = '$nombre_arbol'			
			AND arbol.id_hoja = hoja.id_hoja
			AND usuario.id_tronco = tronco.id_tronco";	
									
	$registro1 = mysqli_query($idCone,$SQL1);
	$registros_lectores = mysqli_num_rows($registro1);
	$fila1 = mysqli_fetch_row($registro1);

	$nombre_arbol = $fila1[1];
	$telefono_lector = $fila1[4];
	$id_perfil_lector = $fila1[6];
	$nombre_perfil_lector = $fila1[7];
	$id_grupo_lector = $fila1[8];
	$nombre_grupo_lector = $fila1[9];

	$SQL2 = "SELECT * FROM hoja ORDER BY id_hoja ASC";
	$registro2 = mysqli_query($idCone,$SQL2);	
	
	$SQL3 = "SELECT * FROM tronco ORDER BY id_tronco ASC";
	$registro3 = mysqli_query($idCone,$SQL3);	
	?>
  
	<div class="container">
	<!-- Content here -->
	<div class="jumbotron">
		<h1 class="display-4 text-success">Modificar Lector</h1>
		<form action="lectorModificado.php" method="POST" enctype="multipart/form-data">	
			<div class="form-row text-success text-left">	
				<div class="form-group col-md-4">
					<label class="text-success" for="inputDocumento">Documento</label>													
					<input type="text" class="form-control" id="inputDocumento" name="inputDocumento" value="<?php echo $documento_usuario; ?>" readonly>  
				</div>
				<div class="form-group col-md-8">
					<label class="text-success" for="inputNombre">Nombre Completo</label>													
					<input type="text" class="form-control" id="inputNombre" name="inputNombre" value="<?php echo $nombre_lector; ?>" >  
				</div>			
			</div>
			<div class="form-row text-success text-left">
				<div class="form-group col-md-4">
					<label class="text-success" for="inputPerfilLector">Perfil</label>	
					<?php // Inicio código en PHP														
					echo'<select required class="form-control"id="inputPerfilLector" name="inputPerfilLector">';	
						echo "<option value='$id_perfil_lector' selected>$nombre_perfil_lector</option>";						
						while($fila = mysqli_fetch_array($registro3))																		
						{																
							// IF para que no se repita la seleccion previa en la lista
							if ($fila[0] <> $id_perfil_lector)
								echo"<option value='$fila[0]'>$fila[1]</option>";	
						}													
					?>	<!-- Fin código en PHP -->
					</select>	
				</div>
				<div class="form-group col-md-4">
					<label class="text-success" for="inputGrupoLector">Grupo</label>													
					<?php // Inicio código en PHP							
					echo'<select required class="form-control"id="inputGrupoLector" name="inputGrupoLector">';												 
					echo "<option value='$id_grupo_lector' selected>$nombre_grupo_lector</option>";
						while($fila = mysqli_fetch_array($registro2))																		
						{								
							// IF para que no se repita la seleccion previa en la lista
							if ($fila[0] <> $id_grupo_lector)
								echo"<option value='$fila[0]'>$fila[1]</option>";									
						}													 
					?>	<!-- Fin código en PHP -->							
						</select>	
				</div>
				<div class="form-group col-md-4">
					<label class="text-success" for="inputTelefono">Teléfono</label>													
					<input type="text" class="form-control" id="inputTelefono" name="inputTelefono" value="<?php echo $telefono_lector; ?>" >  
				</div>		
			</div>	
			<button type="submit" class="btn btn-success btn-block btn-lg">
				<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-save2" viewBox="0 0 16 16">
					<path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v4.5h2a.5.5 0 0 1 .354.854l-2.5 2.5a.5.5 0 0 1-.708 0l-2.5-2.5A.5.5 0 0 1 5.5 6.5h2V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
				</svg> Modificar árbol
			</button>	
		</form>	
	</div>	
	</div>
	<?php
		mysqli_free_result($registro1);	
		mysqli_free_result($registro2);	
		mysqli_free_result($registro3);	
		mysqli_close($idCone);	
	?>

        <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    
  </body>
</html>