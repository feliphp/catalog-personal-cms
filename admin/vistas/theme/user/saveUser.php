<?php
$username = limpiarString($_POST['username']);
$password = $_POST['password'];
$tipo = $_POST['tipo'];
$permisos= $_POST['permisos'];
$email = $_POST['email'];
$nombre = limpiarString($_POST['nombre']);
$apellido = limpiarString($_POST['apellido']);
$telefono = limpiarString($_POST['telefono']);
$telefono_2 = limpiarString($_POST['telefono_2']);
$otro_contacto = limpiarString($_POST['otro_contacto']);
$buttonaceptar = $_POST['button-aceptar'];
$buttoneditar = $_POST['button-editar-aceptar'];

if($buttonaceptar != null){
    $dir = dirname(dirname(dirname(dirname(__FILE__))));
    require_once($dir.'/controlador/ControladorUsuarios.php');
    $usuario = new ControladorUsuarios();
    $retUser=$usuario->crearUsuario($username,$password,$tipo,$permisos,$email,$nombre,$apellido,$telefono,$telefono_2,$otro_contacto);
    if($retUser == 1){
      echo "<script language=Javascript> location.href=\"".INDEX_DEF."\"; </script>";
      die();
    } else {
      echo "Ocurrio un Error";
    }
} elseif ($buttoneditar != null) {
  $dir = dirname(dirname(dirname(dirname(__FILE__))));
  $id = $_POST['id'];
  require_once($dir.'/controlador/ControladorUsuarios.php');
  $usuario = new ControladorUsuarios();
  $retUser = $usuario->editarUsuario($id,$username,$tipo,$permisos,$nombre,$apellido,$telefono,$telefono_2,$otro_contacto);

  if($retUser == 1){
    echo "<script language=Javascript> location.href=\"".INDEX_DEF."\"; </script>";
    die();
  } else {
    echo "Ocurrio un Error al editar";
  }
}

?>
