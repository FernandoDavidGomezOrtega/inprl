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
  <div class="container" id ="">
  <div class="row ">
    <div class="col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-2 alert alert-danger text-center" role="alert">
      <?php echo $_SESSION['errorLogin'] ?>
    </div>
  </div>
  </div>
  <?php Utils::deleteSession('errorLogin'); endif; ?>

  <!-- <?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'complete') : ?>
  <div class="container" id ="">
  <div class="row ">
    <div class="alert alert-success text-center" role="alert">
      Tu cuenta ha sido creada correctamente
    </div>
  </div>
  </div>
  <?php Utils::deleteSession('register'); endif; ?> -->

  <!-- <section id="contact"> -->
  <div class="container ">

    <div class="row">
      <div class="col-xs-10 col-xs-push-1 col-sm-6 col-sm-push-3">
        <div class="form">
          <form action="<?=base_url?>index.php?controller=usuario&action=verifyLogin"
            onSubmit="return validarPassword()" method="post">
            <div class="form-group">
              <label for="login">Nombre de usuario</label>
              <input type="text" name="login" class="form-control" id="login" placeholder="admin-1, admin-2, admin-3"
                required autofocus />
            </div>
            <div class="form-group">
              <label for="password">Contraseña</label>
              <input type="password" class="form-control" name="loginPassword" id="loginPassword"
                placeholder="inprl-123" required />
            </div>
            <div class="text-center"><button type="submit">Entrar</button></div>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- </section> -->


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