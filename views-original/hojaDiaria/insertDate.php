<?php if(isset($_SESSION['save'])) : ?>
  <div class="row centrado">
    <div class="alert alert-success text-align-center" role="alert">
      La hoja ha sido registrada correctamente. Puedes iniciar otra.
    </div>
  </div>
  <?php Utils::deleteSession('save'); endif; ?>


  <div class="container">
    <div class="row mt-2 mb-2 centrado">
      <div class="col-8  ">
        <h2 class="text-align-center sin-fondo">NUEVA HOJA</h2>
        <hr>
        <h2 class="text-align-center sin-fondo">Definir fecha</h2>
      </div>
    </div>
    <?php if(isset($_SESSION['errorFecha'])) : ?>
      <div class="row centrado">
        <div class="alert alert-danger text-align-center" role="alert">
          <?php echo $_SESSION['errorFecha'] ?>
        </div>
      </div>

      <?php Utils::deleteSession('errorFecha'); endif;  ?>

      <div class="row centrado">
        <div class="col col-md-10  col-lg-6 pt-2">
          <form action="<?=base_url?>index.php?controller=hojaDiaria&action=verifyFechaHoja" method="post" >

            <div class="form-group col-12 col-md-6 mt-3">
              <label for="">Fecha</label>
              <input type="date" class="form-control" value="" placeholder="fecha" name="fecha" id="fecha" required="required" autofocus="autofocus">
            </div>

            <div class="form-row centrado">
              <div class="col-4 col-lg-6   pb-5 pt-3 mt-3 mb-5">
                <button type="submit" class="btn btn-blue btn-block" >Enviar</button>
              </div>
            </div>

          </form>
        </div>
      </div>
