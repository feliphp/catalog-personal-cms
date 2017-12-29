<?php
require_once('config/Enrutador.php');
$enrutador = new Enrutador();
if($enrutador->validarGet($_GET['cargar'])){
	$enrutador->cargarVista($_GET['cargar']);
}
?>
