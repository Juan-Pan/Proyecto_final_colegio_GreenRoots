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

    .card {
      margin: 30px;
      width: 300px;
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

    .content h2,
    a {
      color: rgba(255, 255, 255, .8);
      margin: 5px 0;
    }

    .card:hover .content {
      opacity: 10;
    }

    #boton {
      height: 50px;
      width: 200px;
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

    p {
      margin-left: 10%;
      margin-right: 10%;
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
    <div class="mover container-fluid">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 mb-5 bg-white rounded">
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
                <font size="4px"> Árboles</font>
              </a>
              <div class="dropdown-menu bg-transparent   p-3 mb-5  rounded">
                <a class="dropdown-item bg-transparent text-white" href="entrada.php">
                  <font size="4px"> entrada</font>
                </a>
                <a class="dropdown-item bg-transparent text-white" href="interior.php">
                  <font size="4px" styles=" "> Patios</font>
                </a>
                <a class="dropdown-item bg-transparent text-white" href="biblioteca.php">
                  <font size="4px"> Biblioteca</font>
                </a>
                <a class="dropdown-item bg-transparent text-white" href="sendero.php">
                  <font size="4px"> Sendero</font>
                </a>
                <a class="dropdown-item bg-transparent text-white" href="musica.php">
                  <font size="4px"> Música</font>
                </a>
              </div>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white" href="#">
                <font size="4px"> Busca tu árbol</font><span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="about.php">
                <font size="4px"> ¿Quiénes somos?</font>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                <font size="4px">CRUD</font>
              </a>
              <div class="dropdown-menu bg-transparent   p-3 mb-5  rounded">
                <a class="dropdown-item bg-transparent text-white" href="creararbol.php">
                  <font size="4px" styles=" ">Crear árbol</font>
                </a>
                <a class="dropdown-item bg-transparent text-white" href="listararbol.php">
                  <font size="4px">Listar árbol</font>
                </a>
                <a class="dropdown-item bg-transparent text-white" href="buscararbol.php">
                  <font size="4px"> Buscar árbol</font>
                </a>
                <a class="dropdown-item bg-transparent text-white" href="eliminararbol.php">
                  <font size="4px">Eliminar árbol</font>
                </a>
                <a class="dropdown-item bg-transparent text-white" href="modificararbol.php">
                  <font size="4px">Modificar árbol</font>
                </a>
              </div>
            </li>
            <li>
              <form action="cerrar_sesion.php" id="boton" class="form-inline my-2 my-lg-0">
                <button class="btn  my-2 my-sm-0" type="submit">
                  <font color="#f2f2f2" size="4px">Cerrar Sesión</font>
                </button>
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

    <title>Datos ingresados</title>
    </head>

    <body>
      <?php

      $a = $_REQUEST['inputhoja'];
      $b = $_REQUEST['inputtronco'];
      $c = $_REQUEST['inputfruto'];
      $d = $_REQUEST['inputnombre'];
      $e = $_REQUEST['inputorigen'];
      $f = $_REQUEST['inputlink'];
      $g = $_REQUEST['inputsitio'];

      switch ($b) {

        case '1':

          $nombre_b = "Delgado";
          break;

        case '2':

          $nombre_b = "Grueso";
          break;

        case '3':

          $nombre_b = "Delgado-liso";
          break;
          
        case '4':

          $nombre_b = "Grueso-liso";
          break;

      }

      switch ($a) {

        case '1':

          $nombre_a = "Eliptica";
          break;

        case '2':

          $nombre_a = "Peltada";
          break;

        case '3':

          $nombre_a = "Bipinnada";
          break;

        case '4':

          $nombre_a = "Alterna";
          break;

      }

      switch ($c) {

        case '1':

          $nombre_c = "Si";
          break;

        case '2':

          $nombre_c = "No";
          break;
      }

      switch ($g) {

        case '1':

          $nombre_g = "Patios";
          break;

        case '2':

          $nombre_g = "Biblioteca";
          break;

        case '3':

          $nombre_g = "Senderos";
          break;
        case '4':

          $nombre_g = "Entrada";
          break;
          case '3':

          $nombre_g = "Música";
          break;
      }
      switch ($e) {

        case '1':

          $nombre_e = "Exotica";
          break;

        case '2':

          $nombre_e = "Nativa";
          break;
        }







      // Funciones escritas en PHP
      require("funciones.php");

      // Consulta en SQL para CREAR un registro
      $SQL = "INSERT INTO arbol (id_hoja,id_tronco,fruto,nombre,origen,link,sitio)                          
            VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g')";
      // Fin Consulta en SQL para CREAR un registro

      // Crear una conexión a la Base de Datos
      $idCone = conexion();

      if (mysqli_query($idCone, $SQL)) {
      ?>




        <div class="alert alert-success text-center" role="alert">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
          </svg> Árbol guardado satisfactoriamente!
        </div>
      <?php
      } else {
      ?>
        <div class="alert alert-danger text-center" role="alert">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
          </svg> No se puede guardar el árbol, tal vez el código ya existe!
        </div>
      <?php
      }

      // Cerrar la conexión a la Base de Datos
      mysqli_close($idCone);
      ?>

      <div class="container" style="background-color: #FF7F3F">
        <!-- Content here -->
        <div class="jumbotron" style="background-color: #272121">
          <h1 class="display-4" align="center">
            <font color="#F2F2F2">Árbol Creado</font>
          </h1>
          <form action="creararbol.php" method="POST">
            <div class="form-row text-success text-left">
              <div class="form-group col-md-4">
                <label class="text-secondary" for="inputDocumento">
                  <font COLOR="#f2f2f2" size="5">Tipo hoja</font>
                </label>
                <input type="text" class="form-control" id="inputhoja" name="inputhoja" value="<?php echo $nombre_a; ?>" readonly>
              </div>
              <div class="form-group col-md-8">
                <label class="text-secondary" for="inputNombre">
                  <font color="#F2F2F2" size="5">Nombre Completo</font>
                </label>
                <input type="text" class="form-control" id="inputNombre" name="inputnombre" value="<?php echo $d; ?>" readonly>
              </div>
            </div>
            <div class="form-row text-secondary text-left">
              <div class="form-group col-md-4">
                <label class="text-secondary" for="inputPerfil">
                  <font color="#F2F2F2" size="5">Tipo tronco</font>
                </label>
                <input type="text" class="form-control" id="inputtronco" name="inputtronco" value="<?php echo $nombre_b; ?>" readonly>
              </div>
              <div class="form-group col-md-4">
                <label class="text-secondary" for="inputfruto">
                  <font color="#F2F2F2" size="5">Fruto</font>
                </label>
                <input type="text" class="form-control" id="inputfruto" name="inputfruto" value="<?php echo $nombre_c; ?>" readonly>
              </div>
              <div class="form-group col-md-4">
                <label class="text-secondary" for="inputorigen">
                  <font color="#F2F2F2" size="5">Origen</font>
                </label>
                <input type="text" class="form-control" id="inputorigen" name="inputorigen" value="<?php echo $nombre_e; ?>" readonly></input>
              </div>
            </div>
            <div class="form-row text-secondary text-left">
              <div class="form-group col-md-6">
                <label class="text-secondary" for="inputsitio">
                  <font color="#F2F2F2" size="5">Sitio</font>
                </label>
                <input type="text" class="form-control" id="inputsitio" name="inputsitio" value="<?php echo $nombre_g; ?>" readonly>
              </div>
              <div class="form-group col-md-6">
                <label class="text-secondary" for="inputlink">
                  <font color="#F2F2F2" size="5">Link</font>
                </label>
                <input type="text" class="form-control" id="inputlink" name="inputlink" value="<?php echo $f; ?>" readonly>
              </div>

            </div>


            <div class="form-group col-md-12">
              <button type="submit" class="btn btn-block btn-lg" style="background-color: #ff7f3f">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" color="#f2f2f2" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z" />
                </svg>
                <font color="#f2f2f2"> Volver!</font>
              </button>
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