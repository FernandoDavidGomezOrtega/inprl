<?php

require_once 'models/parte.php';
require_once 'models/trabajador.php';
require_once 'models/usuario.php';


class parteController
{
    public function parteNuevo()
    {
        $trabajador = new Trabajador();
        $trabajadores = $trabajador->getAll();

        //renderizar vista
        require_once 'views/parte/parteNuevo.php';
    }

    public function seleccionarParteEditar()
    {
        /////////////////////////aqui va la consulta de partes
        $parte = new Parte();
        $partes = $parte->getAll();
    
        // var_dump($_SESSION['getTrabajadores']);
        // var_dump($partes);

        /////////////////////////////////////////////////

        //renderizar vista
        require_once 'views/parte/seleccionarParteEditar.php';
    }

    public function editar()
    {
        // Utils::isAdmin();        evrrificar sesion activa
        if (isset($_POST['cod_parte'])) {
            $cod_parte = $_POST['cod_parte'];
            // $edit = true;  no sé muy bienpara qué es esto
            
            $parte = new Parte();
            $parte->setCod_parte($cod_parte);
            
            $parte = $parte->getOne();

            if ($parte != null) {
                /////// debug ////////////////
                // echo ('$parte  es igual a: ');
                // var_dump($parte);
                // die();
                /////// end debug /////////

                ////////////////// seleccionar nombre del trabajador
                $worker = new Trabajador();
                $worker->setDni($parte->dni);

                $worker = $worker->getOne();
                // $nombre = $trabajador->getNombre_trabajador();

                //listar todos los trabajadores
                $trabajador = new Trabajador();
                $trabajadores = $trabajador->getAll();



            
                require_once 'views/parte/editar.php';
            } else {
                $_SESSION['parte_no_existe'] = 'no existe';
                header('Location:'.base_url.'index.php?controller=parte&action=seleccionarParteEditar');
            }
        } else {
            header('Location:'.base_url.'index.php?controller=parte&action=seleccionarParteEditar');
        }
    }
  
    public function buscarPartesForm()
    {
        // Utils::isAdmin();        evrrificar sesion activa
        $trabajador = new Trabajador();
        $trabajadores = $trabajador->getAll();



        //renderizar vista
        require_once 'views/parte/buscarPartesForm.php';
    }

    public function listAll()
    {
        // Utils::isAdmin();        evrrificar sesion activa
        $parte = new Parte();
        $search = $parte->getAll();

        ///////// debug ////////////////
        // echo ('$search  es igual a: ');
        // var_dump($search);
        // die();
        ///////// end debug /////////



        //renderizar vista
        require_once 'views/parte/listAll.php';
    }

