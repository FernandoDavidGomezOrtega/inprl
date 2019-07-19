<?php

require_once 'models/parte.php';

require_once 'models/usuario.php';


class hojaDiariaController{
  public function parteNuevo(){
    // echo 'Controlador Productos, Acción index';

    //renderizar vista
    require_once 'views/parte/parteNuevo.php';
  }

 

  public function initSessionVars(){
   $_SESSION['fecha_hoja'] = 0;
   $_SESSION['totalTicketsAnulados'] =0;
   $_SESSION['cantidadTicketsAnulados'] =0;
   $_SESSION['totalTicketsCompensacion'] =0;
   $_SESSION['cantidadDeTicketsCompensacion'] =0;
   $_SESSION['totalValesMyTaxi'] =0;
   $_SESSION['cantidadValesMyTaxi'] =0;
   $_SESSION['totalTarjetaBancaria'] =0;
   $_SESSION['cantidadTicketsTarjeta'] =0;
   $_SESSION['viajesFinJornada'] = 0;
   $_SESSION['viajesInicioJornada'] = 0;
   $_SESSION['recaudacionFinJornada'] =0;
   $_SESSION['recaudacionInicioJornada'] =0;
   $_SESSION['kmTotalesFinJornada'] =0;
   $_SESSION['kmTotalesInicioJornada'] =0;
   $_SESSION['kmOcupadoFinJornada'] =0;
   $_SESSION['kmOcupadoInicioJornada'] =0;
   $_SESSION['gasoil'] =0;
   $_SESSION['hojaTotalViajes'] =0;
   $_SESSION['hojaTotalRecaudacion'] =0;
   $_SESSION['compensacionesEnEuros'] =0;
   $_SESSION['totalDeCompensaciones'] =0;
   $_SESSION['ajustesDeRecaudacion'] =0;
   $_SESSION['hojaTotalRecaudacionAjustado'] =0;
   $_SESSION['hojaTotalKmTotales'] =0;
   $_SESSION['hojaTotalKmOcupado'] =0;
   $_SESSION['utilidad'] =0;
   $_SESSION['hojaTotalEfectivoEntregar'] =0;
   $_SESSION['ganancia_dia'] =0;


   header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=insertDate');
  }

    public function save(){
      $hoja = new HojaDiaria();
      $hoja->setUsers_id($_SESSION['identity']->id);
      $hoja->setFecha_hoja($_SESSION['fecha_hoja']);
      $hoja->setGanancia_dia($_SESSION['ganancia_dia']);
      $hoja->setGasoil_dia($_SESSION['gasoil']);

      $save = $hoja->save();
      if ($save) {
        $_SESSION['save'] = "complete";
        header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=initSessionVars');
      } else{
        $_SESSION['save'] = "failed";
        header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=resumen');
      }
    }


  public function verifyFechaHoja(){
    if (isset($_POST)) {

      $hojaDiaria = new HojaDiaria();
      $hojaDiaria->setFecha_hoja($_POST['fecha']);
      $hojaDiaria->setUsers_id($_SESSION['identity']->id);

      $fechaOk = $hojaDiaria->verifyFechaHoja();

      if($fechaOk){
        $_SESSION['fecha_hoja'] = $_POST['fecha'];
        header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=insertTicketAnulado');
      }else{
        $_SESSION['errorFecha'] = 'La fecha seleccionada ya está registrada, por favor selecciona otra';
        header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=insertDate');
      }
    } else header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=insertDate');
  }


    public function addTicketAnulado(){
      if(isset($_POST)){
        $pattern='/^([0-9]{1,})(\.[0-9]{0,2})?$/';
        $string=$_POST['ticketAnulado'];
        if(preg_match($pattern,$string)){
          $_SESSION['totalTicketsAnulados'] += $_POST['ticketAnulado'];
          $_SESSION['cantidadTicketsAnulados'] += 1;
          $_SESSION['ticketAnulado'] = $_POST['ticketAnulado'];

          header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=insertTicketAnulado');
        }else{
          $_SESSION['errorFormato'] = 'Solamente se admiten números y máximo 2 cifras decimales';
          header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=insertTicketAnulado');
        }
      } else header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=insertTicketAnulado');
    }

    public function addTicketcompensacion(){
      if(isset($_POST)){
        $pattern='/^([0-9]{1,})(\.[0-9]{0,2})?$/';
        // $pattern.=trim($_POST['ticketAnulado1']);
        $string=$_POST['ticketCompensacion'];
        if(preg_match($pattern,$string)){
          $_SESSION['totalTicketsCompensacion'] += $_POST['ticketCompensacion'];
          $_SESSION['cantidadDeTicketsCompensacion'] += 1;
          $_SESSION['ticketCompensacion'] = $_POST['ticketCompensacion'];


          header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=insertTicketCompensacion');

        }else{
          $_SESSION['errorFormato'] = 'Solamente se admiten números y máximo 2 cifras decimales';
          header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=insertTicketCompensacion');
        }
      } else header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=insertTicketCompensacion');
    }

