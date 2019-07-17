<div class="container">
  <div class="row pt-3 centrado">
    <div class="col-8  ">
      <h2 class="text-align-center sin-fondo">Escoja una fecha</h2>
    </div>
  </div>

  <?php if(isset($_SESSION['error_hoja'])) : ?>
    <div class="row centrado">
      <div class="alert alert-danger text-align-center" role="alert">
        <?=$_SESSION['error_hoja']?>
      </div>
    </div>
    <?php Utils::deleteSession('error_hoja'); endif; ?>

    <div class="row centrado">
      <div class="col col-md-10  col-lg-6 pt-2">
        <form action="<?=base_url?>index.php?controller=hojaDiaria&action=consultarFechaHoja" method="post" >

          <div class="row centrado">
            <div class="form-group col-12 col-md-6 mt-3 ">
              <label for="">Fecha</label>
              <input type="date" class="form-control" value="" placeholder="fecha" name="fecha" id="fecha" required="required" autofocus="autofocus">
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
