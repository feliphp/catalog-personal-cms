<?php $dir = dirname(dirname(dirname(dirname(__FILE__))));
require_once($dir.'/controlador/ControladorProductos.php');
$producto = new ControladorProductos();
$idPro=$_GET['id_pro'];
$star=$_GET['star'] * 20;
$stars = mysqli_fetch_array($producto->getStars($idPro));
$stars = $stars['rating'];
$starsArray = explode(":", $stars);
$starsTotal = $starsArray[1] + intval($star);
$votos = $starsArray[0] + 1;
$stars = $starsTotal / $votos ;
if($stars == NULL){
	$stars=0;
}

$resStr = $producto->setStars($votos,$stars,$idPro);
if($resStr == true){
	echo "<script language=Javascript> location.href=\"".INDEX_DEF."\"; </script>";
} else {
	echo "error al guardar estrellas";
}
?>
