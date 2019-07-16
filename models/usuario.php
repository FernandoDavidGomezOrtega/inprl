<?php

class Usuario{
  private $id;
  private $nombre;
  private $password;

  private $db;

  //conexión db
  public function __construct(){
    $this->db = Database::connect();
  }

  function getId() {
      return $this->id;
  }

  function getNombre() {
      return $this->nombre;
  }

  function getPassword() {
      return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
  }

  // function setId($id) {
  //     $this->id = $id;
  // }

  function setNombre($nombre) {
      $this->nombre = $this->db->real_escape_string($nombre);
  }

  function setPassword($password) {
      $this->password = $password;
  }


  public function save(){
    // $sql = "INSERT INTO users VALUES(NULL, 'tres', 'tres')";
    $sql = "INSERT INTO users VALUES(NULL, '{$this->getNombre()}', '{$this->getPassword()}' )";
//     $nombre = $this->getNombre();
//     $password = $this->getPassword();
//     var_dump($nombre);
// var_dump($password);

// $sql = "INSERT INTO users VALUES(NULL, 'cuatro', 'cuatro')";

    $save = $this->db->query($sql);

    $result = false;
    if ($save) {
      $result = true;
    }
    return $result;
  }

  public function verifyLogin(){
    $result = false;
    $nick = $this->nombre;
    $password = $this->password;

    // var_dump($password);
    // die();

    $sql = "SELECT * FROM users where name = '$nick'";
    $login = $this->db->query($sql);

    // echo $nick;
    // die();

    if ($login && $login->num_rows == 1) {
      // echo 'si entra';
      // die();

      $user = $login->fetch_object();
      // if ($user) {
      //   echo 'crea el objeto';
      //   die();
      // }
      //verificar la contraseña
      $verify = password_verify($password, $user->password);

      // var_dump($user->password);
      // die();

      if ($verify) {
        $result = $user;
      }
    }

    return $result;
  }

}
