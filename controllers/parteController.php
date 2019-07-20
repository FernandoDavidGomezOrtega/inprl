<?php

require_once 'models/parte.php';
require_once 'models/trabajador.php';
require_once 'models/usuario.php';


class parteController{
  public function parteNuevo(){
    $trabajador = new Trabajador();
    $trabajadores = $trabajador->getAll();

    //renderizar vista
    require_once 'views/parte/parteNuevo.php';
  }

  public function seleccionarParteEditar(){
    /////////////////////////aqui va la consulta de partes
    $parte = new Parte();
    $partes = $parte->getAll();
    
    // var_dump($_SESSION['getTrabajadores']);
    // var_dump($partes);

/////////////////////////////////////////////////

    //renderizar vista
    require_once 'views/parte/seleccionarParteEditar.php';
  }

  public function editar(){
		// Utils::isAdmin();        evrrificar sesion activa
		if(isset($_POST['cod_parte'])){
			$cod_parte = $_POST['cod_parte'];
			// $edit = true;  no sé muy bienpara qué es esto
			
			$parte = new Parte();
			$parte->setCod_parte($cod_parte);
			
      $parte = $parte->getOne();

      ////////////////// seleccionar nombre del trabajador
      $worker = new Trabajador();
      $worker->setDni($parte->dni);

      $worker = $worker->getOne();
      // $nombre = $trabajador->getNombre_trabajador();
      ///////// debug ////////////////
      // echo ('$trabajador  es igual a: ');
      // var_dump($trabajador);
      // die();
      ///////// end debug /////////

      //listar todos los trabajadores
      $trabajador = new Trabajador();
      $trabajadores = $trabajador->getAll();



			
			require_once 'views/parte/editar.php';
			
		}else{
      $_SESSION['parte_no_existe'];
			header('Location:'.base_url.'parte/seleccionarParteEditar');
		}
	}

    public function save(){
      $parte = new Parte();
      $parte->setFecha_accidente($_POST['fecha_accidente']);
      $parte->setDni($_POST['dni']);
      $parte->setLogin($_SESSION['identity']->login);
      $parte->setCausa_accidente($_POST['causa_accidente']);
      $parte->setTipo_lesion($_POST['tipo_lesion']);
      $parte->setPartes_cuerpo_lesionado($_POST['partes_cuerpo_lesionado']);
      $parte->setGravedad($_POST['gravedad']);
      $parte->setBaja($_POST['baja']);

      $save = $parte->save();
      if ($save) {
        $_SESSION['save'] = "complete";
        header('Location: ' . base_url . 'index.php?controller=parte&action=parteNuevo');
      } else{
        $_SESSION['save'] = "failed";
        header('Location: ' . base_url . 'index.php?controller=parte&action=parteNuevo');
      }
    }

}
