 <!-- RESULTADOS DE LA BUSQUEDA -->


 <div class="container pt-3">
    <div class="row pt-2">
      <div class="col-8 offset-2 ">
        <!-- <h1 class="text-align-center sin-fondo">Relación de accidentes</h1>
            <h6 class="text-align-center sin-fondo">Criterios de búsqueda: <br><b> -->

        <?php
              if ($codParte !="") {
              ?>
        <div class="row pt-2 mt-2">
          <div class="col-8 offset-2 ">
            <h6 class="text-align-left sin-fondo"><b>Código de parte: </b><?=$codParte?></h6>
          </div>
        </div>
        <?php
              }
              ?>

        <?php
              if ($fechaAccidente !="") {
              ?>
        <div class="row pt-2 mt-2">
          <div class="col-8 offset-2 ">
            <h6 class="text-align-left sin-fondo"><b>Fecha del accidente: </b><?=$fechaAccidente?></h6>
          </div>
        </div>
        <?php
              }
              ?>

        <?php
              if ($dni !="") {
              ?>
        <div class="row pt-2 mt-2">
          <div class="col-8 offset-2 ">
            <!-- <h6 class="text-align-left sin-fondo"><b>Trabajador/a - DNI: </b><?=$nombreAMostrar?> - <?=$dni?></h6> -->
          </div>
        </div>
        <?php
              }
              ?>

        <?php
              if ($causaAccidente !="") {
              ?>
        <div class="row pt-2 mt-2">
          <div class="col-8 offset-2 ">
            <h6 class="text-align-left sin-fondo"><b>Causa del accidente: </b><?=$causaAccidente?></h6>
          </div>
        </div>
        <?php
              }
              ?>

        <?php
              if ($tipoLesion !="") {
              ?>
        <div class="row pt-2 mt-2">
          <div class="col-8 offset-2 ">
            <h6 class="text-align-left sin-fondo"><b>Tipo de lesión: </b><?=$tipoLesion?></h6>
          </div>
        </div>
        <?php
              }
              ?>

        <?php
              if ($partesLesionadas !="") {
              ?>
        <div class="row pt-2 mt-2">
          <div class="col-8 offset-2 ">
            <h6 class="text-align-left sin-fondo"><b>Partes del cuerpo lesionadas: </b><?=$partesLesionadas?></h6>
          </div>
        </div>
        <?php
              }
              ?>

        <?php
              if ($gravedad !="") {
              ?>
        <div class="row pt-2 mt-2">
          <div class="col-8 offset-2 ">
            <h6 class="text-align-left sin-fondo"><b>Gravedad: </b><?=$gravedad?></h6>
          </div>
        </div>
        <?php
              }
              ?>

        <?php
              if ($baja !="") {
              ?>
        <div class="row pt-2 mt-2">
          <div class="col-8 offset-2 ">
            <h6 class="text-align-left sin-fondo"><b>Ha causado baja: </b><?=$baja?></h6>
          </div>
        </div>
        <?php
              }
              ?>

        <!-- <?php
//Si la cantidad de partes encontrados es > 0 se indica la cantidad
              if ($cantidadResultados > 0) {
              ?>
              <div class="row pt-2 mt-2">
                <div class="col-8 offset-2 ">
                  <h6 class="text-align-left sin-fondo"><b>Cantidad de resultados: </b><?=$cantidadResultados?></h6>
                </div>
              </div>
              <?php
              }
              ?> -->



        </b></h6>
        <hr>
      </div>
    </div>

