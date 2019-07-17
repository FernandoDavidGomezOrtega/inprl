

  <div class="container ">

    <?php if (isset($_SESSION['hojaDiariaConsulta'])): ?>
      <div class="container">
        <div class="row">
          <div class="col-8 mb-3 mt-3  offset-2">
            <h3 class="text-align-center sin-fondo">CONSULTA DE HOJA</h3>
            <h5 class="text-align-center sin-fondo">Fecha: <?=$_SESSION['hojaDiariaConsulta']->fecha_hoja?></h5>
            <hr>
          </div>
        </div>
      <div class="row centrado">
        <div class="col-lg-6">
          <table class="table">
            <tbody>
              <tr class="table-primary">
                <td>Salario ya descontado el gasoil</td>
                <td><?=$_SESSION['hojaDiariaConsulta']->ganancia_dia?></td>
              </tr>
              <tr class="table-secondary">
                <td>Gasto de gasoil</td>
                <td><?=$_SESSION['hojaDiariaConsulta']->gasoil_dia?></td>
              </tr>
            </tbody>
          </table>
          <?php
          Utils::deleteSession('hojaDiariaConsulta');
          ?>
        </div>
      </div>
    <?php else: header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=consultarHoja'); ?>

    <?php endif; ?>

  <div class="row centrado">
    <div class="col-lg-6 pb-5 pt-5">
      <a href="<?=base_url?>index.php?controller=hojaDiaria&action=initSessionVars" class="btn btn-warning col-lg-3 mr-lg-4 ml-lg-2 ">Nueva hoja</a>
      <a href="<?=base_url?>index.php?controller=hojaDiaria&action=consultarHoja" class="btn btn-primary col-lg-8 ml-lg-1">Nueva consulta</a>
    </div>
  </div>
</div>
