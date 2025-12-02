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

  <title>Bienvenido</title>
</head>

<body style="background-color: #272121">
  <header class="header">
    <!-- navbar -->
    <?php include('php/navbaradmin.php') ?>
    <!-- fin navbar -->


    <title>Inicio</title>
    </head>

    <body>
      <div class="container" style="background-color: #FF7F3F">
        <!-- Content here -->
        <div class="jumbotron" style="background-color: #272121">
          <h1 class="display-4" align="center">
            <font color="#f2f2f2">Crear árbol</font>
          </h1>
          <form action="destino.php" method="POST">
            <div class="form-row text-success text-left">
              <div class="form-group col-md-4">
                <label class="text-secondary" for="inputhoja">
                  <font color="#f2f2f2" size="5">Tipo hoja </font>
                </label>
                <select class="form-control" aria-label="Default select example" id="inputhoja" name="inputhoja" required>
                  <option selected disabled value>Escoge...</option>
                  <option value="1">Eliptica</option>
                  <option value="2">Peltada</option>
                  <option value="3">Bipinnada</option>
                  <option value="4">Alterna</option>
                  <option value="5">Opuesta</option>
                  <option value="6">Pseudopeciolada</option>
                  <option value="7">Caulinares</option>
                  <option value="8">Lanceolada-lineal</option>
                  <option value="9">Bifoliada</option>
                  <option value="10">Eliptica-obovada</option>
                  <option value="11">Eliptica-oblonga</option>
                  <option value="12">Imparipinada</option>
                  <option value="13">Lanceolada</option>
                  <option value="14">Pinnada</option>
                  <option value="15">Binnada</option>
                </select>
              </div>
              <div class="form-group col-md-8">
                <label class="text-secondary" for="inputnombre">
                  <font color="#f2f2f2" size="5">Nombre árbol</font>
                </label>
                <input type="text" class="form-control" id="inputnombre" name="inputnombre" placeholder="Ingresa campo" required>
              </div>
            </div>
            <div class="form-row text-success text-left">
              <div class="form-group col-md-4">
                <label class="text-secondary" for="inputtronco">
                  <font color="#f2f2f2" size="5">Tipo tronco </font>
                </label>
                <select class="form-control" aria-label="Default select example" id="inputtronco" name="inputtronco" required>
                  <option selected disabled value>Escoge...</option>
                  <option value="1">Delgado</option>
                  <option value="2">Grueso</option>
                  <option value="3">Delgado-liso</option>
                  <option value="4">Grueso-liso</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label class="text-secondary" for="inputfruto">
                  <font color="#f2f2f2" size="5">Fruto</font>
                </label>
                <select class="form-control" aria-label="Default select example" id="inputfruto" name="inputfruto" required>
                  <option selected disabled value>Escoge...</option>
                  <option value="1">Si</option>
                  <option value="2">No</option>
                </select>


              </div>
              <div class="form-group col-md-4">
                <label class="text-secondary" for="inputorigen">
                  <font color="#f2f2f2" size="5">Origen</font>
                </label>
                <select class="form-control" aria-label="Default select example" id="inputorigen" name="inputorigen" required>
                  <option selected disabled value>Escoge...</option>
                  <option value="1">Exótica</option>
                  <option value="2">Nativa</option>
                </select>
              </div>
            </div>
            <div class="form-row text-success text-left">
              <div class="form-group col-md-6">
                <label class="text-secondary" for="inputsitio">
                  <font color="#f2f2f2" size="5">Sitio</font>
                </label>
                <select class="form-control" aria-label="Default select example" id="inputsito" name="inputsitio" required>
                  <option selected disabled value>Escoge...</option>
                  <option value="1">Patios </option>
                  <option value="2">Biblioteca</option>
                  <option value="3">Sendero</option>
                  <option value="4">Entrada</option>
                  <option value="5">Música</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label class="text-secondary" for="inputlink">
                  <font color="#f2f2f2" size="5">Link</font>
                </label>
                <input type="text" class="form-control" id="inputlink" name="inputlink" placeholder="Ingresa campo" required>
              </div>
            </div>
            <div class="form-row text-success text-left">
              <div class="form-group col-md-6">
                <button type="submit" class="btn btn-block " style="background-color: #FF7F3F">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" color="#f2f2f2" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                  </svg>
                  <font color="#f2f2f2" size="4px">Enviar!</font>
                </button>
              </div>
              <div class="form-group col-md-6">
                <button type="reset" class="btn btn-block " style="background-color: #FF7F3F">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" color="#f2f2f2" class="bi bi-file-earmark-x" viewBox="0 0 16 16">
                    <path d="M6.854 7.146a.5.5 0 1 0-.708.708L7.293 9l-1.147 1.146a.5.5 0 0 0 .708.708L8 9.707l1.146 1.147a.5.5 0 0 0 .708-.708L8.707 9l1.147-1.146a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146z" />
                    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                  </svg>
                  <font color="#f2f2f2" size="4px">Eliminar!</font>
                </button>
              </div>
            </div>
        </div>
        </form>
      </div>

      <script type="text/javascript">
        window.addEventListener("scroll", function() {
          var div = document.querySelector("div");
          div.classList.toggle("sticky", window.scrollY > 0);
        })
      </script>


      </div>
      <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.js"></script>
    </body>

</html>