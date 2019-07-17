<!-- Aviso de error en el registro de la hoja -->
<?php if(isset($_SESSION['save']) && $_SESSION['save'] =='failed') : ?>
  <div class="row centrado">
    <div class="alert alert-danger text-align-center" role="alert">
      Se ha producido un error. Inténtalo más tarde o contacta con el administrador
    </div>
  </div>

  <?php Utils::deleteSession('save'); endif; ?>

  <div class="container">
    <div class="row">
      <div class="col-8 mb-3 mt-3  offset-2">
        <h3 class="text-align-center sin-fondo">RESUMEN</h3>
        <h5 class="text-align-center sin-fondo">Fecha: <?=$_SESSION['fecha_hoja']?></h5>
      </div>
    </div>

    <div class="container ">
      <div class="row centrado">
        <div class="col-lg-8">
          <table class="table ">
            <thead>
              <tr>
                <th scope="col">Total bajadas de bandera</th>
                <th scope="col">Total recaudación</th>
                <th scope="col">Kilómetros totales</th>
                <th scope="col">Kilómetros ocupado</th>
              </tr>
            </thead>
            <tbody>
              <tr class="table-active">
                <td><?=$_SESSION['hojaTotalViajes']?></td>
                <td><?=$_SESSION['hojaTotalRecaudacion']?></td>
                <td><?=$_SESSION['hojaTotalKmTotales']?></td>
                <td><?=$_SESSION['hojaTotalKmOcupado']?></td>
              </tr>
            </tbody>
          </table>
          <hr >
        </div>
      </div>

      <div class="row centrado">
        <div class="col-lg-6">
          <table class="table">
            <tbody>
              <tr class="table-primary">
                <td>Recaudación</td>
                <td><?=$_SESSION['hojaTotalRecaudacion']?></td>
              </tr>
              <tr class="table-secondary">
                <td>Ajustes</td>
                <td><?=$_SESSION['ajustesDeRecaudacion']?></td>
              </tr>
              <tr class="table-success">
                <th scope="row">Recaudación final</th>
                <td><?=$_SESSION['hojaTotalRecaudacionAjustado']?></td>
              </tr>
            </tbody>
          </table>
          <hr>
        </div>
      </div>

      <div class="row centrado">
        <div class="col-lg-6">
          <table class="table">
            <tbody>
              <tr class="table-danger">
                <td>Visas</td>
                <td><?=$_SESSION['totalTarjetaBancaria']?></td>
              </tr>
              <tr class="table-warning">
                <td>Vales</td>
                <td><?=$_SESSION['totalValesMyTaxi']?></td>
              </tr>
              <tr class="table-info">
                <th scope="row">Conductor</th>
                <td><?=$_SESSION['utilidad']?></td>
              </tr>
              <tr class="table-secondary">
                <th scope="row">Efectivo para la empresa</th>
                <td><?=$_SESSION['hojaTotalEfectivoEntregar']?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="row centrado">
        <div class="col-lg-6 pb-5 pt-5">
          <a href="<?=base_url?>index.php?controller=hojaDiaria&action=initSessionVars" class="btn btn-danger col-lg-3 mr-lg-4 ml-lg-2 ">Cancelar</a>
          <a href="<?=base_url?>index.php?controller=hojaDiaria&action=save" class="btn btn-blue col-lg-8 ml-lg-1">Ok, guardar</a>
        </div>
      </div>
    </div>
