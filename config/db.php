<?php

class Database{
  public static function connect(){
    $db = new mysqli('localhost', 'root', '', 'taxi_wamp');
    $db->query("SET NAMES 'utf8'");
    return $db;
  }
}
