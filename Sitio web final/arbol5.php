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
      background-image: url(banners/arbusto4_nar.png);
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
  <title>Guayacán de Manizales
  </title>
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
      <h1 align="left">Guayacán de Manizales
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
        <img src="imagenes/arbol5.1.jpg" alt="..." width="100%">
      </div>
      <br>


      <div class="col-md-7">
        <div class="card-body">
          <br>
          <br>
          <p class="card-text">
            <font color="#f2f2f2" size="5px">
              <b>Guayacán de Manizales
                <br>
                Nombre cientifico:</b>
              Lafoensia acuminata
              <br>
              <b>Origen</b>
              Nativa
            </font>
          </p>
          <p class="card-text" align="justify">
            <font color="#f2f2f2" size="4px">Árbol mediano, en las zonas frías puede sobrepasar los 20 m; originario de América, desde
              México hasta Bolivia.
              <br>
              <b>Tronco</b> Con tronco recto de 30 cm de diámetro y ramas extendidas; copa ovalada con follaje denso
              verde brillante.
              <br>
              <b>Hojas:</b> Las hojas son simples, opuestas, dispuestas en un solo plano; de color verde brillante, se
              tornan rojas al marchitarse.
              <br>
              <b>Flores:</b> Las flores son grandes y blancoamarillentas, con 6 pétalos blancos como rizados en el
              borde y 24 estambres muy largos de color crema.
              <br>
              <b>Frutos:</b> Los frutos son cápsulas globosas de 3 cm de diámetro, dehiscentes y con numerosas
              semillas aladas.
              <br>
              Es caducifolio (pierde sus hojas cada año) en períodos muy cortos y de crecimiento medio.
              No se recomienda para parqueaderos y se considera como opción para separadores viales.
            </font>
          </p>

          <p class="card-text">
            <font color="#f2f2f2" size="5px"><b>Usos:</b></font>
          </p>

          <p class="card-text" align="justify">
            <font color="#f2f2f2" size="4px">La madera dura, pesada y durable, se utiliza en la construcción, carpintería y para hacer
              objetos torneados.
              <br>
              Las hojas, flores y semillas al humedecerse desprenden un tinte cobrizo, puede manchar
              andenes y vehículos.
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