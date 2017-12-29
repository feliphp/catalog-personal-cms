		<?php require('./vistas/theme/header.php');
		require_once($dir.'/controlador/ControladorSistema.php');
		$sistema = new ControladorSistema();
		$arrayConfigSys = $sistema->verSistema(1);
		?>
		<div class="single-page">
			<div class="artical-commentbox">
				<?php if($arrayConfigSys['texto_contacto'] != '') { ?>
						<p>
								<?php echo $arrayConfigSys['texto_contacto']; ?><br>
						</p>
				<?php } ?>
				<h2>Ingresa un Comentario</h2>
					<div class="table-form">
					<form action="<?php echo URL_LINKS; ?>index.php?cargar=enviado" method="post" name="post_comment">
						<div>
							<label>Nombre<span>*</span></label>
							<input type="text" name="nombre">
						</div>
						<div>
							<label>Email<span>*</span></label>
							<input type="text" name="email">
						</div>
						<div>
							<label>Tu Comentario<span>*</span></label>
							<textarea name="comentario"> </textarea>
						</div>
						<input type="submit" value="Enviar Mensaje por e-mail">
					</form>

				</div>
				<div class="clear"> </div>
				</div>
		</div>
	 </div>
</div>

		<?php require('./vistas/theme/foother.php'); ?>
