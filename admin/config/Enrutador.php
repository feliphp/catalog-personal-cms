<?php
session_start();
class Enrutador{
	public function __Construct(){
				include_once('../config/Config.php');
				include_once('../config/Helper.php');
	}

	public function cargarVista($vista){
		switch($vista){
			case "inicio":
				include_once('vistas/theme/'.$vista.'/index.php');
				break;
			case "addUser":
				include_once('vistas/theme/user/'.$vista.'.php');
				break;
			case "saveUser":
				include_once('vistas/theme/user/'.$vista.'.php');
				break;
			case "loginUser":
				include_once('vistas/theme/login/'.$vista.'.php');
				break;
			case "logout":
				include_once('vistas/theme/login/'.$vista.'.php');
				break;
			case "deleteUser":
				include_once('vistas/theme/user/'.$vista.'.php');
				break;
			case "editUser":
				include_once('vistas/theme/user/'.$vista.'.php');
				break;
			case "verUser":
				include_once('vistas/theme/user/'.$vista.'.php');
				break;
			case "category":
				include_once('vistas/theme/'.$vista.'/index.php');
				break;
			case "addCategory":
				include_once('vistas/theme/category/'.$vista.'.php');
				break;
			case "saveCategory":
				include_once('vistas/theme/category/'.$vista.'.php');
				break;
			case "editCategory":
				include_once('vistas/theme/category/'.$vista.'.php');
				break;
			case "verCategory":
				include_once('vistas/theme/category/'.$vista.'.php');
				break;
			case "deleteCategory":
				include_once('vistas/theme/category/'.$vista.'.php');
				break;
			case "product":
				include_once('vistas/theme/'.$vista.'/index.php');
				break;
			case "addProduct":
				include_once('vistas/theme/product/'.$vista.'.php');
				break;
		  case "saveProduct":
				include_once('vistas/theme/product/'.$vista.'.php');
				break;
			case "verProduct":
				include_once('vistas/theme/product/'.$vista.'.php');
				break;
			case "editProduct":
				include_once('vistas/theme/product/'.$vista.'.php');
				break;
			case "deleteProduct":
				include_once('vistas/theme/product/'.$vista.'.php');
				break;
			case "system":
				include_once('vistas/theme/'.$vista.'/verSystem.php');
				break;
			case "editSystem":
				include_once('vistas/theme/system/'.$vista.'.php');
				break;
			case "saveSystem":
				include_once('vistas/theme/system/'.$vista.'.php');
				break;
			case "link":
				include_once('vistas/theme/'.$vista.'/index.php');
				break;
			case "addLink":
				include_once('vistas/theme/link/'.$vista.'.php');
				break;
			case "saveLink":
				include_once('vistas/theme/link/'.$vista.'.php');
				break;
			case "deleteLink":
				include_once('vistas/theme/link/'.$vista.'.php');
				break;
			case "verLink":
				include_once('vistas/theme/link/'.$vista.'.php');
				break;
			case "editLink":
				include_once('vistas/theme/link/'.$vista.'.php');
				break;
			default:
				include_once('vistas/error.php');
		}
	}
	public function validarGet($variable){
		if(empty($variable)){
			include_once('vistas/theme/login/index.php');
		} else {
			return true;
		}
	}
}
