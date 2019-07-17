      <?php if (isset($_SESSION['ganancia_dia_mes']) && isset($_SESSION['gasoil_dia_mes']) && isset($_SESSION['monthAndYear'])): ?>
        <div class="container">
          <div class="row">
            <div class="col-8 mb-3 mt-3  offset-2">
              <h3 class="text-align-center sin-fondo">CONSULTA DE MES</h3>
              <h5 class="text-align-center sin-fondo">Mes: <?=$_SESSION['monthAndYear']?></h5>
              <hr>
            </div>
          </div>

          <div class="container ">
        <div class="row centrado">
          <div class="col-lg-6">
            <table class="table">
              <tbody>
                <tr class="table-primary">
                  <td>Salario ya descontado el gasoil</td>
                  <td><?=$_SESSION['ganancia_dia_mes']?></td>
                </tr>
                <tr class="table-secondary">
                  <td>Gasto de gasoil</td>
                  <td><?=$_SESSION['gasoil_dia_mes']?></td>
                </tr>
              </tbody>
            </table>
            <?php
            Utils::deleteSession('ganancia_dia_mes');
                  Utils::deleteSession('gasoil_dia_mes');
                  Utils::deleteSession('monthAndYear');
            ?>
          </div>
        </div>
      <?php  else: header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=consultaMesHoja'); ?>

      <?php endif; ?>

    <div class="row centrado">
      <div class="col-lg-6 pb-5 pt-5">
        <a href="<?=base_url?>index.php?controller=hojaDiaria&action=initSessionVars" class="btn btn-warning col-lg-3 mr-lg-4 ml-lg-2 ">Nueva hoja</a>
        <a href="<?=base_url?>index.php?controller=hojaDiaria&action=consultaMesHoja" class="btn btn-primary col-lg-8 ml-lg-1">Nueva consulta</a>
      </div>
    </div>
  </div>
