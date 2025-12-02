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
      background-image: url(banners/sendero_ver.png);
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
  <title>Matapalo</title>
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
      <h1 align="left">Matapalo
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
        <img src="imagenes/arbol46.jpg" alt="..." width="100%">
      </div>
      <br>


      <div class="col-md-7">
        <div class="card-body">
          <br>
          <br>
          <p class="card-text">
            <font color="#f2f2f2" size="5px">
              <b> Matapalo
                <br>
                Nombre cientifico:</b>
              Ficus Elastica
              <br>
              <b>Origen</b>
              Nativa
            </font>
          </p>
          <p class="card-text" align="justify">
            <font color="#f2f2f2" size="4px">
              Matapalo e higuerote nombre que reciben en América tropical en particular en Colombia,
              Venezuela, Costa Rica, Guatemala y El Salvador o árbol estrangulador, son los nombres
              vulgares de unas cuantas especies de árboles, debido a su hábito de crecimiento. Son
              especies cuyas semillas, germinadas sobre ramas de árboles tras ser transportadas por el
              viento o algún animal, comienzan su vida vegetativa como epífitas, aunque solo utilizan a su
              anfitrión como apoyo, no como sustento alimenticio. A medida que crecen desarrollan largas
              raíces aéreas que van abrazando el árbol en su camino hacia el suelo. Al cabo del tiempo,
              llegan a estrangular y matar al anfitrión en su intento por alcanzar la luz solar, bastante
              escasa en el piso inferior de la vegetación de la selva tropical que es su hábitat natural.
            </font>
          </p>
          <p class="card-text">
            <font color="#f2f2f2" size="5px"><b>Usos:</b></font>
          </p>
          <p class="card-text" align="justify">
            <font color="#f2f2f2" size="4px">
              El matapalo fue muy útil en la medicina, específicamente en las cortadas leves o graves,
              tronchaduras o aporreaduras; se cortaba la corteza del matapalo, esto se machacaba muy
              bien, luego se cocinaba, se colocaba un paño en la parte afectada y después se bebía
              hasta que la herida quedara sana.
              verrugas</font>
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