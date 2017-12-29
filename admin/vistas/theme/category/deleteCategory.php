<?php
session_start();
if($_SESSION['username'] == ''){
  echo "<script language=Javascript> location.href=\"".LOGOUT."\"; </script>";
} else {
  $id = $_GET['id'];
  $dire = dirname(dirname(dirname(dirname(__FILE__))));
  require_once($dire.'/controlador/ControladorCategorias.php');
  $categoria = new ControladorCategorias();
  $categoria->eliminarCategoria($id);
  echo "<script language=Javascript> location.href=\"".INDEX_CAT."\"; </script>";
}
?>
