<?php
require_once 'models/trabajador.php';

class trabajadorController{
  public function getTrabajadores(){
		// Utils::isAdmin();     para restringir el acceso despues
		
		$trabajador = new Trabajador();
		$trabajadores = $trabajador->getTrabajadores();
		
		require_once 'views/producto/gestion.php';
	}
}