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
      background-image: url(about2.png);
      background-attachment: fixed;
      background-position: center;
      background-size: cover;
      position: relative;
      color: #f2f2f2;
      text-align: center;
      min-height: 80vh;
    }

    .header .navbar {
      background-color: transparent !important;
    }

    .logo img {
      width: 50px;
    }

    H1 {
      margin-left: 10px;
    }

    h5 {
      margin-left: 10px
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
  <title>Acerca de</title>
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
      <h5 align="left">Equipo GreenRoots
      </h5>
    </div>
    <div class="col-md-5">

    </div>
  </div>
  </div>
  <br>
  <div class="mb-12"></div>
  </div>
  <div class="row no-gutters">
    <div class="col-md-1">
    </div>
    <div class="col-md-6">
      <h1 align="left">Generamos Concientización y sensibilización ambiental en el espacio
        educativo promoviendo el uso de herramientas digitales
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
        <img src="imagenes/mariposa.jpg" alt="..." width="100%">
      </div>

      <div class="col-md-7">
        <div class="card-body">
          <br>
          <br>
          <br>
          <br>
          <p class="card-text" align="center">
            <font color="#f2f2f2" size="5px">
              El equipo Green Roots pretende que las personas que naveguen en este sitio, se puedan informar y adquirir conocimientos sobre la arboleda que rodea el Instituto Técnico superior. Pero no solo eso, cualquiera que entre a este sitio puede encontrar informacíon valiosa de árboles que hayan visto en su día a día. </font>
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


  <?php
  include('php/footer.php')
  ?>



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