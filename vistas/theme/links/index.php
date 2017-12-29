<?php require('./vistas/theme/header.php');
		require_once($dir.'/controlador/ControladorLinks.php');
		$id_link=$_GET['id'];
		$links = new ControladorLinks();
		$arrayLink = $links->verLink($id_link);
		?>
		<div class="single-page">
			<div class="artical-commentbox">
				<h2><?php echo $arrayLink['titulo']; ?></h2>
					<div class="table-form">
						<p>
							<?php echo $arrayLink['texto'];
							if($arrayLink['media'] != ''){ ?>
								<img src="<?php echo MEDIA.'images/productos/'.$producto['media'];?>">
							<?php } ?>
						</p>
				</div>
				<div class="clear"> </div>
				</div>
		</div>
	 </div>
</div>

		<?php require('./vistas/theme/foother.php'); ?>
