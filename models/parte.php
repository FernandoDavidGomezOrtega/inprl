<?php

class Parte{
  private $cod_parte;
  private $dni;
  private $login;
  private $fecha_accidente;
  private $causa_accidente;
  private $tipo_lesion;
  private $partes_cuerpo_lesionado;
  private $gravedad;
  private $baja;

  private $db;

  public function __construct(){
    $this->db = Database::connect();
  }


  /**
   * Get the value of cod_parte
   */ 
  public function getCod_parte()
  {
    return $this->cod_parte;
  }

  /**
   * Set the value of cod_parte
   *
   * @return  self
   */ 
  public function setCod_parte($cod_parte)
  {
    $this->cod_parte = $cod_parte;

    return $this;
  }

  /**
   * Get the value of dni
   */ 
  public function getDni()
  {
    return $this->dni;
  }

  /**
   * Set the value of dni
   *
   * @return  self
   */ 
  public function setDni($dni)
  {
    $this->dni = $dni;

    return $this;
  }

  /**
   * Get the value of login
   */ 
  public function getLogin()
  {
    return $this->login;
  }

  /**
   * Set the value of login
   *
   * @return  self
   */ 
  public function setLogin($login)
  {
    $this->login = $login;

    return $this;
  }

  /**
   * Get the value of fecha_accidente
   */ 
  public function getFecha_accidente()
  {
    return $this->fecha_accidente;
  }

  /**
   * Set the value of fecha_accidente
   *
   * @return  self
   */ 
  public function setFecha_accidente($fecha_accidente)
  {
    $this->fecha_accidente = $fecha_accidente;

    return $this;
  }

  /**
   * Get the value of causa_accidente
   */ 
  public function getCausa_accidente()
  {
    return $this->causa_accidente;
  }

  /**
   * Set the value of causa_accidente
   *
   * @return  self
   */ 
  public function setCausa_accidente($causa_accidente)
  {
    $this->causa_accidente = $causa_accidente;

    return $this;
  }

  /**
   * Get the value of tipo_lesion
   */ 
  public function getTipo_lesion()
  {
    return $this->tipo_lesion;
  }

  /**
   * Set the value of tipo_lesion
   *
   * @return  self
   */ 
  public function setTipo_lesion($tipo_lesion)
  {
    $this->tipo_lesion = $tipo_lesion;

    return $this;
  }

  /**
   * Get the value of partes_cuerpo_lesionado
   */ 
  public function getPartes_cuerpo_lesionado()
  {
    return $this->partes_cuerpo_lesionado;
  }

  /**
   * Set the value of partes_cuerpo_lesionado
   *
   * @return  self
   */ 
  public function setPartes_cuerpo_lesionado($partes_cuerpo_lesionado)
  {
    $this->partes_cuerpo_lesionado = $partes_cuerpo_lesionado;

    return $this;
  }

  /**
   * Get the value of gravedad
   */ 
  public function getGravedad()
  {
    return $this->gravedad;
  }

  /**
   * Set the value of gravedad
   *
   * @return  self
   */ 
  public function setGravedad($gravedad)
  {
    $this->gravedad = $gravedad;

    return $this;
  }

  /**
   * Get the value of baja
   */ 
  public function getBaja()
  {
    return $this->baja;
  }

  /**
   * Set the value of baja
   *
   * @return  self
   */ 
  public function setBaja($baja)
  {
    $this->baja = $baja;

    return $this;
  }

  public function save(){
    $sql = "INSERT INTO parte VALUES(NULL, '{$this->getDni()}', '{$this->getLogin()}', '{$this->getFecha_accidente()}', '{$this->getCausa_accidente()}', '{$this->getTipo_lesion()}', '{$this->getPartes_cuerpo_lesionado()}', '{$this->getGravedad()}', '{$this->getBaja()}' )";

    $save = $this->db->query($sql);

    $result = false;
    if ($save) {
      $result = true;
    }
    return $result;
  }

  public function update(){
		$sql = "UPDATE parte SET dni='{$this->getDni()}', fecha_accidente ={$this->getFecha_Accidente()}, causa_accidente={$this->getCausa_accidente()}, tipo_lesion={$this->getTipo_lesion()}, partesCuerpo_lesionado ={$this->getPartes_cuerpo_lesionado()}, gravedad={$this->getGravedad()}, baja={$this->getBaja()}  ";
		
		$sql .= " WHERE cod_parte={$this->getCod_parte()};";
		
		///////// debug ////////////////
    echo ('$sql  es igual a: ');
    var_dump($sql);
    die();
    ///////// end debug /////////
		$save = $this->db->query($sql);
		
		$result = false;
		if($save){
			$result = true;
		}
		return $result;
	}

  public function getAll(){
		$partes = $this->db->query("SELECT * FROM parte ORDER BY cod_parte ASC");
		return $partes;
  }
  
  public function getOne(){
    $parte = $this->db->query("SELECT * FROM parte WHERE cod_parte = {$this->cod_parte}");
    ///////// debug ////////////////
    // echo ('$this->cod_parte  es igual a: ');
    // var_dump($this->cod_parte);
    // die();
    ///////// end debug /////////
    $result = "false";
    if ($parte) {
      $result = $parte->fetch_object();
    }
		return $result;
  }
  
  public function delete(){
		$sql = "DELETE FROM parte WHERE cod_parte = {$this->cod_parte } ";
		$delete = $this->db->query($sql);
		
		$result = false;
		if($delete){
			$result = true;
		}
		return $result;
	}
}