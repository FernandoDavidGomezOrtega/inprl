<?php

class HojaDiaria{
  private $id;
  private $users_id;
  private $fecha_hoja;
  private $ganancia_dia;
  private $gasoil_dia;

  private $db;

  //conexión db
  public function __construct(){
    $this->db = Database::connect();
  }

  function getId() {
      return $this->id;
  }

  function getUsers_id() {
      return $this->users_id;
  }

  function getFecha_hoja() {
      return $this->fecha_hoja;
  }

  function getGanancia_dia() {
      return $this->ganancia_dia;
  }

  function getGasoil_dia() {
      return $this->gasoil_dia;
  }

  function getDb() {
      return $this->db;
  }

  // function setId($id) {
  //     $this->id = $id;
  // }

  function setUsers_id($users_id) {
      $this->users_id = $users_id;
  }

  function setFecha_hoja($fecha_hoja) {
      $this->fecha_hoja = $fecha_hoja;
  }

  function setGanancia_dia($ganancia_dia) {
      $this->ganancia_dia = $ganancia_dia;
  }

  function setGasoil_dia($gasoil_dia) {
      $this->gasoil_dia = $gasoil_dia;
  }

  // function setDb($db) {
  //     $this->db = $db;
  // }

  function verifyFechaHoja(){

    // echo 'estamos aqui';
    // die();
    $result = false;
    $fecha_hoja = $this->fecha_hoja;
    $users_id = $this->users_id;

    $sql = 'select count(*) aux from hojadiaria where users_id=? and fecha_hoja=?';

    $stmt = $this->db->prepare($sql);
    $stmt->bind_param("ss",$users_id, $fecha_hoja);
    $stmt->execute();
    $stmt->bind_result($aux);
    $stmt->fetch();

    if($aux == 0){
      $result = true;
    }
    return $result;
  }

  public function save(){
    $sql = "INSERT INTO hojadiaria VALUES(NULL, '{$this->getUsers_id()}', '{$this->getFecha_hoja()}', '{$this->getGanancia_dia()}', '{$this->getGasoil_dia()}' )";

    $save = $this->db->query($sql);

    $result = false;
    if ($save) {
      $result = true;
    }
    return $result;
  }

  public function consultarHoja(){
    $result = false;
    $fecha = $this->fecha_hoja;
    $users_id = $this->users_id;
    //comprobar si existe el usuario
    $sql = "SELECT * FROM hojadiaria WHERE fecha_hoja = '$fecha' and users_id = '$users_id'";
    // var_dump($sql);
    // die();

    $hoja = $this->db->query($sql);

    // var_dump($hoja);
    // die();

    if ($hoja && $hoja->num_rows == 1) {
      $result = $hoja->fetch_object();

      // var_dump($result);
      // die();
    }

    return $result;
  }

  public function consultarMesHoja(){
    $result = false;
    $month = substr("$this->fecha_hoja", -2);
    $year = substr("$this->fecha_hoja", 0, 4);
    $users_id = $this->users_id;

    $sql = "SELECT * FROM hojadiaria WHERE MONTH(fecha_hoja) = '$month' and YEAR(fecha_hoja) = '$year' and users_id = '$users_id'";

    // var_dump($sql);
    // die();

    $consulta = $this->db->query($sql);

    // var_dump($consulta);
    // die();

    if ($consulta && $consulta->num_rows > 0) {
      $sql = "SELECT SUM(ganancia_dia) as suma FROM hojadiaria WHERE MONTH(fecha_hoja) = '06' and YEAR(fecha_hoja) = '2019' and users_id = '3';" ;

      $suma = $this->db->query($sql);
      $total = $suma->fetch_object();

      $suma_ganancia_dia = round($total->suma, 2, PHP_ROUND_HALF_UP);


      $sql = "SELECT SUM(gasoil_dia) as suma FROM hojadiaria WHERE MONTH(fecha_hoja) = '06' and YEAR(fecha_hoja) = '2019' and users_id = '3';" ;

      $suma = $this->db->query($sql);
      $total = $suma->fetch_object();

      $suma_gasoil_dia = round($total->suma, 2, PHP_ROUND_HALF_UP);
      // var_dump($suma_ganancia_dia);
      // var_dump($suma_gasoil_dia);
      // die();

      $result = [
        'ganancia_dia' => $suma_ganancia_dia,
        'gasoil_dia' => $suma_gasoil_dia
      ];

      // var_dump($array);
      // die();

      // var_dump($result);
      // die();
    }

    return $result;
  }
//SELECT * FROM hojadiaria WHERE MONTH(fecha_hoja) = '06' AND YEAR(fecha_hoja) = '2019'

}