    public function save()
    {
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
            ///////// debug ////////////////
            // echo ('$save  es igual a: ');
            // var_dump($save);
            // die();
            ///////// end debug /////////
            $_SESSION['save'] = "complete";
            $_SESSION['index'] = $save;
            header('Location: ' . base_url . 'index.php?controller=parte&action=parteNuevo');
        } else {
            $_SESSION['save'] = "failed";
            header('Location: ' . base_url . 'index.php?controller=parte&action=parteNuevo');
        }
    }

    public function update()
    {
        $parte = new Parte();
        $parte->setCod_parte($_POST['cod_parte']);
        $parte->setFecha_accidente($_POST['fecha_accidente']);
        $parte->setDni($_POST['dni']);
      
        ///////// debug ////////////////
        // echo ('$_POST["dni"]  es igual a: ');
        // var_dump($_POST['dni']);
        // die();
        ///////// end debug /////////
        $parte->setLogin($_SESSION['identity']->login);
        $parte->setCausa_accidente($_POST['causa_accidente']);
        $parte->setTipo_lesion($_POST['tipo_lesion']);
        $parte->setPartes_cuerpo_lesionado($_POST['partes_cuerpo_lesionado']);
        $parte->setGravedad($_POST['gravedad']);
        $parte->setBaja($_POST['baja']);

      
      
        $update = $parte->update();
      
        if ($update) {
            ///////// debug ////////////////
            // echo ('$update  es igual a: ');
            // var_dump($update);
            // die();
            ///////// end debug /////////
            $_SESSION['update'] = "complete";
            header('Location: ' . base_url . 'index.php?controller=parte&action=seleccionarParteEditar');
        } else {
            $_SESSION['update'] = "failed";
            header('Location: ' . base_url . 'index.php?controller=parte&action=seleccionarParteEditar');
        }
    }

    public function delete()
    {

      ///////// debug ////////////////
        // echo ('cod_parte  es igual a: ');
        // var_dump($_GET['cod_parte']);
        // die();
        ///////// end debug /////////
        // Utils::isAdmin();
      
        if (isset($_GET['cod_parte'])) {
            $cod_parte = $_GET['cod_parte'];
            $parte = new Parte();
            $parte->setCod_parte($cod_parte);
        
            $delete = $parte->delete();
            if ($delete) {
                $_SESSION['delete'] = 'complete';
            } else {
                $_SESSION['delete'] = 'failed';
            }
        } else {
            $_SESSION['delete'] = 'failed';
        }
      
        header('Location: '.base_url.'index.php?controller=parte&action=seleccionarParteEditar');
    }

    public function buscarPartes()
    {
        // todo lo recibido por POST
        $cod_parte = $_POST['cod_parte'];
        ///////// debug ////////////////
        // echo ('$_POST[cod_parte]  es igual a: ');
        // var_dump($_POST['cod_parte']);
        // die();
        ///////// end debug /////////

        $fecha_accidente = $_POST['fecha_accidente'];
        ///////// debug ////////////////
        // echo (' $_POST[fecha_accidente]  es igual a: ');
        // var_dump( $_POST['fecha_accidente']);
        // die();
        ///////// end debug /////////

        // if (empty($_POST['dni']) || $_POST['dni'] == "" || !isset($_POST['dni']) || $_POST['dni'] == undefined) {
        //     $dni = "";
        // } else {
        //     $dni = $_POST['dni'];
        // }

        if ($_POST['dni'] != 0){
            $dni = $_POST['dni'];
        }else {
            $dni = "";
        }
        ///////// debug ////////////////
        // echo ('$dni  es igual a: ');
        // var_dump($dni);
        // die();
        ///////// end debug /////////

        $causa_accidente = $_POST['causa_accidente'];
        $tipo_lesion = $_POST['tipo_lesion'];
        $partes_cuerpo_lesionado = $_POST['partes_cuerpo_lesionado'];

        if ($_POST['gravedad'] == '0') {
            $gravedad = "";
        } else {
            $gravedad = $_POST['gravedad'];
        }

        if ($_POST['baja'] == '0') {
            $baja = "";
        } else {
            $baja = $_POST['baja'];
        }

        ///////// debug ////////////////
        // echo ('$_POST[baja]  es igual a: ');
        // var_dump($_POST['baja']);
        // // die();

        // echo ('$baja  es igual a: ');
        // var_dump($baja);
        // die();
        ///////// end debug /////////

        // if (($cod_parte=="") && ($fecha_accidente=="") && ($dni=="") && ($causa_accidente=="") && ($tipo_lesion=="") && ($partes_cuerpo_lesionado=="") && ($gravedad=="") && ($baja=="")) {
        //     header("Location: " .  base_url . "index.php?controller=parte&action=buscarPartesForm");
        // } else {
        // todo lo recibido por POST
        // $codParte = $_POST['cod_parte'];

        // $fechaAccidente = $_POST['fecha_accidente'];

        // if ($_POST['dni'] != 0){
        //     $dni = $_POST['dni'];
        // }else {
        //     $dni = "";
        // }

        // $causaAccidente = $_POST['causa_accidente'];
        // $tipoLesion = $_POST['tipo_lesion'];
        // $partesLesionadas = $_POST['partes_cuerpo_lesionado'];

        // if ($_POST['gravedad'] == 0) {
        //     $gravedad = "";
        // } else {
        //     $gravedad = $_POST['gravedad'];
        // }

        // if ($_POST['baja'] == 0) {
        //     $baja = "";
        // } else {
        //     $baja = $_POST['baja'];
        // }
        
        //creamos el objeto parte 
        $parte = new Parte();
        $parte->setCod_parte($cod_parte);
        $parte->setDni($dni);
        $parte->setLogin($_SESSION['identity']->login);
        $parte->setFecha_accidente($fecha_accidente);
        $parte->setCausa_accidente($causa_accidente);
        $parte->setTipo_lesion($tipo_lesion);
        $parte->setPartes_cuerpo_lesionado($partes_cuerpo_lesionado);
        $parte->setGravedad($gravedad);
        $parte->setBaja($baja);

        //realizamos la busqueda
        $search = $parte->search();
        // ///////// debug ////////////////
        // echo ('$search->num_rows  es igual a: ');
        // var_dump($search->num_rows);
        // die();
        ///////// end debug /////////



        if ($dni != ""){
          $nombreDelTrabajador = $parte->mostrarNombreDesdeDni($dni);
          $trabajador = $nombreDelTrabajador->fetch_object();
          $nombreDelTrabajador = $trabajador->nombre_trabajador;

          ///// debug ////////////////
        //   echo ('$nombreDelTrabajador  es igual a: ');
        //   var_dump($nombreDelTrabajador);
        //   die();
          ///// end debug /////////
        }
        
        //renderizar vista para mostrar los resultados de la busqueda
        require_once 'views/parte/mostrarResultados.php';

        // }

      
    }
} // end class
