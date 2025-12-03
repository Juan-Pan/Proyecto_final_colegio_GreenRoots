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

    a {
      color: rgba(255, 255, 255, .8);
      margin: 5px 0;
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
      <title>Árbol Eliminado</title>
      </head>

      <body>
        <?php
        // Lectura de variables del Formulario anterior -->		
        $nombre_arbol = $_REQUEST['inputnombre'];
        // Fin Lectura de variables del Formulario anterior  

        // Funciones escritas en PHP
        require("funciones.php");

        // Conexión a la Base de Datos
        $idCone = conexion();

        // Consulta SQL		
        $SQL = "DELETE FROM arbol WHERE nombre = '$nombre_arbol'";
        // Fin Consultas SQL			
        ?>

        <div class="container" style="background-color: #FF7F3F">
          <!-- Content here -->
          <div class="jumbotron" style="background-color: #272121">
            <h1 class="display-4">
              <font color="#f2f2f2">Árbol eliminado</font>
            </h1>
            <form action="indexadmin.php" method="POST" enctype="multipart/form-data">
              <div class="form-row text-secondary text-left">
                <div class="form-group col-md-12">
                  <?php
                  if (mysqli_query($idCone, $SQL)) {
                  ?>
                    <div class="alert alert-danger text-center" role="alert">
                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                      </svg> Árbol eliminado satisfactoriamente!
                    </div>
                  <?php
                  } else {
                  ?>
                    <div class="alert alert-warning text-center" role="alert">
                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z" />
                        <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z" />
                      </svg> No se puede eliminar el árbol
                    </div>
                  <?php
                  }

                  // Cerrar la conexión a la Base de Datos
                  mysqli_close($idCone);
                  ?>
                </div>
              </div>
              <button type="submit" class="btn  btn-block btn-lg" style="background-color:#ff7f3f">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" color="#f2f2f2" class="bi bi-house" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                </svg>
                <font color="#f2f2f2" size"4px">Inicio</font>
              </button>
            </form>
          </div>
        </div>


        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <!-- Option 2: Separate Popper and Bootstrap JS -->

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
      </body>

</html>