<?php
session_start();
if($_SESSION['username'] == ''){
  echo "<script language=Javascript> location.href=\"".LOGOUT."\"; </script>";
} else {
  $id = $_GET['id'];
  $dir = dirname(dirname(dirname(dirname(__FILE__))));
  require_once($dir.'/controlador/ControladorLinks.php');
  $link = new ControladorLinks();
  $link->eliminarLink($id);
  echo "<script language=Javascript> location.href=\"".INDEX_LIN."\"; </script>";
}
?>
