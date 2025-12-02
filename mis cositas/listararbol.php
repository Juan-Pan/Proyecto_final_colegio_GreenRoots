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
       #boton {
        height:50px; 
        width:200px;
        text-align: center;
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
        <form action="cerrar_sesion.php" id="boton"class="form-inline my-2 my-lg-0">														
                    <button class="btn  my-2 my-sm-0" type="submit"><font color="#f2f2f2" size="4px">Cerrar Sesión</font></button>
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
		
    <title>Árboles Listados</title>
    	<?php		
	// Funciones escritas en PHP
	require ("funciones.php");	

	// Conexión a la Base de Datos
	$idCone = conexion();	
	
	// Escribo la Consulta SQL	
	$SQL = "SELECT * FROM arbol";
	
	// Realizo la Consulta
	$registro = mysqli_query($idCone,$SQL);
	
	// Obtiene el número de registros de la Consulta
	$registros = mysqli_num_rows($registro);
	
	?>
	<div class="container" style="background-color: #FF7F3F">
	<!-- Content here -->
	<div class="jumbotron" style= "background-color: #272121">	
	<h2 class="display-4 text-secondary" align="center"><font color="#f2f2f2"> Listado de árboles</font></h2>
	<?php
		$contador = $registros+1;
		if ($registros > 0)
		{
		?>
		<div class="table-responsive-sm">
			<table class="table table-hover table-dark">
				<caption>Árboles registrados.</caption>
					<thead class="thead-dark" >
						<!-- pruebe thead-light-->
						<tr>							
							<th scope="col" style= "background-color: #a2cc3e">No.</th>	
							<th scope="col" style= "background-color: #a2cc3e">Id hoja</th>	
							<th scope="col" style= "background-color: #a2cc3e">id tronco</th>							
							<th scope="col" style= "background-color: #a2cc3e">Fruto</th>
							<th scope="col" style= "background-color: #a2cc3e">Nombre</th>
							<th scope="col" style= "background-color: #a2cc3e">Origen</th>
							<th scope="col" style= "background-color: #a2cc3e">Ubicación</th>
                            <th scope="col" style= "background-color: #a2cc3e">Sitio</th>
						</tr>
					</thead>
					<tbody>																					
						<?php																	
							// 5 - Leer del array de respuesta obtenido en la consulta						
							while($fila = mysqli_fetch_array($registro))																		
							{
								$contador = $contador - 1;								
								$id_hoja = $fila[1];
								$id_tronco= $fila[2];
								$id_perfil = $fila[3];
								$id_grupo = $fila[4];
								$telefono = $fila[5];
								$ubicacion = $fila[6];
                $sitio = $fila[7];
									
								echo"<tr>";								
									echo"<th scope='row'>$contador</th>";																			
									echo"<td><small>$id_hoja</small></td>";
									echo"<td><small>$id_tronco</small></td>";
									echo"<td><small>$id_perfil</small></td>";
									echo"<td><small>$id_grupo</small></td>";											
									echo"<td><small>$telefono</small></td>";											
									echo"<td><small>$ubicacion</small></td>";
                  echo"<td><small>$sitio</small></td>";																		
								echo"</tr>";								
							}
					?>
					</tbody>
			</table>
				<?php								
				// Liberar la memoria utilizada en la consulta
				mysqli_free_result($registro);				
				// Liberar la memoria utilizada en la consulta
								
				
				// Cerrar la conexión con la BD
				mysqli_close($idCone);			
		}// Cierra IF principal
		else
		{
		?>
			<hr/>
			<h2 class="text-success">No hay Árboles Registrados!</h2>
			<hr/>
		<?php
		}
		?>	
		</div>
	</div>	
	</div>
  </header>
  <body>
      <script type="text/javascript">
		window.addEventListener("scroll", function(){
      var div = document.querySelector("div");
			div.classList.toggle("sticky",window.scrollY > 0);
		})
	</script>


	
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
  </body>
</html>