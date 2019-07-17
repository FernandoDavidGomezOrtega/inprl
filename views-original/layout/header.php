<!doctype html>
<html lang="es">

<head>
  <!-- Meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url ?>css/index.css">
  <link rel="shortout icon" type="image/ico" href="<?= base_url ?>favicon.ico">

  <title>Iniciar sesión</title>
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="74">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- Header -->
  <nav id="header" class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
      <!-- lleva al homepage si no hay sesion acitva -->
      <?php if (!isset($_SESSION['identity'])) : ?>
        <a class="navbar-brand title" href="<?= base_url ?>">
          <!-- lleva a insertDate si hay sesion activa-->
        <?php else : ?>
          <a class="navbar-brand title" href="<?= base_url ?>index.php?controller=hojaDiaria&action=initSessionVars">
          <?php endif; ?>

          <img class="mr-5" src="<?= base_url ?>assets/images/taxi.jpg" alt="taxi logo">
          CALCULOS DIARIOS HOJA DEL TAXI
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
          <!-- Navbar sin sesión activa -->
          <?php if (!isset($_SESSION['identity'])) :  ?>
            <ul class="navbar-nav ml-auto">
              <form class="" action="<?= base_url ?>usuario/signIn" method="post">
                <!-- <form class="" action="<?= base_url ?>index.php?controller=usuario&action=signIn" method="post"> -->
                <li class="nav-item">
                  <a class="nav-link btn btn-outline-success mr-5" href="<?= base_url ?>usuario/signIn">Iniciar Sesión</a>
                </li>
              </form>
              <li class="nav-item">
                <a class="nav-link btn btn-outline-primary" href="<?= base_url ?>usuario/signUp">Registrarse</a>
              </li>
            </ul>
          <?php endif; ?>

          <!-- Navbar con sesión activa -->
          <?php if (isset($_SESSION['identity'])) :  ?>
            <ul class="navbar-nav ml-auto">
              <li class="mt-2 mr-5 ">
                <p class="designed-by">Bienvenido/a, <b><?= $_SESSION['identity']->name ?></b></p>
              </li>
              <li class="nav-item">
                <div class="dropdown show">
                  <a class=" nav-link dropdown-toggle color_nav_link_item" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Consultar hojas
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="<?= base_url ?>index.php?controller=hojaDiaria&action=consultarHoja">Consultar por fecha</a>
                    <a class="dropdown-item" href="<?= base_url ?>index.php?controller=hojaDiaria&action=consultarMesHoja">Consultar por mes</a>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link color_nav_link_item" href="<?= base_url ?>index.php?controller=usuario&action=unsetSession">Cerrar sesión</a>
              </li>
            </ul>
          <?php endif; ?>

        </div>
    </div>
  </nav>
  <!-- /Header -->

  <!-- Main -->
  <main id="bienvenido" class="pt-4 pb-5">