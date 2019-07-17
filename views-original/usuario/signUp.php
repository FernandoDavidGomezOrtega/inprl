
        <div class="container">
          <div class="row pt-2 mt-3 mb-3">
            <div class="col-8 offset-2 ">
              <h2 class="text-align-center sin-fondo">Crea tu cuenta</h2>
            </div>
          </div>

          <!-- Aviso de que el nombre de usuario ya existe -->
          <?php if(isset($_SESSION['register']) && $_SESSION['register'] =='failed') : ?>
              <div class="row centrado">
                <div class="alert alert-danger text-align-center" role="alert">
                  El nombre de usuario ya existe !!
                </div>
              </div>

          <?php Utils::deleteSession('register'); endif; ?>

           <!-- Aviso de error de conexión (con la base de datos) -->
              <?php
            //  if (isset($_COOKIE['errorConnection'])) {
                ?>
                <!-- <div class="row mb-3">
                  <div class="col-8 offset-2 ">
                    <div class="alert alert-danger text-align-center" role="alert">
                      Se ha producido un error de conexión, vuelva a intentar por favor
                    </div>
                    <h3 class=""></h3>
                  </div>
                </div> -->
              <?php
            //}
           ?>

           <!-- Formulario de registro de usuario -->
          <div class="row centrado">
            <div class="col col-md-10  col-lg-6 pt-2">
              <form action="<?=base_url?>index.php?controller=usuario&action=save" method="post" onSubmit="return validarPassword()">

                <div class="form-group col-12 col-md-6">
                  <label for="">Introduzca su nombre de usuario </label>
                  <input type="text" name="nombre" id="login" maxlength="20" value="" placeholder="" required="required" autofocus="autofocus">
                </div>

                <div class="form-group col-12 col-md-6">
                  <label for="">Introduzca contraseña </label>
                  <input type="password" name="password" id="loginPassword" maxlength="10" placeholder="" value="" required="required" >
                </div>

                <div class="form-group col-12 col-md-6">
                  <label for="">Repita la contraseña </label><br>
                  <input type="password" name="confirmarPassword" id="confirmarLoginPassword" maxlength="10" placeholder="" value="" required="required" >
                </div>

                <div class="form-row centrado">
                  <div class="col-6 pb-5 pt-3">
                    <button type="submit" class="btn btn-blue btn-block">Ok</button>
                  </div>
                </div>
              </form>
            </div>
          </div>



            <script type="text/javascript">
                // función para validar el formato de nombre, password y confirmacion de password
                  function validarPassword(){



                    var p1 = document.getElementById("loginPassword").value;
                    var p2 = document.getElementById("confirmarLoginPassword").value;
                    var userName = document.getElementById("login").value;
                    var htmlspecialchars = false;
                    var cont = 0;
                    var maxLenghtName = 20;
                    var maxLenghtPassword = 10;


                    var user = {
                      login: userName,
            password: p1,
            confirmarLoginPassword: p2
          }

          Object.keys(user).forEach(key => {
            cont = 0;
            console.log(user[key])

              while (!htmlspecialchars && (cont < user[key].length)) {
                if ((user[key].charAt(cont) == " ") || (user[key].charAt(cont) == "/") || (user[key].charAt(cont) == "\\")
                  || (user[key].charAt(cont) == "{") || (user[key].charAt(cont) == "}")  || (user[key].charAt(cont) == "(")
                  || (user[key].charAt(cont) == ")") || (user[key].charAt(cont) == "<") || (user[key].charAt(cont) == ">")
                  || (user[key].charAt(cont) == "'")  || (user[key].charAt(cont) == '"') || (user[key].charAt(cont) == '[')
                  || (user[key].charAt(cont) == '[') || (user[key].charAt(cont) == ',') || (user[key].charAt(cont) == '.')) {
                    htmlspecialchars = true;
                  }
                  console.log(user[key]);
                cont++;
              }

          })
          // return false;

            if (htmlspecialchars) {
              swal('', 'Los campos no pueden contener espacios en blanco,\nni los siguentes caracteres: / \\ { } ( ) [ ] < > \' , ." , .', 'error');
              return false;
            }

          // return false;

                    // Verificamos el formato de nombre
                    if (maxLenghtName < userName.length) {
                      // alert ("El nombre debe tener 20 caracteres como máximo");
                      // document.getElementById("login").focus();
                      swal('', 'El nombre debe tener 20 caracteres como máximo" , .', 'error');

                      return false;
                    }

                    // Verificamos el formato de password
                    var cont = 0;

                    if (maxLenghtPassword < p1.length) {
                      // alert ("La contraseña debe tener 10 caracteres como máximo");
                      // document.getElementById("loginPassword").focus();
                      swal('', 'La contraseña debe tener 10 caracteres como máximo', 'error');

                      return false;
                    }

                    // Verificamos que coincidan las contraseñas
                    if (p1 != p2) {
                      // alert ("Las contraseñas no coinciden");
                      // document.getElementById("loginPassword").focus();
                      swal('', 'Las contraseñas no coinciden', 'error');

                      return false;
                    }
                  }
                </script>
