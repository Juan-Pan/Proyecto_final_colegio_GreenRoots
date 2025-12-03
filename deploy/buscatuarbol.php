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
      min-height: 40vh;

    }

    .header .navbar {
      background-color: transparent !important;
    }

    .logo img {
      width: 50px;

    }

    .card {
      margin: 0px;
      margin-left: 5px;
      width: 220px;
      height: 220px;
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

    .row {
      margin-left: 2%;
    }
  </style>
  <!-- fin css -->

  <title>Bienvenido</title>
</head>

<body style="background-color: #272121">
  <header class="header">
    <!-- navbar -->
    <?php
    include('php/navbar.php')
    ?>
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
    <!-- subtitulo -->
    <div class="mb-12"></div>
    </div>
    <div class="row no-gutters">
      <div class="col-md-1">

      </div>
      <div class="col-md-6">
        <h3 align="left" class="text-light">Busca tu árbol</h3>
      </div>
      <div class="col-md-5">

      </div>
    </div>
    </div>

  </header>


  <form>
    <h3 class="text-light text-center py-3">Tipo de tronco</h3>

    <div class="row justify-content-md-center container py-3">

      <!-- tronco -->
      <div class="col">
        <div class="form-check">
          <input type="radio" id="delgado" name="tronco" value="1">
          <label for="delgado" class="text-light"><h5>Delgado</h5></label>
          <div class="card " style="--i:url(imagenes/arbol21.1.jpg)">

          </div>
          </label>
        </div>
      </div>
      <div class="col">
        <!-- hoja peltada -->
        <div class="form-check">
          <input type="radio" id="grueso" name="tronco" value="2">
          <label for="grueso" class="text-light"><h5>Grueso</h5></label>
          <div class="card " style="--i:url(imagenes/arbol21.1.jpg)">

          </div>
          </label>
        </div>
      </div>
      <div class="col-md-3">
        <!-- hoja bipinnada -->
        <div class="form-check">
          <input type="radio" id="delgado-liso" name="tronco" value="3">
          <label for="delgado-liso" class="text-light"><h5>Delgado liso</h5> </label>
          <div class="card " style="--i:url(imagenes/arbol21.1.jpg)">

          </div>
          </label>
        </div>
      </div>
      <div class="col-md-3">
        <!-- hoja alterna -->
        <div class="form-check">
          <input type="radio" id="grueso-liso" name="tronco" value="4">
          <label for="grueso-liso" class="text-light"><h5>Grueso liso</h5></label>
          <div class="card " style="--i:url(imagenes/arbol21.1.jpg)">

          </div>
          </label>
        </div>
      </div>


    </div>


    <!-- hoja -->

    <hr>
    <h3 class="text-light text-center">Tipo de hoja</h3>
    <div>
      <div class="row justify-content-md-center container py-3">
        <!-- hoja eliptica -->
        <div class="col-md-3  py-3">
          <div class="form-check">
            <input type="radio" id="eliptica" name="hoja" value="1">
            <label for="eliptica" class="text-light"><h5>Eliptica</h5></label>
            <div class="card " style="--i:url(imagenes/arbol21.1.jpg)">

            </div>
            </label>
          </div>
        </div>
        <div class="col-md-3  py-3">
          <!-- hoja peltada -->
          <div class="form-check">
            <input type="radio" id="peltada" name="hoja" value="2">
            <label for="peltada" class="text-light"><h5>Peltada</h5></label>
            <div class="card " style="--i:url(imagenes/arbol21.1.jpg)">

            </div>
            </label>
          </div>
        </div>
        <div class="col-md-3  py-3">
          <!-- hoja bipinnada -->
          <div class="form-check">
            <input type="radio" id="bipinnada" name="hoja" value="3">
            <label for="bipinnada" class="text-light"><h5>Bipinnada</h5> </label>
            <div class="card " style="--i:url(imagenes/arbol21.1.jpg)">

            </div>
            </label>
          </div>
        </div>
        <div class="col-md-3  py-3">
          <!-- hoja alterna -->
          <div class="form-check">
            <input type="radio" id="alterna" name="hoja" value="4">
            <label for="alterna" class="text-light"><h5>Alterna</h5></label>
            <div class="card " style="--i:url(imagenes/arbol21.1.jpg)">

            </div>
            </label>
          </div>
        </div>
        <!-- hoja opuesta -->
        <div class="col-md-3  py-3">
          <div class="form-check">
            <input type="radio" id="opuesta" name="hoja" value="5">
            <label for="opuesta" class="text-light"><h5>Opuesta</h5></label>
            <div class="card " style="--i:url(imagenes/arbol21.1.jpg)">

            </div>
            </label>
          </div>
        </div>
        <div class="col-md-3  py-3">
          <!-- hoja pseudopeciolada -->
          <div class="form-check">
            <input type="radio" id="pseudopeciolada" name="hoja" value="6">
            <label for="pseudopeciolada" class="text-light"><h5>Pseudopeciolada</h5></label>
            <div class="card " style="--i:url(imagenes/arbol21.1.jpg)">

            </div>
            </label>
          </div>
        </div>
        <div class="col-md-3  py-3">
          <!-- hoja caulinares -->
          <div class="form-check">
            <input type="radio" id="caulinares" name="hoja" value="7">
            <label for="caulinares" class="text-light"><h5>Caulinares</h5>  </label>
            <div class="card " style="--i:url(imagenes/arbol21.1.jpg)">

            </div>
            </label>
          </div>
        </div>
        <div class="col-md-3  py-3">
          <!-- hoja lanceolada-lineal -->
          <div class="form-check">
            <input type="radio" id="lanceolada-lineal" name="hoja" value="8">
            <label for="lanceolada-lineal" class="text-light"><h5>Lanceolada-lineal</h5></label>
            <div class="card " style="--i:url(imagenes/arbol21.1.jpg)">

            </div>
            </label>
          </div>
        </div>
        <!-- hoja bifoliada -->
        <div class="col-md-3  py-3">
          <div class="form-check">
            <input type="radio" id="bifoliada" name="hoja" value="9">
            <label for="bifoliada" class="text-light"><h5>Bifoliada</h5> </label>
            <div class="card " style="--i:url(imagenes/arbol21.1.jpg)">

            </div>
            </label>
          </div>
        </div>
        <div class="col-md-3  py-3">
          <!-- hoja eliptica-obovada -->
          <div class="form-check">
            <input type="radio" id="eliptica-obovada" name="hoja" value="10">
            <label for="eliptica-obovada" class="text-light"><h5>Eliptica-obovada</h5></label>
            <div class="card " style="--i:url(imagenes/arbol21.1.jpg)">

            </div>
            </label>
          </div>
        </div>
        <div class="col-md-3  py-3">
          <!-- hoja eliptica-oblonga -->
          <div class="form-check">
            <input type="radio" id="eliptica-oblonga" name="hoja" value="11">
            <label for="eliptica-oblonga" class="text-light"><h5>Eliptica-oblonga</h5>  </label>
            <div class="card " style="--i:url(imagenes/arbol21.1.jpg)">

            </div>
            </label>
          </div>
        </div>
        <div class="col-md-3  py-3">
          <!-- hoja imparipinada -->
          <div class="form-check">
            <input type="radio" id="imparipinada" name="hoja" value="12">
            <label for="imparipinada" class="text-light"><h5>Imparipinada</h5></label>
            <div class="card " style="--i:url(imagenes/arbol21.1.jpg)">

            </div>
            </label>
          </div>
        </div>
        <!-- hoja lanceolada -->
        <div class="col-md-3  py-3">
          <div class="form-check">
            <input type="radio" id="lanceolada" name="hoja" value="13">
            <label for="lanceolada" class="text-light"><h5>Lanceolada</h5> </label>
            <div class="card " style="--i:url(imagenes/arbol21.1.jpg)">

            </div>
            </label>
          </div>
        </div>
        <!-- hoja pinnada -->
        <div class="col-md-3  py-3">
          <div class="form-check">
            <input type="radio" id="pinnada" name="hoja" value="14">
            <label for="pinnada" class="text-light"><h5>Pinnada</h5></label>
            <div class="card " style="--i:url(imagenes/arbol21.1.jpg)">

            </div>
            </label>
          </div>
        </div>
        <!-- hoja binnada -->
        <div class="col-md-3  py-3">
          <div class="form-check">
            <input type="radio" id="binnada" name="hoja" value="15">
            <label for="binnada" class="text-light"><h5>Binnada</h5></label>
            <div class="card " style="--i:url(imagenes/arbol21.1.jpg)">

            </div>
            </label>
          </div>
        </div>
      </div>

    </div>

    <!-- fruto -->
    </div>
    <hr>
    <h3 class="text-light text-center py-3">Fruto</h3>

    <div aling="center">
      <div class="row justify-content-md-center container ">
        <div class="col-md-4">

        </div>
        <div class="col-md-6">
          <div class="input-group mb-12">
            <div class="input-group-prepend">
              <label class="input-group-text" for="fruto">Fruto</label>
            </div>
            <select class="custom-select" id="fruto" name="fruto">
              <option selected disabled value="">Selecciona fruto</option>
              <option value="1">Si</option>
              <option value="2">No</option>
            </select>
          </div>
        </div>
        <div class="col-md-2">

        </div>
      </div>
      <!-- origen -->
      <div>
        <hr class="light">
        <h3 class="text-light text-center py-3">Origen</h3>

        <div aling="center">
          <div class="row justify-content-md-center container ">
            <div class="col-md-4">

            </div>
            <div class="col-md-6">
              <div class="input-group mb-12">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="origen">origen</label>
                </div>
                <select class="custom-select" id="origen" name="origen">
                  <option selected disabled value="">Selecciona un origen</option>
                  <option value="2">Nativa</option>
                  <option value="1">Exótica</option>
                </select>
              </div>
            </div>
            <div class="col-md-2">

            </div>
          </div>
          <!-- sitio -->
          <div>
            <hr class="light">
            <h3 class="text-light text-center py-3">Sitio</h3>

            <div aling="center">
              <div class="row justify-content-md-center container ">
                <div class="col-md-4">

                </div>
                <div class="col-md-6">
                  <div class="input-group mb-12">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="sitio">Sitio</label>
                    </div>
                    <select class="custom-select" id="sitio" name="sitio">
                      <option selected disabled value="">Selecciona un Sitio</option>
                      <option value="4">Entrada</option>
                      <option value="1">Patios</option>
                      <option value="3">Sendero</option>
                      <option value="5">Musica</option>
                      <option value="2">Biblioteca</option>

                    </select>
                  </div>
                </div>
                <div class="col-md-2">

                </div>
              </div>

              <!-- boton -->

              <div class="container py-2">
                <div class="row">
                  <div class="col-sm">

                  </div>
                  <div class="col-sm">
                    <input type="button" class=" btn-block btn-lg text-light" id="enviar" value="Buscar!" style="background-color: #FF7F3F">

                  </div>
                  <div class="col-sm">

                  </div>
                </div>
              </div>
  </form>

<!-- footer -->
  <?php
    include('php/footer.php')
    ?>
  <!-- Footer -->



  </div>
  </div>

  <!-- script -->
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
  <script src="js/sweetalert.js"></script>
  <script src="js/busquedaarbol.js"></script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>