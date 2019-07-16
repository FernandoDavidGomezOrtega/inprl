        <div class="container">

          <div class="row pt-2 mt-4 centrado">
            <div class="col-lg-8">
              <h2 class="text-align-center sin-fondo">Recaudación</h2>
            </div>
          </div>

          <?php if(isset($_SESSION['errorFormato'])) : ?>
              <div class="row centrado">
                <div class="alert alert-danger text-align-center" role="alert">
                  <?php echo $_SESSION['errorFormato'] ?>
                </div>
              </div>
          <?php Utils::deleteSession('errorFormato'); endif; ?>

          <div class="row centrado">
            <div class="col col-md-10  col-lg-8   pt-2">
              <form action="#" onsubmit="return modal1()" method="post">

                <div class="form-group col-12 col-md-6 col-lg-6">
                  <label for="">Recaudación Fin Jornada</label>
                  <input type="number" step="0.01" class="form-control" placeholder="" name="recaudacionFinJornada" id="recaudacionFinJornada" required="required" autofocus="autofocus">
                </div>

                <div class="form-group col-12 col-md-6 col-lg-6">
                  <label for="">Recaudación Inicio Jornada</label>
                  <input type="number" step="0.01" class="form-control" placeholder="" name="recaudacionInicioJornada" id="recaudacionInicioJornada" required="required" >
                </div>

                <div class="form-row centrado">
                  <div class="col-4 col-lg-6  pt-3 mt-3 mb-5">
                    <button type="submit" class="btn btn-blue btn-block">Añadir Recaudación</button>
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
                  <h5 class="modal-title" id="modalCenterTitle">Es correcto : </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form class="" action="<?=base_url?>index.php?controller=hojaDiaria&action=addRecaudacion"  method="post">
                  <div class="modal-body centrado">
                    <label for="">Recaudación Fin de Jornada</label>
                    <input type="text" class="text-align-center ml-2" name="" id="codigo" value="" size="8"  readonly><span class="ml-2"> €</span>
                    <input type="hidden" name="recaudacionFinJornada" value="" id="codigo1">
                  </div>
                  <div class="modal-body centrado">
                    <label for="">Recaudación Inicio de Jornada</label>
                    <input type="text" class="text-align-center ml-2" name="" id="codigo2" value="" size="8"  readonly><span class="ml-2"> €</span>
                    <input type="hidden" name="recaudacionInicioJornada" value="" id="codigo3">
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
                  var importe = document.getElementById("recaudacionFinJornada").value;
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

                  importe = document.getElementById("recaudacionInicioJornada").value;
                   htmlspecialchars = false;
                   cont = 0;

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
                  var valor = document.getElementById("recaudacionFinJornada").value;
                  document.getElementById("codigo").value=valor;
                  document.getElementById("codigo1").value=valor;

                  var valor1 = document.getElementById("recaudacionInicioJornada").value;
                  document.getElementById("codigo2").value=valor1;
                  document.getElementById("codigo3").value=valor1;
                  return false;
                }
                </script>
