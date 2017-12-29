<?php
session_start();
if($_SESSION['username'] == ''){
  echo "<script language=Javascript> location.href=\"".LOGOUT."\"; </script>";
} else {
  $id = $_GET['id'];
  $dir = dirname(dirname(dirname(dirname(__FILE__))));
  require_once($dir.'/controlador/ControladorProductos.php');
  $producto = new ControladorProductos();
  $producto->eliminarProducto($id);
  echo "<script language=Javascript> location.href=\"".INDEX_PRO."\"; </script>";
}
?>
