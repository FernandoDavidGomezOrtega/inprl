<section class="container" id="contact">
  <div class="container wow fadeInUp">
    <div class="row">
      <div class="col-md-12">
        <h3 class="section-title">Editar o eliminar parte</h3>
        <div class="section-title-divider"></div>
      </div>
    </div>


    <div class="row">
      <div class="form col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-2">
        <form action="<?= base_url ?>index.php?controller=parte&action=update" method="post">

          <div class="form-group ">
            <label for="">Código de accidente</label>
            <input type="text" class="form-control" readonly value="<?= $parte->cod_parte?>" name="cod_parte" required>
          </div>

          <div class="form-group ">
            <label for="">Fecha del accidente</label>
            <input type="date" class="form-control" value="<?= $parte->fecha_accidente?>" placeholder="Fecha accidente"
              name="fecha_accidente" required>
          </div>

          <div class="form-group ">
            <label for="">Trabajador/a</label>
            <select class="form-control" name="dni" required>

              <?php while ($trabajador = $trabajadores->fetch_object()): ?>
              <option value="<?= $trabajador->dni ?>"
                <?= $trabajador->dni == $worker->dni ? ' selected ' : ''; ?>>
                <?= $trabajador->nombre_trabajador ?>  || DNI: <?= $trabajador->dni ?>
              </option>
              <?php endwhile; ?>
            </select>
          </div>

          <div class="form-group ">
            <label for="">Causa del accidente</label>
            <textarea class="form-control" name="causa_accidente" placeholder="100 caracteres máximo" rows="3"
              maxlength="100" required><?= $parte->causa_accidente?></textarea>
          </div>
          <div class="form-group ">
            <label for="">Tipo de lesión</label>
            <textarea class="form-control" name="tipo_lesion" placeholder="60 caracteres máximo" rows="3" maxlength="60"
              required><?= $parte->tipo_lesion?></textarea>
          </div>
          <div class="form-group ">
            <label for="">Partes del cuerpo lesionadas</label>
            <textarea class="form-control" name="partes_cuerpo_lesionado" placeholder="60 caracteres máximo" rows="3"
              maxlength="60" required><?= $parte->partes_cuerpo_lesionado?></textarea>
          </div>

          <div class="form-group ">
            <label for="">Gravedad</label>
            <select class="form-control" name="gravedad" required>
              <option value="Baja" <?= $parte->gravedad == "Baja" ? ' selected ' : ''; ?>>Baja</option>
              <option value="Normal" <?= $parte->gravedad == "Normal" ? ' selected ' : ''; ?>>Normal</option>
              <option value="Alta" <?= $parte->gravedad == "Alta" ? ' selected ' : ''; ?>>Alta</option>
            </select>
          </div>
          <div class="form-group ">
            <label for="">Causa Baja</label>
            <select class="form-control" name="baja" required>
            <?php while ($trabajador = $trabajadores->fetch_object()): ?>
              <?php endwhile; ?>
              <option value="No" <?= $parte->baja == "No" ? ' selected ' : ''; ?>>No</option>
              <option value="Sí" <?= $parte->baja == "Sí" ? ' selected ' : ''; ?>>Sí</option>
            </select>
          </div>

          <div class=" row margin-bottom-extra" id="">
            <div class="text-center col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-2"><button
                type="submit">Modificar</button><a href="<?= base_url ?>index.php?controller=parte&action=delete&cod_parte=<?=$parte->cod_parte?>" class="red-button">Eliminar</a></div>
          </div>


        </form>
      </div>
    </div>
    <!-- ///////////////////////////////////// -->