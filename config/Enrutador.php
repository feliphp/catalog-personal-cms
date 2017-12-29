<?php
class Enrutador{
	public function __Construct(){
				include_once('config/Config.php');
				include_once('config/Helper.php');
	}
	public function cargarVista($vista){
		include_once('config/Config.php');
		switch($vista){
			case "singleProducto":
				include_once('vistas/theme/'.$vista.'/index.php');
				break;
			case "contacto":
				include_once('vistas/theme/'.$vista.'/index.php');
				break;
			case "links":
				include_once('vistas/theme/'.$vista.'/index.php');
				break;
			case "inicio":
				include_once('vistas/theme/'.$vista.'/'.$vista.'.php');
				break;
			case "addStarsProducto":
				include_once('vistas/theme/inicio/'.$vista.'.php');
				break;
			case "enviado":
				include_once('vistas/theme/contacto/'.$vista.'.php');
				break;
			default:
				include_once('vistas/error.php');
		}
	}
	public function validarGet($variable){
		include_once('config/Config.php');
		if(empty($variable)){
			include_once('vistas/theme/inicio/inicio.php');
		} else {
			return true;
		}
	}
}
