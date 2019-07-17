<div class="row centrado pt-2 mt-4">
  <div class="col-lg-8 ">
    <h2 class="text-align-center sin-fondo">Vale My Taxi</h2>
  </div>
</div>

<?php if(isset($_SESSION['errorFormato'])) : ?>
    <div class="row centrado">
      <div class="alert alert-danger text-align-center" role="alert">
        <?php echo $_SESSION['errorFormato'] ?>
      </div>
    </div>
<?php Utils::deleteSession('errorFormato'); endif; ?>


<?php if(isset($_SESSION['valeMyTaxi'])) :  ?>
    <div class="row centrado">
      <div class="alert alert-success text-align-center" role="alert">
        <h6 class="text-align-center sin-fondo">Vale ingresado correctamente</h6>
        <h6 class="text-align-center sin-fondo">Importe: <b><?= $_SESSION['valeMyTaxi']?></b> €</h6>
      </div>
    </div>
<?php Utils::deleteSession('valeMyTaxi'); endif; ?>

<div class="row centrado">
  <div class="col col-md-10  col-lg-6  pt-2">
    <form action="#" onsubmit="return modal1()" method="post">

      <div class="form-group col-12 col-md-6 col-lg-6">
        <label for="">Importe</label>
        <input type="number" step="0.01" class="form-control" maxlength="10" placeholder="" name="valeMyTaxi" id="valeMyTaxi" required="required" autofocus="autofocus">
      </div>

      <div class="form-row col-lg-12">
        <div class="col pb-5 pt-5  centrado">
          <button type="submit" class="btn btn-blue col-lg-5 mr-lg-4 "    >Añadir vale My Taxi</button>
          <a href="<?=base_url?>index.php?controller=hojaDiaria&action=insertTicketTarjeta" class="btn btn-success col-lg-5 ml-lg-4">No hay más vales</a>
        </div>
      </div>

    </form>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCenterTitle">Es correcto el importe: </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="<?=base_url?>index.php?controller=hojaDiaria&action=addValeMyTaxi"  method="post">
        <div class="modal-body centrado">
          <input type="text" class="text-align-center" name="" id="codigo" value="" size="8"  readonly><span class="ml-2"> €</span>
          <input type="hidden" name="valeMyTaxi" value="" id="codigo1">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal">No</button>
          <button type="submit" class="btn btn-primary">Sí, enviar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- /Modal -->



      <script type="text/javascript">
      function modal1() {

        // Verificamos el formato  -->
        var importe = document.getElementById("valeMyTaxi").value;
        var htmlspecialchars = false;
        var cont = 0;

        while (!htmlspecialchars && (cont < importe.length)) {
          if ((importe.charAt(cont) == " ") || (importe.charAt(cont) == "/") || (importe.charAt(cont) == "\\")
            || (importe.charAt(cont) == "{") || (importe.charAt(cont) == "}")  || (importe.charAt(cont) == "(")
            || (importe.charAt(cont) == ")") || (importe.charAt(cont) == "<") || (importe.charAt(cont) == ">")
            || (importe.charAt(cont) == "'")  || (importe.charAt(cont) == '"') || (importe.charAt(cont) == '[')
            || (importe.charAt(cont) == ']') || (importe.charAt(cont) == ',') || (importe.charAt(cont) == '-')
            || (importe.charAt(cont) == '_'))
            htmlspecialchars = true;
          cont++;
        }

        if (htmlspecialchars) {
          swal('', 'Los decimales deben estar separados con punto (.)', 'error');
          return false;
        }


//Modal con el importe para poder verificar antes de enviar
        $('#modal1').modal('show');
        var valor = document.getElementById("valeMyTaxi").value;
        document.getElementById("codigo").value=valor;
        document.getElementById("codigo1").value=valor;
        return false;
      }
      </script>
