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
  <!-- Css -->
  <style>
    .header {
      background-image: url(Banners/arbusto1_nar.png);
      background-attachment: fixed;
      background-position: center;
      background-size: cover;
      position: relative;
      color: #f2f2f2;
      text-align: center;
      min-height: 50vh;
    }

    .header .navbar {
      background-color: transparent !important;
    }

    .logo img {
      width: 50px;
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

    H1 {
      margin-left: 10px;
    }

    h5 {
      margin-left: 10px
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

    div.sticky {
      background: #FF7F3F;
      padding: -5px 300px;
      transition: .5s;
      height: 90px !important;


    }

    div.sticky ul li a {
      color: #000 !important;
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

    p {
      margin-left: 8%;
      margin-right: 8%;
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
  <title>Clavellino</title>
</head>


<header class="header">
  <!-- navbar -->
  <?php
  include('php/navbar.php') ?>
  <!-- Fin navbar -->
  </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  <div class="mb-12"></div>
  </div>
  <div class="row no-gutters">
    <div class="col-md-1">

    </div>
    <div class="col-md-6">
      <h1 align="left">Clavellino
      </h1>
    </div>
    <div class="col-md-5">

    </div>
  </div>
  </div>
</header>


<body style="background-color:#272121">
  <br>
  <!-- carta -->
  <div class="mb-12" style="background-color: #A2CC3E">
    <div class="row no-gutters">
      <div class="col-md-5">
        <img src="imagenes/arbol2.jpg" alt="..." width="100%">
      </div>
      <br>


      <div class="col-md-7">
        <div class="card-body">
          <br>
          <br>
          <p class="card-text">
            <font color="#f2f2f2" size="5px">
              <b>Clavellino
                <br>
                Nombre cientifico:</b>
              Caesalpinia Pulcherrima
              <br>
              <b>Origen</b>
              Exótica
            </font>
          </p>
          <p class="card-text" align="justify">
            <font color="#f2f2f2" size="4px">Bigotillo (Caesalpinia pulcherrima) o Ponciana enana es endémica de los trópicos de
              América.
              <br>
              <b>Flores:</b> sus flores crecen a manera de racimos con pétalos de color amarillo. En México tiene mayor
              presencia en los ambientes húmedos tropicales. Es muy común en República Dominicana y
              en Colombia se conoce como Clavellino. Se utiliza principalmente con fines medicinales
              Caesalpinia pulcherrima es un arbusto o pequeño árbol de 3 m de altura.
              <br>
              <b>hojas:</b> Las hojas son bipinnadas, cada flor con 5 pétalos amarillos, anaranjados o rojos. Fruto
              legumbre de 6 a 12 cm de largo.
              <br>
              Es una llamativa planta ornamental, muy cultivada en jardines tropicales. Es la "Flor
              Nacional" de la isla caribeña de Barbados.
            </font>
          </p>

          <p class="card-text">
            <font color="#f2f2f2" size="5px"><b>Usos medicinales:</b></font>
          </p>
          <p class="card-text" align="justify">
            <font color="#f2f2f2" size="4px">Los chamanes del Amazonas lo han usado tradicionalmente; conocido como ayoowiri.
              <br>
              El jugo de sus hojas cura la fiebre.
              <br>
              El jugo de la flor se usa para dolores.
              <br>
              las semillas para tos, dificultades respiratorias, y dolor de pecho.
              <br>
              4 g de la raíz induce al aborto en el primer trimestre de embarazo.
            </font>
          </p>
        </div>

      </div>
    </div>
  </div>

  <!-- fin carta -->
  <script type="text/javascript">
    window.addEventListener("scroll", function() {
      var div = document.querySelector("div");
      div.classList.toggle("sticky", window.scrollY > 0);
    })
  </script>


  <!-- Footer -->
  <?php
  include('php/footer.php')
  ?>
  <!-- Footer -->



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>