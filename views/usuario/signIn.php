<div class="container " id="contact">
  <div class="row">
    <div class="col-md-12">
      <h3 class="section-title">Inicio de sesión</h3>
      <div class="section-title-divider"></div>
      <p class="section-description">Con el fin de que se pueda verificar el funcionamiento y las
        consultas a la base de datos, se facilitan los datos de login a los visitantes de ésta página.
        Existen 3 usuarios administradores y cada uno puede acceder únicamente a los partes ya creados para él
        o a los partes que cree en adelante.
      </p>
    </div>
  </div>


  <?php if (isset($_SESSION['errorLogin'])) : ?>
  <div class="row centrado">
    <div class="alert alert-danger text-align-center" role="alert">
      <?php echo $_SESSION['errorLogin'] ?>
    </div>
  </div>
  <?php Utils::deleteSession('errorLogin'); endif; ?>

  <?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'complete') : ?>
  <div class="row centrado">
    <div class="alert alert-success text-align-center" role="alert">
      Tu cuenta ha sido creada correctamente
    </div>
  </div>
  <?php Utils::deleteSession('register'); endif; ?>

  <!-- <section id="contact"> -->
    <div class="container ">

      <div class="row">
        <div class="col-md-6 col-md-push-3">
          <div class="form">
            <form action="<?=base_url?>index.php?controller=usuario&action=verifyLogin" onSubmit="return validarPassword()" method="post"  class="contactForm">
              <div class="form-group">
                <label for="login">Nombre de usuario</label>
                <input type="text" name="login" class="form-control" id="login" placeholder="admin1, admin2, admin3" required  autofocus/>
              </div>
              <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" name="loginPassword" id="loginPassword" placeholder="inprl-123" required  />
              </div>
              <div class="text-center"><button type="submit">Entrar</button></div>
            </form>
          </div>
        </div>

      </div>
    </div>
  <!-- </section> -->

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
  function validarPassword() {
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
      if ((userName.charAt(cont) == " ") || (userName.charAt(cont) == "/") || (userName.charAt(cont) == "\\") ||
        (userName.charAt(cont) == "{") || (userName.charAt(cont) == "}") || (userName.charAt(cont) == "(") ||
        (userName.charAt(cont) == ")") || (userName.charAt(cont) == "<") || (userName.charAt(cont) == ">") ||
        (userName.charAt(cont) == "'") || (userName.charAt(cont) == '"') || (userName.charAt(cont) == '[') ||
        (userName.charAt(cont) == '[') || (userName.charAt(cont) == ',') || (userName.charAt(cont) == '.'))
        htmlspecialchars = true;
      cont++;
    }

    if (htmlspecialchars) {
      swal('',
        'Los campos no pueden contener espacios en blanco,\nni los siguentes caracteres: / \\ { } ( ) [ ] < > \' " , .',
        'error');
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
      if ((p1.charAt(cont) == " ") || (p1.charAt(cont) == "/") || (p1.charAt(cont) == "\\") ||
        (p1.charAt(cont) == "{") || (p1.charAt(cont) == "}") || (p1.charAt(cont) == "(") ||
        (p1.charAt(cont) == ")") || (p1.charAt(cont) == "<") || (p1.charAt(cont) == ">") ||
        (p1.charAt(cont) == "'") || (p1.charAt(cont) == '"') || (p1.charAt(cont) == '[') ||
        (p1.charAt(cont) == ']') || (p1.charAt(cont) == ',') || (p1.charAt(cont) == '.'))
        htmlspecialchars = true;
      cont++;
    }

    if (htmlspecialchars) {
      swal('',
        'Los campos no pueden contener espacios en blanco,\nni los siguentes caracteres: / \\ { } ( ) [ ] < > \' " , .',
        'error');
      document.getElementById("loginPassword").focus();
      return false;
    }
  }
  </script>