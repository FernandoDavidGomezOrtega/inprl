<div class="container" id="contact">
  <div class="row">
    <div class="col">
      <h3 class="section-title">Modificar o eliminar un parte</h3>
      <div class="section-title-divider"></div>
    </div>
  </div>

  <?php if (isset($_SESSION['save']) && isset($_SESSION['save']) == 'complete') : ?>
  <div class="container" id="">
    <div class="row ">
      <div class="col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-2 alert alert-success text-center" role="alert">
        <p>El parte ha sido guardado correctamente</p>
      </div>
    </div>
  </div>
  <?php elseif (isset($_SESSION['save']) && isset($_SESSION['save']) == 'failed') : ?>
  <div class="row ">
    <div class="col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-2 alert alert-danger text-center" role="alert">
      <p>El parte NO ha podido ser guardado. Vuelve a intentarlo por favor.</p>
    </div>
  </div>
</div>
<?php endif; ?>
<?php Utils::deleteSession('save'); ?>


<div class="row">
  <div class="">
    <div class="form col-xs-8 col-xs-push-2 col-sm-4 col-sm-push-2" id="">
      <form action="<?= base_url ?>index.php?controller=parte&action=editar" method="post">

        <div class="form-group">
          <div class="form-group">
            <label for="">Introduzca un código de parte</label>
            <input type="text" class="form-control" name="cod_parte" value="" placeholder="Máximo 5 dígitos"
              maxlength="5" required="required"></textarea>
          </div>
          <div class="text-center"><button type="submit">Ok</button></div>
        </div>
      </form>
    </div>
    <div class="form col-xs-8 col-xs-push-2 col-sm-4 col-sm-push-2" id="">
      <form action="<?= base_url ?>index.php?controller=parte&action=editar" method="post">
        <div class="form-group">
          <label for="">O seleccione un parte de la lista</label>
          <select class="form-control" name="cod_parte" required>
            <option selected="selected" value="" disabled>Elegir parte</option>

            <?php while($parte = $partes->fetch_object()): ?>
            <!-- <option value="">tres</option>; -->
            <option value="<?=$parte->cod_parte;?>"><?=$parte->cod_parte;?></option>;

            <?php endwhile; ?>
          </select>
        </div>
        <div class="text-center"><button type="submit">Ok</button></div>




      </form>
    </div>
  </div>
</div>


