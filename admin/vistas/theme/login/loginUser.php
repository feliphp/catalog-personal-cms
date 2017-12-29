<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$buttonaceptar = $_POST['button-login-aceptar'];
if(buttonaceptar != null){
    $dir = dirname(dirname(dirname(dirname(__FILE__))));
    require_once($dir.'/controlador/ControladorUsuarios.php');
    $usuario = new ControladorUsuarios();
    $retUser=$usuario->loginUsuario($username,$password);
    if($retUser == false){
        echo "<script language=Javascript> location.href=\"".LOGOUT."\"; </script>";
    } else {
        $_SESSION['username'] = $retUser;
        //echo "<a href='".INDEX_DEF."'>ir</a>";
        echo "<script language=Javascript> location.href=\"".INDEX_DEF."\"; </script>";
    }
}
 ?>
