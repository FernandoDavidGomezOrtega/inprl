<section class="container" id="contact">
  <div class="container wow fadeInUp">
    <div class="row">
      <div class="col-md-12">
        <h3 class="section-title">Editar parte</h3>
        <div class="section-title-divider"></div>
      </div>
    </div>


      <div class="row">
        <div class="form col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-2">
          <form action="registrarModificacionParte.php" method="post">

            <div class="form-group ">
              <label for="">Código de accidente</label>
              <input type="text" class="form-control" readonly value="<?= $parte->cod_parte?>" name="cod_parte"
                required>
            </div>

            <div class="form-group ">
              <label for="">Fecha del accidente</label>
              <input type="date" class="form-control" value="<?= $parte->fecha_accidente?>"
                placeholder="Fecha accidente" name="Fecha_accidente" required>
            </div>

            <div class="form-group ">
              <label for="">Trabajador/a</label>
              <select class="form-control" name="dni" required>
                <option selected="selected" value="<?=$worker->dni?>" disabled>
                  <?=$worker->nombre_trabajador?></option>


                <?php while ($trabajador = $trabajadores->fetch_object()): ?>
                <!-- <option value="">tres</option>; -->
                <option value="<?=$trabajador->dni;?>"><?=$trabajador->nombre_trabajador;?></option>;

                <?php endwhile; ?>
              </select>
            </div>

            <div class="form-group ">
              <label for="">Causa del accidente</label>
              <textarea class="form-control" name="Causa_accidente" placeholder="100 caracteres máximo" rows="3"
                maxlength="100" required><?= $parte->causa_accidente?></textarea>
            </div>
            <div class="form-group ">
              <label for="">Tipo de lesión</label>
              <textarea class="form-control" name="Tipo_lesion" placeholder="60 caracteres máximo" rows="3"
                maxlength="60" required><?= $parte->tipo_lesion?></textarea>
            </div>
            <div class="form-group ">
              <label for="">Partes del cuerpo lesionadas</label>
              <textarea class="form-control" name="Partes_cuerpo_lesionado" placeholder="60 caracteres máximo" rows="3"
                maxlength="60" required><?= $parte->partes_cuerpo_lesionado?></textarea>
            </div>

            <div class="form-group ">
              <label for="">Gravedad</label>
              <select class="form-control" name="Gravedad" required>
                <option selected="selected" value="<?= $parte->gravedad?>" disabled><?= $parte->gravedad?>
                </option>
                <option value="Baja" >Baja</option>
                <option value="Normal" >Normal</option>
                <option value="Alta" >Alta</option>
              </select>
            </div>
            <div class="form-group ">
              <label for="">Causa Baja</label>
              <select class="form-control" name="Baja" required>
                <option selected="selected" value="<?= $parte->baja?>" disabled><?= $parte->baja?></option>
                <option  value="No" >No</option>
                <option  value="Sí" >Sí</option>
              </select>
            </div>

            <div class=" row margin-bottom-extra" id ="">
            <div class="text-center col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-2"><button type="submit" >Modificar</button><a href="deleteParte.php" class="red-button">Eliminar</a></div>
            <!-- <div class="text-center col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-2"><a href="deleteParte.php" class="red-button">Eliminar</a></div> -->
            </div>

                
          </form>
        </div>
      </div>
    <!-- ///////////////////////////////////// -->

