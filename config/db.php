<?php

class Database
{
    public static function connect()
    {
        $host = 'localhost';
        $usuario = 'root';
        $password = '';
        $db = 'parteaccidente';
  
        if (!$conexion = new mysqli($host, $usuario, $password)) {
            die("<h3 style='color:red'>Conexion fallida: $conexion->connect_error</h3>");
        }
        if (!$conexion->query($sql="use $db")) {
            die("<h3 style='color:red'>La base de datos '$db' no pudo ser accedida.<br>ERROR: $conexion->error</h3>");
        }
      
      
        $conexion->query("SET NAMES 'utf8'");
      
  
  
  
        return $conexion;
    }
}
