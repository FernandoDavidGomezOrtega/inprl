<div class="container" id="mostrarResultados">

  <div class="row">
    <div class="col">
      <h1 class="section-title">Resultados de la búsqueda</h1>
      <div class="section-title-divider"></div>
      <!-- <p class="section-description">A continuación se muestran todos los partes coincidentes con los
        criterios de búsqueda
      </p> -->
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-sm-6 col-sm-push-3">
      <h3 class="text-center">Criterios especificados</h3>
      <table class="table table-hover">
        <tbody>
          <tr>
            <th scope="row">Administrador</th>
            <td><?=$_SESSION['identity']->login?></td>
          </tr>
          <?php if ($cod_parte != ""):?>
          <tr>
            <th scope="row">Código de parte</th>
            <td><?=$cod_parte?></td>
          </tr>
          <?php endif;?>
          <?php if ($fecha_accidente != ""):?>
          <tr>
            <th scope="row">Fecha del accidente</th>
            <td><?=$fecha_accidente?></td>
          </tr>
          <?php endif;?>
          <?php if ($dni != ""):?>
          <tr>
            <th scope="row">Trabajador</th>
            <td><?=$nombreDelTrabajador?></td>
          </tr>
          <?php endif;?>
          <?php if ($causa_accidente != ""):?>
          <tr>
            <th scope="row">Causa del accidente</th>
            <td><?=$causa_accidente?></td>
          </tr>
          <?php endif;?>

          <?php if ($tipo_lesion != ""):?>
          <tr>
            <th scope="row">Tipo de lesión</th>
            <td><?=$tipo_lesion?></td>
          </tr>
          <?php endif;?>

          <?php if ($partes_cuerpo_lesionado != ""):?>
          <tr>
            <th scope="row">Partes del cuerpo lesionadas</th>
            <td><?=$partes_cuerpo_lesionado?></td>
          </tr>
          <?php endif;?>

          <?php if ($gravedad != ""):?>
          <tr>
            <th scope="row">Gravedad</th>
            <td><?=$gravedad?></td>
          </tr>
          <?php endif;?>

          <?php if ($baja != ""):?>
          <tr>
            <th scope="row">Ha causado baja</th>
            <td><?=$baja?></td>
          </tr>
          <?php endif;?>

          <?php if ($search->num_rows > 0):?>
          <tr class="bg-03c5ec">
            <th scope="row">Resultados: </th>
            <td><?=$search->num_rows?></td>
          </tr>
          <?php endif;?>
        </tbody>
      </table>

    </div>
  </div>







  <?php if ($search->num_rows > 0) : ?>

  <?php while ($parte = $search->fetch_object()): ?>
  <div class="row pt-2 mt-2">
    <div class="col-8 offset-2 ">
      <h2 class="text-align-center sin-fondo">Parte de accidente</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-8 offset-2">
      <table class="table table-hover ">
        <tbody>
          <tr>
            <th scope="row">Código de parte</th>
            <td><?= $parte->cod_parte?></td>
          </tr>
          <tr>
            <th scope="row">Fecha del accidente</th>
            <td><?= $parte->fecha_accidente?></td>
          </tr>
          <tr>
            <th scope="row">DNI</th>
            <td>
              <?=$parte->dni?>
            </td>
          </tr>
          <tr>
            <th scope="row">Causa del accidente</th>
            <td><?= $parte->causa_accidente?></td>
          </tr>
          <tr>
            <th scope="row">Tipo de lesión</th>
            <td><?= $parte->tipo_lesion?></td>
          </tr>
          <tr>
            <th scope="row">Partes del cuerpo lesionadas</th>
            <td><?= $parte->partes_cuerpo_lesionado?></td>
          </tr>
          <tr>
            <th scope="row">Gravedad</th>
            <td><?= $parte->gravedad?></td>
          </tr>
          <tr>
            <th scope="row">Ha causado baja</th>
            <td><?= $parte->baja?></td>
          </tr>
        </tbody>
      </table>
      <div class="section-title-divider"></div>
    </div>
  </div>
  <?php endwhile; ?>

  <?php else : ?>
  <div class="container" id="">
    <div class="row ">
      <div class="col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-2 alert alert-danger text-center" role="alert">
        <p>Ningún parte coincide con los parámetros de búsqueda</p>
      </div>
    </div>
  </div>
  <?php endif; ?>




  <div class="row ">
    <div class="text-center mtc-30px mbc-30px">
      <a href="<?= base_url ?>index.php?controller=parte&action=buscarPartesForm" class="button-03C4EB">Nueva
        búsqueda</a>
      <br><br><br>
    </div>
  </div>