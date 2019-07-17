
<div class="container">
  <div class="row pt-2 mt-3 mb-3">
    <div class="col-8 offset-2 ">
      <h2 class="text-align-center sin-fondo">Inicio de sesión</h2>
    </div>
  </div>


  <?php if(isset($_SESSION['errorLogin'])) : ?>
    <div class="row centrado">
      <div class="alert alert-danger text-align-center" role="alert">
        <?php echo $_SESSION['errorLogin'] ?>
      </div>
    </div>
    <?php Utils::deleteSession('errorLogin'); endif; ?>

    <?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete' ) : ?>
      <div class="row centrado">
        <div class="alert alert-success text-align-center" role="alert">
          Tu cuenta ha sido creada correctamente
        </div>
      </div>
      <?php Utils::deleteSession('register'); endif; ?>

      <div class="row centrado">
        <div class="col col-md-10  col-lg-6  pt-2">
          <!-- revisar por qué no funciona la dirección corta -->
          <!-- base_url usuario/verifyLogin (nombre del controlador y de la acción) -->
          <form action="<?=base_url?>index.php?controller=usuario&action=verifyLogin" method="post" onSubmit="return validarPassword()">

            <div class="form-group col-12 col-md-6">
              <label for="">Introduzca su nombre de usuario <b>(Fernando, Irene)</b></label>
              <input type="text" name="name" id="login" value="" maxlength="20" placeholder="Fernando, Irene" required="required" autofocus="autofocus">
            </div>

            <div class="form-group col-12 col-md-6">
              <label for="">Introduzca contraseña <b>(l)</b></label>
              <input type="password" name="password" id="loginPassword" maxlength="10" placeholder="l" value="" required="required" >
            </div>



            <div class="form-row centrado">
              <div class="col-6 col-lg-6  pb-5 pt-3">
                <button type="submit" class="btn btn-blue btn-block">Ok</button>

              </div>
            </div>
          </form>
        </div>
      </div>



      <script type="text/javascript">
      // función para validar el formato de nombre, password y confirmacion de password -->
      function validarPassword(){
        var p1 = document.getElementById("loginPassword").value;
        var userName = document.getElementById("login").value;
        var htmlspecialchars = false;
        var cont = 0;
        var maxLenghtName = 20;
        var maxLenghtPassword = 10;
        
        // Verificamos el formato de nombre -->
        if (maxLenghtName < userName.length) {
          swal('', 'El nombre debe tener 20 caracteres como máximo', 'error');
          document.getElementById("login").focus();
          return false;
        }

        while (!htmlspecialchars && (cont < userName.length)) {
          if ((userName.charAt(cont) == " ") || (userName.charAt(cont) == "/") || (userName.charAt(cont) == "\\")
          || (userName.charAt(cont) == "{") || (userName.charAt(cont) == "}")  || (userName.charAt(cont) == "(")
          || (userName.charAt(cont) == ")") || (userName.charAt(cont) == "<") || (userName.charAt(cont) == ">")
          || (userName.charAt(cont) == "'")  || (userName.charAt(cont) == '"') || (userName.charAt(cont) == '[')
          || (userName.charAt(cont) == '[') || (userName.charAt(cont) == ',') || (userName.charAt(cont) == '.'))
          htmlspecialchars = true;
          cont++;
        }

        if (htmlspecialchars) {
          swal('', 'Los campos no pueden contener espacios en blanco,\nni los siguentes caracteres: / \\ { } ( ) [ ] < > \' " , .', 'error');
          document.getElementById("login").focus();
          return false;
        }

        // Verificamos el formato de password-->
        var cont = 0;

        if (maxLenghtPassword < p1.length) {
          swal('', 'La contraseña debe tener 10 caracteres como máximo', 'error')
          document.getElementById("loginPassword").focus();
          return false;
        }

        while (!htmlspecialchars && (cont < p1.length)) {
          if ((p1.charAt(cont) == " ") || (p1.charAt(cont) == "/") || (p1.charAt(cont) == "\\")
          || (p1.charAt(cont) == "{") || (p1.charAt(cont) == "}")  || (p1.charAt(cont) == "(")
          || (p1.charAt(cont) == ")") || (p1.charAt(cont) == "<") || (p1.charAt(cont) == ">")
          || (p1.charAt(cont) == "'")  || (p1.charAt(cont) == '"') || (p1.charAt(cont) == '[')
          || (p1.charAt(cont) == ']') || (p1.charAt(cont) == ',') || (p1.charAt(cont) == '.'))
          htmlspecialchars = true;
          cont ++;
        }

        if (htmlspecialchars) {
          swal('', 'Los campos no pueden contener espacios en blanco,\nni los siguentes caracteres: / \\ { } ( ) [ ] < > \' " , .', 'error');
          document.getElementById("loginPassword").focus();
          return false;
        }
      }
      </script>
