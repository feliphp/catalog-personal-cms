<?php require('./vistas/theme/header.php');
		if($texto_header != ''){ ?>
		<div id="spc-texto-hedaer">&nbsp;</div>
		<div id="texto-hedaer">
				<?php echo $texto_header; ?>
		</div>
		<?php }
		require_once($dir.'/controlador/ControladorProductos.php');
		$productos = new ControladorProductos();
		$id_category = $_GET['categoria'];
		if($id_category == 'null'){
			$id_category = null;
		}
		$busca = $_GET['busca'];
		if(($id_category != '')||($id_category != null)){
			if(($busca != '')||($busca != null)){
				$rowProductos = $productos->index_busca($busca);
			} else {
				$rowProductos = $productos->index_id($id_category);
			}
		} else {
			if(($busca != '')||($busca != null)){
				$rowProductos = $productos->index_busca($busca);
			} else {
				$rowProductos = $productos->index();
			}
		}
		?>

			 <div id="main" role="main">
						<ul id="tiles">

							<!-- These are our grid blocks -->
							<?php foreach ($rowProductos as $losProductos) { ?>
									<li>
										<img src="<?php echo MEDIA.'thumbnails/'.$losProductos['imagen_chica'];?>" onclick="location.href='index.php?cargar=singleProducto&id_pro=<?php echo $losProductos['id'];?>'">
										<div class="post-info">
											<div class="post-basic-info">
												<h3><a href="index.php?cargar=singleProducto&id_pro=<?php echo $losProductos['id'];?>"><?php echo $losProductos['nombre']; ?></a></h3>
												<span><a href="index.php?cargar=singleProducto&id_pro=<?php echo $losProductos['id'];?>"><label> </label><?php echo $losProductos['clave_producto']; ?></a><span>
													<?php if($losProductos['tipo']=='nuevo'){
														echo "<span class='p_nuevo'> *Producto Nuevo </span>";
													} else if($losProductos['tipo']=='usado'){
														echo "<span class='p_usado'> Producto Usado </span>";
													}	else if($losProductos['tipo']=='apartar'){
														echo "<span class='p_apartar'> Apartar Producto </span>";
													}	else {
														echo "";
													}?>
												</span></span>
												<p><?php echo $losProductos['descripcion_corta']; ?></p>
												<div class="precio"><?php echo "$".money_format('%i',$losProductos['precio_unitario']); ?></div>
											</div>
											<div class="post-info-rate-share">
												<?php
												$starsArray = explode(":", $losProductos['rating']);
												$starsTotal = $starsArray[1];
												echo "<div class='rateit ec-stars-wrapper'>";
												switch($starsTotal){
													case $starsTotal < 25 && $starsTotal > 0:
															echo "<a class='activo' href='index.php?cargar=addStarsProducto&id_pro=".$losProductos['id']."&star=1'  title='Votar con 1 estrellas'>&#9733;</a>";
															echo "<a href='index.php?cargar=addStarsProducto&id_pro=".$losProductos['id']."&star=2'  title='Votar con 2 estrellas'>&#9733;</a>";
															echo "<a href='index.php?cargar=addStarsProducto&id_pro=".$losProductos['id']."&star=3'  title='Votar con 3 estrellas'>&#9733;</a>";
															echo "<a href='index.php?cargar=addStarsProducto&id_pro=".$losProductos['id']."&star=4'  title='Votar con 4 estrellas'>&#9733;</a>";
															echo "<a href='index.php?cargar=addStarsProducto&id_pro=".$losProductos['id']."&star=5'  title='Votar con 5 estrellas'>&#9733;</a>";
															break;
													case $starsTotal < 45 && $starsTotal > 26:
															echo "<a class='activo' href='index.php?cargar=addStarsProducto&id_pro=".$losProductos['id']."&star=1'  title='Votar con 1 estrellas'>&#9733;</a>";
															echo "<a class='activo' href='index.php?cargar=addStarsProducto&id_pro=".$losProductos['id']."&star=2'  title='Votar con 2 estrellas'>&#9733;</a>";
															echo "<a href='index.php?cargar=addStarsProducto&id_pro=".$losProductos['id']."&star=3'  title='Votar con 3 estrellas'>&#9733;</a>";
															echo "<a href='index.php?cargar=addStarsProducto&id_pro=".$losProductos['id']."&star=4'  title='Votar con 4 estrellas'>&#9733;</a>";
															echo "<a href='index.php?cargar=addStarsProducto&id_pro=".$losProductos['id']."&star=5'  title='Votar con 5 estrellas'>&#9733;</a>";
															break;
													case $starsTotal < 65 && $starsTotal > 46:
															echo "<a class='activo' href='index.php?cargar=addStarsProducto&id_pro=".$losProductos['id']."&star=1'  title='Votar con 1 estrellas'>&#9733;</a>";
															echo "<a class='activo' href='index.php?cargar=addStarsProducto&id_pro=".$losProductos['id']."&star=2'  title='Votar con 2 estrellas'>&#9733;</a>";
															echo "<a class='activo' href='index.php?cargar=addStarsProducto&id_pro=".$losProductos['id']."&star=3'  title='Votar con 3 estrellas'>&#9733;</a>";
															echo "<a href='index.php?cargar=addStarsProducto&id_pro=".$losProductos['id']."&star=4'  title='Votar con 4 estrellas'>&#9733;</a>";
															echo "<a href='index.php?cargar=addStarsProducto&id_pro=".$losProductos['id']."&star=5'  title='Votar con 5 estrellas'>&#9733;</a>";
															break;
													case $starsTotal < 85 && $starsTotal > 66:
															echo "<a class='activo' href='index.php?cargar=addStarsProducto&id_pro=".$losProductos['id']."&star=1'  title='Votar con 1 estrellas'>&#9733;</a>";
															echo "<a class='activo' href='index.php?cargar=addStarsProducto&id_pro=".$losProductos['id']."&star=2'  title='Votar con 2 estrellas'>&#9733;</a>";
															echo "<a class='activo' href='index.php?cargar=addStarsProducto&id_pro=".$losProductos['id']."&star=3'  title='Votar con 3 estrellas'>&#9733;</a>";
															echo "<a class='activo' href='index.php?cargar=addStarsProducto&id_pro=".$losProductos['id']."&star=4'  title='Votar con 4 estrellas'>&#9733;</a>";
															echo "<a href='index.php?cargar=addStarsProducto&id_pro=".$losProductos['id']."&star=5'  title='Votar con 5 estrellas'>&#9733;</a>";
															break;
													case $starsTotal < 100 && $starsTotal > 86:
															echo "<a class='activo' href='index.php?cargar=addStarsProducto&id_pro=".$losProductos['id']."&star=1'  title='Votar con 1 estrellas'>&#9733;</a>";
															echo "<a class='activo' href='index.php?cargar=addStarsProducto&id_pro=".$losProductos['id']."&star=2'  title='Votar con 2 estrellas'>&#9733;</a>";
															echo "<a class='activo' href='index.php?cargar=addStarsProducto&id_pro=".$losProductos['id']."&star=3'  title='Votar con 3 estrellas'>&#9733;</a>";
															echo "<a class='activo' href='index.php?cargar=addStarsProducto&id_pro=".$losProductos['id']."&star=4'  title='Votar con 4 estrellas'>&#9733;</a>";
															echo "<a class='activo' href='index.php?cargar=addStarsProducto&id_pro=".$losProductos['id']."&star=5'  title='Votar con 5 estrellas'>&#9733;</a>";
															break;
														default:
															echo "default";
													}
													echo "</div>";
												?>
												<?php
												 $tiitle = $carpeta= str_replace(' ','+',$losProductos['nombre']);
												 $deesc = $carpeta= str_replace(' ','+',$losProductos['descripcion_corta']);
												 $link = "https://www.facebook.com/sharer.php?s=100&p[url]=".URL_LINKS."index.php?cargar=singleProducto&id_pro=".$losProductos['id']."&p[title]=".$tiitle."&p[images][0]=".MEDIA.'thumbnails/'.$losProductos['imagen_chica']."&p[summary]=".$deesc;
												 $link2 = "https://www.facebook.com/sharer.php?s=100&p[url]=".MEDIA.'images/productos/'.$losProductos['imagen_mediana_1']."&p[images][0]=".MEDIA.'thumbnails/'.$losProductos['imagen_chica']."&p[summary]=".$deesc; ?>
												<a href="<?php echo $link2; ?>" target="_blank"><div class="post-share">
													<!-- https://www.facebook.com/sharer.php?s=100&p[url]=http://cafeyna.net/catalog/index.php?cargar=singleProducto&id_pro=1&p[title]=Sailor&p[images][0]=http://cafeyna.net/catalog/media/images/productos/101517_1935794351_pendienteSailorMooni1.png&p[summary]=moon-->
													<span></span>
												</div></a>
												<div class="clear"> </div>
											</div>
										</div>
									</li>
							<?php } ?>
							<!-- End of grid blocks -->
						</ul>
					</div>
			</div>
		</div>


		<?php require('./vistas/theme/foother.php'); ?>