    public function addValeMyTaxi(){
      if(isset($_POST)){
        $pattern='/^([0-9]{1,})(\.[0-9]{0,2})?$/';
        // $pattern.=trim($_POST['ticketAnulado1']);
        $string=$_POST['valeMyTaxi'];
        if(preg_match($pattern,$string)){
          $_SESSION['totalValesMyTaxi'] += $_POST['valeMyTaxi'];
          $_SESSION['cantidadValesMyTaxi'] += 1;
          $_SESSION['valeMyTaxi'] = $_POST['valeMyTaxi'];

          header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=insertValeMyTaxi');

        }else{
          $_SESSION['errorFormato'] = 'Solamente se admiten números y máximo 2 cifras decimales';
          header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=insertValeMyTaxi');
        }
      } else header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=insertValeMyTaxi');
    }

    public function addTicketTarjeta(){
      if(isset($_POST)){
        $pattern='/^([0-9]{1,})(\.[0-9]{0,2})?$/';
        // $pattern.=trim($_POST['ticketAnulado1']);
        $string=$_POST['tarjetaBancaria'];
        if(preg_match($pattern,$string)){
          $_SESSION['totalTarjetaBancaria'] += $_POST['tarjetaBancaria'];
          $_SESSION['cantidadTicketsTarjeta'] += 1;
          $_SESSION['tarjetaBancaria'] = $_POST['tarjetaBancaria'];


          header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=insertTicketTarjeta');

        }else{
          $_SESSION['errorFormato'] = 'Solamente se admiten números y máximo 2 cifras decimales';
          header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=insertTicketTarjeta');
        }
      } else header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=insertTicketTarjeta');
    }

    public function addViajes(){
      if(isset($_POST)){
        $pattern='/^([0-9]{1,})$/';
        $string1=$_POST['viajesFinJornada'];
        $string2=$_POST['viajesInicioJornada'];
        if(preg_match($pattern,$string1) && preg_match($pattern,$string2)){
          $_SESSION['viajesFinJornada'] = $_POST['viajesFinJornada'];
          $_SESSION['viajesInicioJornada'] = $_POST['viajesInicioJornada'];
          header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=insertRecaudacion');
        }else{
          $_SESSION['errorFormato'] = 'Solamente se admiten números enteros';
          header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=insertViajes');
        }
      } else header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=insertViajes');
    }

    public function addRecaudacion(){
      if(isset($_POST)){
        $pattern='/^([0-9]{1,})(\.[0-9]{0,2})?$/';
        $string1=$_POST['recaudacionFinJornada'];
        $string2=$_POST['recaudacionInicioJornada'];
        if(preg_match($pattern,$string1) && preg_match($pattern,$string2)){
          $_SESSION['recaudacionFinJornada'] = $_POST['recaudacionFinJornada'];
          $_SESSION['recaudacionInicioJornada'] = $_POST['recaudacionInicioJornada'];
          header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=insertKmsTotales');
        }else{
          $_SESSION['errorFormato'] = 'Solamente se admiten números y máximo 2 cifras decimales';
          header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=insertRecaudacion');
        }
      } else header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=insertRecaudacion');
    }

    public function addKmsTotales(){
      if(isset($_POST)){
        $pattern='/^([0-9]{1,})$/';
        $string1=$_POST['kmTotalesFinJornada'];
        $string2=$_POST['kmTotalesInicioJornada'];
        if(preg_match($pattern,$string1) && preg_match($pattern,$string2)){
          $_SESSION['kmTotalesFinJornada'] = $_POST['kmTotalesFinJornada'];
          $_SESSION['kmTotalesInicioJornada'] = $_POST['kmTotalesInicioJornada'];
          header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=insertKmsOcupado');
        }else{
          $_SESSION['errorFormato'] = 'Solamente se admiten números enteros';
          header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=insertKmsTotales');
        }
      } else header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=insertKmsTotales');
    }

    public function addKmsOcupado(){
      if(isset($_POST)){
        $pattern='/^([0-9]{1,})$/';
        $string1=$_POST['kmOcupadoFinJornada'];
        $string2=$_POST['kmOcupadoInicioJornada'];
        if(preg_match($pattern,$string1) && preg_match($pattern,$string2)){
          $_SESSION['kmOcupadoFinJornada'] = $_POST['kmOcupadoFinJornada'];
          $_SESSION['kmOcupadoInicioJornada'] = $_POST['kmOcupadoInicioJornada'];
          header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=insertGasoil');
        }else{
          $_SESSION['errorFormato'] = 'Solamente se admiten números enteros';
          header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=insertKmsOcupado');
        }
      } else header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=insertKmsOcupado');
    }

