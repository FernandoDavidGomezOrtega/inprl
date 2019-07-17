<!doctype html>
<html lang="es">
  <head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">

    <title>INSTITUTO NACIONAL DE PREVENCIÓN DE RIESGOS LABORALES</title>
  </head>
  <body data-spy="scroll" data-target="#navbar" data-offset="74">
    <!-- Header -->
    <nav id="header" class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="assets/images/shield.png" alt="INPRL logo">
          INSTITUTO NACIONAL DE PREVENCIÓN DE RIESGOS LABORALES
        </a>

        <?php
        session_start();
        if (isset($_SESSION['login'])) {
          ?>
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ml-auto">
              <li class="mt-2 mr-5">
                <p class="designed-by">Bienvenido, <b><?= $_SESSION['loginName'] ?></b></p>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="logout.php">Cerrar sesión</a>
              </li>
            </ul>
          </div>
          <?php
        }
        ?>
      </div>

    </nav>
    <!-- /Header -->

    <!-- Main -->
    <main id="bienvenido" class="pt-4 pb-5" >
      <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-pause="false">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="assets/images/industrial3.jpg" alt="Seguridad Industrial">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/images/taller.jpg" alt="Seguridad Taller">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/images/industrial4.jpg" alt="Seguridad Industrial">
          </div>
          <div class="overlay">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-md-6 offset-md-6 text-center text-md-right">
                  <h1>Instituto Nacional de Prevención de Riesgos Laborales</h1>
                  <p class="d-none d-md-block text-align-right">
                    Bienvenido/as al sitio web del Intituto Nacional<br> de Prevención de Riesgos Laborales.
                  </p>
                  <a href="inprl.php" class="btn btn-blue  mb-2">EL INPRL</a><br>
                  <a href="informacion_riesgos.html" class="btn btn-blue mt-2 mb-2">Información sobre riesgos</a><br>
                  <a href="loginN.php" class="btn btn-blue mt-2 mb-2 mr-3">Nuevo Parte</a>
                  <a href="loginM.php" class="btn btn-blue mt-2 mb-2 mr-3">Modificar Parte</a>
                  <a href="loginC.php" class="btn btn-blue mt-2 mb-2">Consulta de partes</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- /Main -->

    <!-- Footer -->
    <footer id="footer" class="pb-4 pt-4">
      <div class="container">
        <div class="row text-center">
          <div class="col-12 col-lg">
            <a href="inprl.php">El INPRL</a>
          </div>
          <div class="col-12 col-lg">
            <a href="inprl.php#contacto" target="_blank">Contáctanos</a>
          </div>
          <div class="col-12 col-lg">
            <a href="informacion_riesgos.html">Información sobre riesgos</a>
          </div>
        </div>
        <div class="row pt-4 ">
          <div class="col">
            <p class="designed-by">Designed by: Fernando Gómez <br>fgomezor@fp.uoc.edu</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- /Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="index.js"></script>
  </body>
</html>
