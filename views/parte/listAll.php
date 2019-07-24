<div class="container" id="">

  <div class="row">
    <div class="col">
      <h1 class="section-title">Listado completo de partes</h1>
      <div class="section-title-divider"></div>
      <!-- <p class="section-description">A continuación se muestran todos los partes coincidentes con los
        criterios de búsqueda
      </p> -->
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
          <th scope="row">Trabajador/a - DNI</th>
          <td>
            <?=$parte->nombre_trabajador?> &nbsp;&nbsp; - &nbsp;&nbsp; <?=$parte->dni?>
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
<div class="row mb-3">
  <div class="col-8 offset-2 ">
    <h3 class="text-align-center">No existen partes registrados actualmente</h3>
  </div>
</div>
<?php endif; ?>