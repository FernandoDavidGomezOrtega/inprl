<section id="services">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Seleccione una opción</h3>
          <div class="section-title-divider"></div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 service-item">
          <div class="service-icon"><a href="<?= base_url ?>index.php?controller=parte&action=nuevo"><i class="fa fa-pencil-square-o"></i></a></div>
          <h4 class="service-title"><a href="<?= base_url ?>index.php?controller=parte&action=nuevo">Crear un nuevo parte</a></h4>
          <p class="service-description">Aquí puede dar de alta un nuevo parte de accidente y guardarlo en la base de datos.</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-list"></i></div>
          <h4 class="service-title"><a href="">Modificar un parte</a></h4>
          <p class="service-description">Aquí puede seleccionar un parte para modificarlo o eliminarlo.</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-search"></i></div>
          <h4 class="service-title"><a href="">Consultar partes</a></h4>
          <p class="service-description">Aquí puede consultar todos los partes introduciendo diferentes parámetros de búsqueda. <br>
            Solamente tiene acceso a sus partes.
          </p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-database"></i></div>
          <h4 class="service-title"><a href="">Consultar todos los partes existentes</a></h4>
          <p class="service-description">Esta opción permite ver todos los partes existentes en la base de datos. <br>
          Ésta funcionalidad está pensada para poder comprobar los resultados de las búsquedas.
        </p>
        </div>
      </div>