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
    <?php
  include('php/navbaradmin.php')
  ?>
      <title>Modificar árbol</title>
      <?php
      // Funciones escritas en PHP
      require("funciones.php");


      // Conexión a la Base de Datos
      $idCone = conexion();


      // Consulta SQL	

      $SQL = "SELECT id, nombre FROM arbol ORDER BY id ASC";
      $registro = mysqli_query($idCone, $SQL);
      $registros = mysqli_num_rows($registro);

      // Fin Consultas SQL	


      // Cerrar la conexión a la Base de Datos
      mysqli_close($idCone);
      ?>

      <div class="container" style="background-color: #FF7F3F">
        <!-- Content here -->
        <div class="jumbotron" style="background-color: #272121">
          <h1 class="display-4 text-success">
            <font color="#f2f2f2">Modificar árbol</font>
          </h1>
          <form action="arbolmodificarsiguiente.php" method="POST" enctype="multipart/form-data">
            <div class="form-row text-secondary text-left">
              <div class="form-group col-md-12">
                <label for="inputDocumento">Selecciona el árbol (*)</label>
                <h3 class="d-flex justify-content-center text-secondary" for="inputarbol">
                  <?php // Inicio código en PHP							
                  echo '<select required class="form-control" id="inputarbol" name="inputarbol" autofocus="autofocus">';
                  echo '<option selected disabled value="">Seleccione...</option>';
                  while ($fila = mysqli_fetch_array($registro)) {
                    echo "<option value='$fila[0]'>$fila[0] - $fila[1]</option>";
                  }
                  ?>
                  <!-- Fin código en PHP -->
                  </select>
                </h3>
              </div>
            </div>
            <button type="submit" class="btn btn-block btn-lg" style="background-color: #FF7F3F">
              <font color="#f2f2f2"> Siguiente</font>
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" color="#f2f2f2" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z" />
                <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z" />
              </svg>
            </button>
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