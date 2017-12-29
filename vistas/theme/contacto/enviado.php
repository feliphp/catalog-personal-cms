<!DOCTYPE HTML>
<html>
	<head>
		<title>Catálogo -  Contácto</title>
		<link href="<?php echo URL_ACTUAL;?>/css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo URL_ACTUAL;?>/images/fav-icon.png" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		<!-- Global CSS for the page and tiles -->
  		<link rel="stylesheet" href="<?php echo URL_ACTUAL;?>/css/main.css">
  		<!-- //Global CSS for the page and tiles -->
		<!---start-click-drop-down-menu----->
		<script src="<?php echo URL_ACTUAL;?>/js/jquery.min.js"></script>
		<!-- Bootstrap CSS -->
    <link href="<?php echo URL_ACTUAL;?>/css/bootstrap.min.css" rel="stylesheet">

        <!----start-dropdown--->
         <script type="text/javascript">
			var $ = jQuery.noConflict();
				$(function() {
					$('#activator').click(function(){
						$('#box').animate({'top':'0px'},500);
					});
					$('#boxclose').click(function(){
					$('#box').animate({'top':'-700px'},500);
					});
				});
				$(document).ready(function(){
				//Hide (Collapse) the toggle containers on load
				$(".toggle_container").hide();
				//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
				$(".trigger").click(function(){
					$(this).toggleClass("active").next().slideToggle("slow");
						return false; //Prevent the browser jump to the link anchor
				});

			});
		</script>
	</head>
	<body>
		<?php require('./vistas/theme/header.php');

		$nombre = limpiarString($_POST['nombre']);
		$email = limpiarString($_POST['email']);
		$comentario = limpiarString($_POST['comentario']);
		$to = "feex5@hotmail.com";
		$subject = "Comentario de la Web ".URL_LINKS." de ". $nombre;
		$headers = "From: ".$email . "\r\n";


		mail($to,$subject,$comentario,$headers);

		?>
		<div class="single-page">
			<div class="artical-commentbox">
				<h2>Mensaje Enviado...Muchas Gracias</h2>
				<p><a href="<?php echo URL_LINKS; ?>">Regresar a home</a></p>
				<div class="clear"> </div>
				</div>
		</div>
	 </div>
</div>

		<?php require('./vistas/theme/foother.php'); ?>
