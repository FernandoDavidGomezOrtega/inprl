<section id="services">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Seleccione una opción</h3>
          <div class="section-title-divider"></div>
        </div>
      </div>

      <!-- //////////////////////////////////////// -->
  <?php if (isset($_SESSION['errorLogin'])) : ?>
  <div class="container" id ="">
  <div class="row ">
    <div class="col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-2 alert alert-danger text-center" role="alert">
      <p>Se ha producido un error al guardar el parte. Por favor vuelve a intentarlo</p>
    </div>
  </div>
  </div>
  <?php elseif (isset($_SESSION['errorLogin'])) : ?>
  <div class="container" id ="">
  <div class="row ">
    <div class="col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-2 alert alert-danger text-center" role="alert">
      <p>El parte ha sido guardado correctamente.</p>
      <p>Código de parte: </p>
    </div>
  </div>
  </div>
  <?php Utils::deleteSession('errorLogin'); endif; ?>
  <!-- //////////////////////////////////////// -->

      <div class="row">
        <div class="col-md-4 service-item">
          <div class="service-icon"><a href="<?= base_url ?>index.php?controller=parte&action=parteNuevo"><i class="fa fa-pencil-square-o"></i></a></div>
          <h4 class="service-title"><a href="<?= base_url ?>index.php?controller=parte&action=parteNuevo">Crear un nuevo parte</a></h4>
          <p class="service-description">Aquí puede dar de alta un nuevo parte de accidente y guardarlo en la base de datos.</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><a href="<?= base_url ?>index.php?controller=parte&action=seleccionarParteEditar"><i class="fa fa-list"></i></a></div>
          <h4 class="service-title"><a href="<?= base_url ?>index.php?controller=parte&action=seleccionarParteEditar">Modificar/Eliminar un parte</a></h4>
          <p class="service-description">Aquí puede seleccionar un parte para modificarlo o eliminarlo.</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><a href="<?= base_url ?>index.php?controller=parte&action=buscarPartesForm"><i class="fa fa-search"></i></a></div>
          <h4 class="service-title"><a href="<?= base_url ?>index.php?controller=parte&action=buscarPartesForm">Buscar partes</a></h4>
          <p class="service-description">Aquí puede consultar todos los partes introduciendo diferentes parámetros de búsqueda. <br>
            Solamente tiene acceso a sus partes.
          </p>
        </div>
        <div class="col-md-4 service-item">
        <div class="service-icon"><a href="<?= base_url ?>index.php?controller=parte&action=listAll"><i class="fa fa-database"></i></a></div>
          <h4 class="service-title"><a href="<?= base_url ?>index.php?controller=parte&action=listAll">Consultar todos los partes existentes</a></h4>
          <p class="service-description">Esta opción permite ver todos los partes existentes en la base de datos. <br>
          Ésta funcionalidad está pensada para poder comprobar los resultados de las búsquedas.
        </p>
        </div>
      </div>