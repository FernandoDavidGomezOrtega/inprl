<div class="container">
  <div class="row pt-3 centrado">
    <div class="col-8  ">
      <h2 class="text-align-center sin-fondo">Escoja una mes</h2>
    </div>
  </div>

  <?php if(isset($_SESSION['error_hoja'])) : ?>
    <div class="row centrado">
      <div class="alert alert-danger text-align-center" role="alert">
        <?=$_SESSION['error_hoja']?>
      </div>
    </div>
    <?php Utils::deleteSession('error_hoja'); endif; ?>

    <?php
    if (isset($_SESSION['ganancia_dia_mes']) && isset($_SESSION['gasoil_dia_mes']) && isset($_SESSION['mes']) ) {
      Utils::deleteSession('ganancia_dia_mes');
      Utils::deleteSession('gasoil_dia_mes');
      Utils::deleteSession('mes');
    }
    ?>

    <div class="row centrado">
      <div class="col col-md-10  col-lg-6 pt-2">
        <form action="<?=base_url?>index.php?controller=hojaDiaria&action=consultaMesHoja" method="post" >

          <div class="row centrado">
            <div class="form-group col-12 col-md-6 mt-3 ">
              <label for="">Mes y año</label>
              <input type="month" class="form-control" value="" name="mes" id="mes" required autofocus>
            </div>
          </div>

          <div class="form-row centrado">
            <div class="col-4 col-lg-6   mt-5 mb-5">
              <button type="submit" class="btn btn-blue btn-block" >Consultar</button>
            </div>
          </div>

        </form>
      </div>
    </div>