    public function addGasoil(){
      if(isset($_POST)){
        $pattern='/^([0-9]{1,})(\.[0-9]{0,2})?$/';
        // $pattern.=trim($_POST['ticketAnulado1']);
        $string=$_POST['gasoil'];
        if(preg_match($pattern,$string)){
          $_SESSION['gasoil'] = $_POST['gasoil'];

          header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=calculoHoja');
        }else{
          // setcookie("errorFormato", 1, time() + 5);
          $_SESSION['errorFormato'] = 'Solamente se admiten números y máximo 2 cifras decimales';
          header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=insertGasoil');
        }
      } else header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=insertGasoil');
    }

    public function calculoHoja(){

      $_SESSION['hojaTotalViajes'] = $_SESSION['viajesFinJornada'] - $_SESSION['viajesInicioJornada'];

      $_SESSION['hojaTotalRecaudacion'] = $_SESSION['recaudacionFinJornada'] - $_SESSION['recaudacionInicioJornada'];

      //ahustes de recaudacion
      ///////////
      $_SESSION['compensacionesEnEuros'] = $_SESSION['cantidadDeTicketsCompensacion'] * 5;
      $_SESSION['totalDeCompensaciones'] = $_SESSION['compensacionesEnEuros'] - $_SESSION['totalTicketsCompensacion'];

      //obtener el total de ajustes de recaudacion
      $_SESSION['ajustesDeRecaudacion'] =  $_SESSION['totalDeCompensaciones'] - $_SESSION['totalTicketsAnulados'];
      //////////

      $_SESSION['hojaTotalRecaudacionAjustado'] = $_SESSION['hojaTotalRecaudacion'] + $_SESSION['ajustesDeRecaudacion'];

      $_SESSION['hojaTotalKmTotales'] = $_SESSION['kmTotalesFinJornada'] - $_SESSION['kmTotalesInicioJornada'];

      $_SESSION['hojaTotalKmOcupado'] = $_SESSION['kmOcupadoFinJornada'] - $_SESSION['kmOcupadoInicioJornada'];

      $_SESSION['utilidad'] = round($_SESSION['hojaTotalRecaudacionAjustado'] / 2, 2, PHP_ROUND_HALF_UP);

      $_SESSION['hojaTotalEfectivoEntregar'] = round($_SESSION['hojaTotalRecaudacionAjustado'] - $_SESSION['totalTarjetaBancaria'] - $_SESSION['totalValesMyTaxi'] - $_SESSION['utilidad'], 2, PHP_ROUND_HALF_UP);

      $_SESSION['ganancia_dia'] = $_SESSION['utilidad'] - $_SESSION['gasoil'];

      header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=resumen');
    }

    public function consultarFechaHoja(){
      if (isset($_POST['fecha'])) {

        $hoja = new HojaDiaria();
        $hoja->setFecha_hoja($_POST['fecha']);
        $hoja->setUsers_id($_SESSION['identity']->id);
        $hojaDiaria = $hoja->consultarHoja();

        //crear una sesion
        if ($hojaDiaria && is_object($hojaDiaria)) {
          $_SESSION['hojaDiariaConsulta'] = $hojaDiaria;
          // echo 'sddsd';
          // die();
          header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=mostrarConsultaHojaFecha');
        } else {
          $_SESSION['error_hoja'] ='La fecha seleccionada no está registrada';
          header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=consultarHoja');
        }
      } else header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=consultarHoja');
    }

    public function consultaMesHoja() {
      if (isset($_POST['mes'])) {

        // var_dump($_POST['mes']);
        // die();
        //
        // $resultset =

        $hoja = new HojaDiaria();
        $hoja->setFecha_hoja($_POST['mes']);
        $hoja->setUsers_id($_SESSION['identity']->id);
        $mes = $hoja->consultarMesHoja();

        // var_dump($mes['ganancia_dia']);
        // var_dump($mes['gasoil_dia']);
        // die();

        //crear una sesion
        if ($mes && is_array($mes)) {
          $_SESSION['ganancia_dia_mes'] = $mes['ganancia_dia'];
          $_SESSION['gasoil_dia_mes'] = $mes['gasoil_dia'];
          $_SESSION['monthAndYear'] = $_POST['mes'];

          header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=mostrarConsultaHojaMes');
        } else {
          $_SESSION['error_hoja'] ='El mes seleccionado no tiene ningún registro';
          header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=consultarMesHoja');
        }
      } else header('Location: ' . base_url . 'index.php?controller=hojaDiaria&action=consultarMesHoja');


      //SELECT * FROM hojadiaria WHERE MONTH(fecha_hoja) = '06' AND YEAR(fecha_hoja) = '2019'
    }
}
