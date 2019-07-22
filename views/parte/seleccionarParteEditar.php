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
        <p>El parte ha sido editado correctamente</p>
      </div>
    </div>
  </div>
  <?php elseif (isset($_SESSION['save']) && isset($_SESSION['save']) == 'failed') : ?>
  <div class="container" id="">
  <div class="row ">
    <div class="col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-2 alert alert-danger text-center" role="alert">
      <p>Se ha producido un fallo en la conexión. Vuelve a intentarlo por favor.</p>
    </div>
  </div>
</div>
<?php endif; ?>
<?php Utils::deleteSession('save'); ?>


<!-- mensaje de exito o fallo en update -->
<?php if (isset($_SESSION['update']) && isset($_SESSION['update']) == 'complete') : ?>
<div class="container" id="">
  <div class="row ">
    <div class="col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-2 alert alert-success text-center" role="alert">
      <p>El parte ha sido actualizado correctamente</p>
    </div>
  </div>
</div>
<?php elseif (isset($_SESSION['update']) && isset($_SESSION['update']) == 'failed') : ?>
<div class="container" id="">
  <div class="row ">
    <div class="col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-2 alert alert-danger text-center" role="alert">
      <p>Se ha producido un fallo en la conexión. Vuelve a intentarlo por favor.</p>
    </div>
  </div>
</div>
<?php endif; ?>
<?php Utils::deleteSession('update'); ?>

<!-- mensaje de exito o fallo en delete -->
<?php if (isset($_SESSION['delete']) && isset($_SESSION['delete']) == 'complete') : ?>
<div class="container" id="">
  <div class="row ">
    <div class="col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-2 alert alert-success text-center" role="alert">
      <p>El parte ha sido eliminado correctamente</p>
    </div>
  </div>
</div>
<?php elseif (isset($_SESSION['delete']) && isset($_SESSION['delete']) == 'failed') : ?>
<div class="container" id="">
  <div class="row ">
    <div class="col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-2 alert alert-danger text-center" role="alert">
      <p>Se ha producido un fallo en la conexión. Vuelve a intentarlo por favor.</p>
    </div>
  </div>
</div>
<?php endif; ?>
<?php Utils::deleteSession('delete'); ?>

<!-- mensaje de parte no encontrado -->
<?php if (isset($_SESSION['parte_no_existe'])) : ?>
<div class="container" id="">
  <div class="row ">
    <div class="col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-2 alert alert-danger text-center" role="alert">
      <p>El parte indicado NO existe o pertenece a otro administrador.</p>
    </div>
  </div>
</div>
<?php endif; ?>
<?php Utils::deleteSession('parte_no_existe'); ?>


<div class="row">
  <div class="">
    <div class="form col-xs-8 col-xs-push-2 col-sm-4 col-sm-push-2" id="">
      <form action="<?= base_url ?>index.php?controller=parte&action=editar" method="post">

        <div class="form-group">
          <div class="form-group">
            <label for="">Introduzca un código de parte</label>
            <input type="number" class="form-control" name="cod_parte" value="" placeholder="Máximo 5 dígitos"
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
            <option value="<?=$parte->cod_parte;?>"><?=$parte->cod_parte;?></option>;

            <?php endwhile; ?>
          </select>
        </div>
        <div class="text-center"><button type="submit">Ok</button></div>




      </form>
    </div>
  </div>
<!-- </div> -->