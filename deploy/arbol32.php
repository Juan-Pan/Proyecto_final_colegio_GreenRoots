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
      background-image: url(banners/sendero1_ver.png);
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
  <title>Leucena</title>
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

  <div class="mb-12"></div>
  </div>
  <div class="row no-gutters">
    <div class="col-md-1">

    </div>
    <div class="col-md-6">
      <h1 align="left">Leucena
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
        <img src="imagenes/arbol32.jpg" alt="..." width="100%">
      </div>
      <br>


      <div class="col-md-7">
        <div class="card-body">
          <br>
          <br>
          <p class="card-text">
            <font color="#f2f2f2" size="5px">
              <b>Leucena
                <br>
                Nombre cientifico:</b>
              Leucaena leucocephala
              <br>
              <b>Origen</b>
              Exótica
            </font>
          </p>
          <p class="card-text" align="justify">
            <font color="#f2f2f2" size="4px">La leucaena puede superar los 5 metros de altura, con más de 24 especies variables de
              árboles y arbustos. Colombia disfruta de un clima favorable para el crecimiento de este
              silvopastoril (combinación de especies forestales o frutales y animales, sin la presencia de
              cultivos), uno de los más apreciados por los ganaderos por las múltiples bondades que
              ofrece.
              <br>
              Esta especie ha demostrado que tiene grandes bondades que son determinantes en el
              trabajo de sostenibilidad que viene haciendo Colombia para mitigar la producción de gases
              de efecto invernadero.
            </font>
          </p>
          <p class="card-text">
            <font color="#f2f2f2" size="5px"><b>Usos:</b></font>
          </p>
          <p class="card-text" align="justify">
            <font color="#f2f2f2" size="4px">Generalmente se utiliza en la forestación de lugares públicos de bajo mantenimiento o como
              grandes setos, más por función que por estética. Sin embargo, son muy comunes en las
              ciudades.
              <br>
              Se cultiva para su uso como abono verde y forraje (plantas que se cultivan con el fin de
              alimentar a los animales).
              <br>
              Sus semillas verdes son comestibles, aunque algo insípidas.
              <br>
              Las hojas y semillas contienen un aminoácido (mimosina) cuya ingesta en grandes
              cantidades puede producir daños en los mamíferos no rumiantes y aves de corral.
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