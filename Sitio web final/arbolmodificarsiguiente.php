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
    <?php include('php/navbaradmin.php') ?>
      <title>Modificar árbol</title>
      </head>

      <body>
        <?php
        require("funciones.php");  // Funciones escritas en PHP
        $documento_usuario = $_REQUEST['inputarbol'];

        $idCone = conexion();


        // Consultas SQL	

        // Consultar el usuario completamente

        $SQL1 = "SELECT arbol.*, hoja.id_hoja, hoja.tipo_hoja,
      tronco.id_tronco, tronco.id_tronco, fruto.id_fruto, fruto.fruto, origen.id_origen, origen.origen FROM arbol 			
			INNER JOIN hoja
			INNER JOIN tronco
      INNER JOIN fruto
      INNER JOIN origen
			WHERE sitio = '$documento_usuario'			
			AND arbol.id_hoja = hoja.id_hoja
      AND arbol.fruto = fruto.id_fruto
			AND arbol.id_tronco = tronco.id_tronco
      AND arbol.origen = origen.id_origen";

        $registro1 = mysqli_query($idCone, $SQL1);
        $registros_lectores = mysqli_num_rows($registro1);
        $fila1 = mysqli_fetch_row($registro1);



        $SQL2 = "SELECT * FROM tronco ORDER BY id_tronco ASC";
        $registro2 = mysqli_query($idCone, $SQL2);

        $SQL3 = "SELECT * FROM hoja ORDER BY id_hoja ASC";
        $registro3 = mysqli_query($idCone, $SQL3);

        $SQL4 = "SELECT * FROM fruto ORDER BY id_fruto ASC";
        $registro4 = mysqli_query($idCone, $SQL4);

        $SQL5 = "SELECT * FROM origen ORDER BY id_origen ASC";
        $registro5 = mysqli_query($idCone, $SQL5);

        $SQL6 = "SELECT * FROM sitio ORDER BY id_sitio ASC";
        $registro6 = mysqli_query($idCone, $SQL6);
        ?>

        <div class="container" style="background-color: #FF7F3F">
          <!-- Content here -->
          <div class="jumbotron" style="background-color: #272121">
            <h1 class="display-4 text-success">Modificar Árbol</h1>
            <form action="arbolmodificado.php" method="POST" enctype="multipart/form-data">
              <div class="form-row text-success text-left">
                <div class="form-group col-md-4">
                  <label class="text-success" for="inputarbol">ID</label>
                  <input type="text" class="form-control" id="inputarbol" name="inputarbol" value="<?php echo $documento_usuario; ?>" readonly>
                </div>
                <div class="form-group col-md-8">
                  <label class="text-success" for="inputNombre">Nombre</label>
                  <input type="text" class="form-control" id="inputNombre" name="inputNombre" value="">
                </div>
              </div>
              <div class="form-row text-success text-left">
                <div class="form-group col-md-4">
                  <label class="text-success" for="inputfruto">fruto</label>
                  <?php // Inicio código en PHP														
                  echo '<select required class="form-control"id="inputfruto" name="inputfruto">';

                  while ($fila = mysqli_fetch_array($registro4)) {
                    // IF para que no se repita la seleccion previa en la lista
                    if ($fila[0] <> $id_fruto)
                      echo "<option value='$fila[0]'>$fila[1]</option>";
                  }
                  ?>
                  <!-- Fin código en PHP -->
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label class="text-success" for="inputlink">Link</label>
                  <input type="text" class="form-control" id="inputlink" name="inputlink" value="">
                </div>
                <div class="form-group col-md-4">
                  <label class="text-success" for="inputhoja">Sitio</label>
                  <select required class="form-control" id="inputsitio" name="inputsitio">
                    <?php // Inicio código en PHP														


                    while ($fila = mysqli_fetch_array($registro6)) {
                      // IF para que no se repita la seleccion previa en la lista
                      if ($fila[0] <> $id_sitio) {
                        echo "<option value='$fila[0]'>$fila[1]</option>";
                      }
                    }
                    ?>
                    <!-- Fin código en PHP -->
                  </select>
                </div>
              </div>
              <div class="form-row text-success text-left">
                <div class="form-group col-md-4">
                  <label class="text-success" for="inputhoja">Hoja</label>
                  <?php // Inicio código en PHP														
                  echo '<select required class="form-control"id="inputhoja" name="inputhoja">';
                  echo "<option value='$id_hoja' selected>$tipo_hoja</option>";
                  while ($fila = mysqli_fetch_array($registro3)) {
                    // IF para que no se repita la seleccion previa en la lista
                    if ($fila[0] <> $id_hoja) {
                      echo "<option value='$fila[0]'>$fila[1]</option>";
                    }
                  }
                  ?>
                  <!-- Fin código en PHP -->
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label class="text-success" for="inputtronco">Tronco</label>
                  <?php // Inicio código en PHP							
                  echo '<select required class="form-control"id="inputtronco" name="inputtronco">';

                  while ($fila = mysqli_fetch_array($registro2)) {
                    // IF para que no se repita la seleccion previa en la lista
                    if ($fila[0] <> $id_tronco) {
                      echo "<option value='$fila[0]'>$fila[1]</option>";
                    }
                  }
                  ?>
                  <!-- Fin código en PHP -->
                  </select>
                </div>




                <div class="form-group col-md-4">
                  <label class="text-success" for="inputorigen">origen</label>
                  <select required class="form-control" id="inputorigen" name="inputorigen">
                    <?php // Inicio código en PHP							


                    while ($fila = mysqli_fetch_array($registro5)) {
                      // IF para que no se repita la seleccion previa en la lista
                      if ($fila[0] <> $origen) {
                        echo "<option value='$fila[0]'>$fila[1]</option>";
                      }
                    }
                    ?>
                  </select>
                </div>

                <button type="submit" class="btn btn-success btn-block btn-lg">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-save2" viewBox="0 0 16 16">
                    <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v4.5h2a.5.5 0 0 1 .354.854l-2.5 2.5a.5.5 0 0 1-.708 0l-2.5-2.5A.5.5 0 0 1 5.5 6.5h2V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z" />
                  </svg> Modificar Árbol
                </button>

              </div>

            </form>

          </div>
        </div>
        <?php
        mysqli_free_result($registro1);
        mysqli_free_result($registro2);
        mysqli_free_result($registro3);
        mysqli_free_result($registro4);
        mysqli_free_result($registro5);
        mysqli_free_result($registro6);
        mysqli_close($idCone);
        ?>
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