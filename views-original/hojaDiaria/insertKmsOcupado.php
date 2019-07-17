        <div class="container">

          <div class="row pt-2 mt-4 centrado">
            <div class="col-lg-8">
              <h2 class="text-align-center sin-fondo">Kilómetros Ocupado</h2>
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
                  <label for="">Kilómetros Ocupado Fin Jornada</label>
                  <input type="number" class="form-control" placeholder="sólo números enteros" name="kmOcupadoFinJornada" id="kmOcupadoFinJornada" required="required" autofocus="autofocus">
                </div>

                <div class="form-group col-12 col-md-6 col-lg-6">
                  <label for="">Kilómetros Ocupado Inicio Jornada</label>
                  <input type="number" class="form-control" placeholder="sólo números enteros" name="kmOcupadoInicioJornada" id="kmOcupadoInicioJornada" required="required" >
                </div>

                <div class="form-row centrado">
                  <div class="col-4 col-lg-6  pt-3 mt-3 mb-5">
                    <button type="submit" class="btn btn-blue btn-block">Añadir Kilómetros Totales</button>
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
                <form class="" action="<?=base_url?>index.php?controller=hojaDiaria&action=addKmsOcupado"  method="post">
                  <div class="modal-body centrado">
                    <label for="">Kms totales Fin de Jornada  </label>
                    <input type="text" class="text-align-center ml-2" name="" id="codigo" value="" size="8"  readonly><span class="ml-2"> kms</span>
                    <input type="hidden" name="kmOcupadoFinJornada" value="" id="codigo1">
                  </div>
                  <div class="modal-body centrado">
                    <label for="">Kms totales Inicio de Jornada  </label>
                    <input type="text" class="text-align-center ml-2" name="" id="codigo2" value="" size="8"  readonly><span class="ml-2"> kms</span>
                    <input type="hidden" name="kmOcupadoInicioJornada" value="" id="codigo3">
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
                  var importe = document.getElementById("kmOcupadoFinJornada").value;
                  var htmlspecialchars = false;
                  var cont = 0;

                  while (!htmlspecialchars && (cont < importe.length)) {
                    if ((importe.charAt(cont) == " ") || (importe.charAt(cont) == "/") || (importe.charAt(cont) == "\\")
                      || (importe.charAt(cont) == "{") || (importe.charAt(cont) == "}")  || (importe.charAt(cont) == "(")
                      || (importe.charAt(cont) == ")") || (importe.charAt(cont) == "<") || (importe.charAt(cont) == ">")
                      || (importe.charAt(cont) == "'")  || (importe.charAt(cont) == '"') || (importe.charAt(cont) == '[')
                      || (importe.charAt(cont) == ']') || (importe.charAt(cont) == ',') || (importe.charAt(cont) == '-')
                      || (importe.charAt(cont) == '_') || (importe.charAt(cont) == '.'))
                      htmlspecialchars = true;
                    cont++;
                  }

                  if (htmlspecialchars) {
                    swal('', 'Solamente se admiten números enteros', 'error');
                    return false;
                  }

                  importe = document.getElementById("kmOcupadoInicioJornada").value;
                   htmlspecialchars = false;
                   cont = 0;

                  while (!htmlspecialchars && (cont < importe.length)) {
                    if ((importe.charAt(cont) == " ") || (importe.charAt(cont) == "/") || (importe.charAt(cont) == "\\")
                      || (importe.charAt(cont) == "{") || (importe.charAt(cont) == "}")  || (importe.charAt(cont) == "(")
                      || (importe.charAt(cont) == ")") || (importe.charAt(cont) == "<") || (importe.charAt(cont) == ">")
                      || (importe.charAt(cont) == "'")  || (importe.charAt(cont) == '"') || (importe.charAt(cont) == '[')
                      || (importe.charAt(cont) == ']') || (importe.charAt(cont) == ',') || (importe.charAt(cont) == '-')
                      || (importe.charAt(cont) == '_') || (importe.charAt(cont) == '.'))
                      htmlspecialchars = true;
                    cont++;
                  }

                  if (htmlspecialchars) {
                    swal('', 'Solamente se admiten números enteros', 'error');
                    return false;
                  }




          //Modal con el importe para poder verificar antes de enviar
                  $('#modal1').modal('show');
                  var valor = document.getElementById("kmOcupadoFinJornada").value;
                  document.getElementById("codigo").value=valor;
                  document.getElementById("codigo1").value=valor;

                  var valor1 = document.getElementById("kmOcupadoInicioJornada").value;
                  document.getElementById("codigo2").value=valor1;
                  document.getElementById("codigo3").value=valor1;
                  return false;
                }
                </script>
