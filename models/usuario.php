<?php

class Usuario
{
    private $login;
    private $password;

    private $db;

    //conexion db
    public function __construct()
    {
        $this->db = Database::connect();
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

        // return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        // return $this;
    }

    
    public function verifyLogin(){
      $result = false;
      $login = $this->login;
      $password = $this->password;
  
      // var_dump($password);
      // die();
  
      $sql = "SELECT * FROM login where login = '$login' and password = '$password'";
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
      //   $verify = password_verify($password, $user->password);
  
        // var_dump($user->password);
        // die();
  
      //   if ($verify) {
          $result = $user;
      //   }
      }
  
      return $result;
    }
}
