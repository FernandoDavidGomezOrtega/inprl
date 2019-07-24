<div class="container" id="contact">
  <div class="row">
    <div class="col">
      <h3 class="section-title">Formulario para nuevo parte</h3>
      <div class="section-title-divider"></div>
    </div>
  </div>

  <?php if (isset($_SESSION['save']) && isset($_SESSION['save']) == 'complete') : ?>
  <div class="container" id="">
    <div class="row ">
      <div class="col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-2 alert alert-success text-center" role="alert">
        <p>El parte ha sido guardado correctamente. <br>
          El código es: <strong><?= $_SESSION['index'] ?></strong> 
      </p>
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
  <?php Utils::deleteSession('index'); ?>


  <div class="row">
    <div class="col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-2">
      <div class="form" id="">
        <form action="<?= base_url ?>index.php?controller=parte&action=save" method="post">

          <div class="form-group">
            <label for="">Fecha del accidente</label>
            <input type="date" class="form-control" placeholder="Fecha accidente" name="fecha_accidente" required
              autofocus>
          </div>

          <div class="form-group">
            <label for="">Trabajador/a</label>
            <select class="form-control" name="dni" required>
              <option selected="selected" value="" disabled>Elegir trabajador</option>

              <?php while($trabajador = $trabajadores->fetch_object()): ?>
              <option value="<?=$trabajador->dni;?>"><?=$trabajador->nombre_trabajador;?> || DNI: <?= $trabajador->dni ?></option>;

              <?php endwhile; ?>
            </select>
          </div>

          <div class="form-group">
            <label for="">Causa del accidente</label>
            <textarea class="form-control" name="causa_accidente" placeholder="100 caracteres máximo" rows="3"
              maxlength="100" required style="max-width: 100%"></textarea>
          </div>
          <div class="form-group">
            <label for="">Tipo de lesión</label>
            <textarea class="form-control" name="tipo_lesion" placeholder="60 caracteres máximo" rows="3" maxlength="60"
              required style="max-width: 100%"></textarea>
          </div>
          <div class="form-group">
            <label for="">Partes del cuerpo lesionadas</label>
            <textarea class="form-control" name="partes_cuerpo_lesionado" placeholder="60 caracteres máximo" rows="3"
              maxlength="60" required style="max-width: 100%"></textarea>
          </div>

          <div class="form-group">
            <label for="">Gravedad</label>
            <select class="form-control" name="gravedad" required>
              <option selected="selected" value="" disabled>Elegir</option>
              <option value="Baja">Baja</option>
              <option value="Normal">Normal</option>
              <option value="Alta">Alta</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">Causa Baja</label>
            <select class="form-control" name="baja" required>
              <option selected="selected" value="" disabled>Elegir</option>
              <option value="Sí">Sí</option>
              <option value="No">No</option>
            </select>
          </div>

          <div class="text-center"><button type="submit">Enviar</button></div>

        </form>
      </div>
    </div>
  </div>