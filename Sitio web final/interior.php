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
      background-image: url(banners/patio_nar.png);
      background-attachment: fixed;
      background-position: center;
      background-size: cover;
      position: relative;
      color: #f2f2f2;
      text-align: center;
      min-height: 60vh;

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

    .p {
      margin-left: 10px;
      margin-right: 10px;
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
  </style>
  <!-- fin css -->

  <title>Patios</title>
</head>

<body style="background-color: #272121">
  <header class="header">
    <!-- navbar -->
    <?php
  include('php/navbar.php') ?>
  <!-- fin navbar -->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="jumbotron jumbotron-md bg-transparent">
      <div class="container">
        <h1>PATIOS</h1>
      </div>
    </div>
  </header>

  <!-- Fin navbar -->
  <br>
  <!-- cartas -->
  <div class="container-fluid">
    <div class="row justify-content-md-center">
      <div class="card " style="--i:url(imagenes/arbol12.jpg)">
        <div class="content">
          <h2>Hayuelo</h2>
          <a href="arbol12.php" class="btn" style="background-color: #FF7F3F">
            <font color="f2f2f2">Ver Detalles</font>
          </a>
        </div>
      </div>

      <div class="card " style="--i:url(imagenes/arbol13.jpg)">
        <div class="content">
          <h2>Palma Real</h2>
          <a href="arbol13.php" class="btn" style="background-color: #FF7F3F">
            <font color="f2f2f2">Ver Detalles</font>
          </a>
        </div>
      </div>

      <div class="card " style="--i:url(imagenes/arbol14.jpg)">
        <div class="content">
          <h2>Mango</h2>
          <a href="arbol14.php" class="btn" style="background-color: #FF7F3F">
            <font color="f2f2f2">Ver Detalles</font>
          </a>
        </div>
      </div>

      <div class="card " style="--i:url(imagenes/arbol10.jpg)">
        <div class="content">
          <h2>Guaduilla</h2>
          <a href="arbol10.php" class="btn" style="background-color: #FF7F3F">
            <font color="f2f2f2">Ver Detalles</font>
          </a>
        </div>
      </div>

      <div class="card " style="--i:url(imagenes/arbol11.jpg)">
        <div class="content">
          <h2>Guadua</h2>
          <a href="arbol11.php" class="btn" style="background-color: #FF7F3F">
            <font color="f2f2f2">Ver Detalles</font>
          </a>
        </div>
      </div>
    </div>

  </div>
  </div>
  <!-- Fin cartas  -->

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