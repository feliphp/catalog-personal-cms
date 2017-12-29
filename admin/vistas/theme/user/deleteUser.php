<?php
session_start();
if($_SESSION['username'] == ''){
  echo "<script language=Javascript> location.href=\"".LOGOUT."\"; </script>";
} else {
  $id = $_GET['id'];
  $dir = dirname(dirname(dirname(dirname(__FILE__))));
  require_once($dir.'/controlador/ControladorUsuarios.php');
  $usuario = new ControladorUsuarios();
  $usuario->eliminarUsuario($id);
  echo "<script language=Javascript> location.href=\"".INDEX_DEF."\"; </script>";
}
?>
