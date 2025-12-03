<?php
session_start();
if (!isset($_SESSION['perfil'])) {
  header('location:index.php');
} else {
  if ($_SESSION['perfil'] != 1) {
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
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="shortcut icon" href="GreenRoots.png">
  <!-- fin Bootstrap CSS -->
  <!-- fuente -->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
  </style>
  <!-- fin fuente -->
  <!-- css -->
  <style>
    .header {
      width: 100%;
      background-image: url(indexlogo.png);
      background-attachment: fixed;
      background-position: center;
      background-size: cover;
      position: relative;
      color: #f2f2f2;
      text-align: center;
      min-height: 100vh;

    }

    .header .navbar {
      background-color: transparent !important;
    }

    .logo img {
      width: 50px;

    }

    #boton {
      height: 50px;
      width: 200px;
      text-align: center;
    }


    .mover {
      position: fixed;
      z-index: 1;
    }

    .text-white:hover {
      text-decoration: none;
    }

    div.sticky {
      background: #FF7F3F;
      padding: -5px 300px;
      transition: .5s;
      height: 90px !important;


    }

    div.sticky ul li a {

      transition: .5s;
    }

    div.sticky .bg-transparent {
      color: #f2f2f2 !important;
      background: #FF7F3F !important;
      transition: .5s;
    }

    div.sticky .nav-item {
      color: #f2f2f2 !important;
      background: #FF7F3F !important;
      transition: .5s;
    }

    div.sticky .nav-link {
      color: #f2f2f2 !important;
    }
  </style>
  <!-- fin css -->

</head>

<body style="background-color: #272121">
  <header class="header">
    <!-- navbar -->
    <?php include('php/navbaradmin.php') ?>
    <!-- fin navbar -->
    <title>Árbol Buscar</title>
    <?php

    // Lectura de variables del Formulario anterior
    $patron = $_REQUEST['inputArbolBuscar'];
    // Fin Lectura de variables del Formulario anterior 	

    // Funciones escritas en PHP
    require("funciones.php");

    // Conexión a la Base de Datos
    $idCone = conexion();


    // Consultas SQL		

    if (is_numeric($patron)) {
      $SQL = "SELECT id, id_hoja, Id_tronco, fruto, nombre, origen, link, sitio
			FROM arbol
			WHERE
			(Id_hoja = $patron OR id_tronco = $patron
			OR fruto = $patron OR nombre LIKE '%$patron%'
			OR origen = $patron OR id = $patron
			OR link LIKE '%$patron%' OR sitio = $patron) 
			ORDER BY id ASC";
    } else {
      $SQL = "SELECT id, id_hoja, Id_tronco, fruto, nombre, origen, link, sitio
			FROM arbol
			WHERE
			(nombre LIKE '%$patron%' OR link LIKE '%$patron%' ) 
			ORDER BY id ASC";
    }

    $registro = mysqli_query($idCone, $SQL);
    $registros = mysqli_num_rows($registro);

    // Fin Consultas SQL	

    ?>
    <br>

    <div class="container" style="background-color: #FF7F3F">
      <!-- Content here -->
      <div class="jumbotron" style="background-color: #272121">
        <h1 class="display-4 text-danger">
          <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" color="#f2f2f2" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
          </svg>
          <font color="#f2f2f2">Árboles Encontrados</font>
        </h1>


        <form action="buscararbol.php" method="POST" enctype="multipart/form-data">
          <?php
          $contador = 0;
          if ($registros > 0) {
          ?>
            <hr>
            <p class="lead text-light"><?php echo $registros; ?> coincidencias para <?php echo $patron; ?></p>
            <hr>
            <div class="table-responsive-sm">
              <table class="table table-hover table-dark">
                <caption>Resultados encontrados: <?php echo $registros ?></caption>
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" style="background-color: #a2cc3e">Id</th>
                    <th scope="col" style="background-color: #a2cc3e">Id_hoja</th>
                    <th scope="col" style="background-color: #a2cc3e">Id_tronco</th>
                    <th scope="col" style="background-color: #a2cc3e">Fruto</th>
                    <th scope="col" style="background-color: #a2cc3e">Nombre</th>
                    <th scope="col" style="background-color: #a2cc3e">Origen</th>
                    <th scope="col" style="background-color: #a2cc3e">Sitio</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                  // Leer del array de respuesta obtenido en la consulta						
                  while ($fila = mysqli_fetch_array($registro)) {
                    $contador = $contador + 1;

                    $id = $fila[0];
                    $id_hoja = $fila[1];
                    $id_tronco = $fila[2];
                    $fruto = $fila[3];
                    $nombre = $fila[4];
                    $origen = $fila[5];
                    $sitio = $fila[7];


                    // Fin Consulta para obtener el nombre del grupo del lector					
                    echo "<tr>";
                    echo "<th scope='row'>$id</th>";
                    echo "<td>$id_hoja</td>";
                    echo "<td>$id_tronco</td>";
                    echo "<td>$fruto</td>";
                    echo "<td>$nombre</td>";
                    echo "<td>$origen</td>";
                    echo "<td>$sitio</td>";

                    echo "</tr>";
                  }
                  ?>
                </tbody>
              </table>
            <?php

            // Liberar la memoria utilizada en la consulta
            mysqli_free_result($registro);

            // Cerrar la conexión con la BD
            mysqli_close($idCone);
          } // Cierra IF principal
          else {
            ?>
              <hr>
              <h2 class="text-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-exclamation-square" viewBox="0 0 16 16">
                  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                  <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                </svg> No hay Coincidencias para:
              </h2>
              <h2 class="text-secondary"><?php echo $patron; ?></h2>
              <hr>
            <?php
          }
            ?>
            </div>

            <button type="submit" class="btn btn-block btn-lg" style="background-color: #f2f2f2">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" color="#f2f2f2" class="bi bi-house" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
              </svg>
              <font color="#f2f2f2" size"4px">Volver</font>
            </button>
  </header>

  </form>
  </div>
  </div>

  <script type="text/javascript">
    window.addEventListener("scroll", function() {
      var div = document.querySelector("div");
      div.classList.toggle("sticky", window.scrollY > 0);
    })
  </script>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
</body>

</html>