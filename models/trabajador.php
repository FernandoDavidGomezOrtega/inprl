<?php
class Trabajador
{
    private $nombre_trabajador;
    private $dni;
    private $sexo;
    private $fecha_nacimiento;
    private $direccion;
    private $com_autonoma;
    private $telefono;
    private $correo_elec;
    private $sector;

    private $db;
    //conecion db
    public function __construct()
    {
        $this->db = Database::connect();
    }

    /**
     * Get the value of nombre_trabajador
     */
    public function getNombre_trabajador()
    {
        return $this->nombre_trabajador;
    }

    /**
     * Set the value of nombre_trabajador
     *
     * @return  self
     */
    public function setNombre_trabajador($nombre_trabajador)
    {
        $this->nombre_trabajador = $nombre_trabajador;

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
     * Get the value of sexo
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set the value of sexo
     *
     * @return  self
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get the value of fecha_nacimiento
     */
    public function getFecha_nacimiento()
    {
        return $this->fecha_nacimiento;
    }

    /**
     * Set the value of fecha_nacimiento
     *
     * @return  self
     */
    public function setFecha_nacimiento($fecha_nacimiento)
    {
        $this->fecha_nacimiento = $fecha_nacimiento;

        return $this;
    }

    /**
     * Get the value of direccion
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     *
     * @return  self
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get the value of com_autonoma
     */
    public function getCom_autonoma()
    {
        return $this->com_autonoma;
    }

    /**
     * Set the value of com_autonoma
     *
     * @return  self
     */
    public function setCom_autonoma($com_autonoma)
    {
        $this->com_autonoma = $com_autonoma;

        return $this;
    }

    /**
     * Get the value of telefono
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of telefono
     *
     * @return  self
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get the value of correo_elec
     */
    public function getCorreo_elec()
    {
        return $this->correo_elec;
    }

    /**
     * Set the value of correo_elec
     *
     * @return  self
     */
    public function setCorreo_elec($correo_elec)
    {
        $this->correo_elec = $correo_elec;

        return $this;
    }

    /**
     * Get the value of sector
     */
    public function getSector()
    {
        return $this->sector;
    }

    /**
     * Set the value of sector
     *
     * @return  self
     */
    public function setSector($sector)
    {
        $this->sector = $sector;

        return $this;
    }

    public function getAll()
    {
        // public function getTrabajadores(){
        $trabajadores = $this->db->query("SELECT * FROM trabajador");
        return $trabajadores;
    }
  
    public function getOne()
    {
      $result = "false";
        $trabajador = $this->db->query("SELECT * FROM trabajador WHERE dni = '{$this->dni}'");
                          ///////// debug ////////////////
                          // echo('$trabajador  es igual a: ');
                          // var_dump($trabajador);
                          // die();
                          ///////// end debug /////////
        if ($trabajador) {
            $result = $trabajador->fetch_object();
            ///////// debug ////////////////
            // echo('$result  es igual a: ');
            // var_dump($result);
            // die();
            ///////// end debug /////////
        }
                    ///////// debug ////////////////
                    // echo('$result  es igual a: ');
                    // var_dump($result);
                    // die();
                    ///////// end debug /////////
        return $result;
    }
}
