<?php

class landingController{
  public function index(){
    // echo 'Controlador Productos, Acción index';

    //renderizar vista
    require_once 'views/landing/landing.php';
  }

  public function informacion(){
    // echo 'Controlador Productos, Acción index';

    //renderizar vista
    require_once 'views/landing/informacion_riesgos.php';
  }
}
