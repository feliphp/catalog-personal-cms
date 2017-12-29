<?php require('./vistas/theme/header.php');
		$id = $_GET['id_pro'];
		require_once($dir.'/controlador/ControladorProductos.php');
		$productos = new ControladorProductos();
		$producto = $productos->verProducto($id);
		?>
		<div class="single-page">
					 <div class="single-page-artical">
						 <div class="artical-content">
							 <?php if($producto['imagen_grande'] == '') { ?>
							 <img src="<?php echo MEDIA.'images/default_grande.jpg';?>" title="<?php echo $producto['clave_producto']; ?>">
						 	 <?php } else { ?>
							 <img src="<?php echo MEDIA.'images/productos/'.$producto['imagen_grande'];?>" title="<?php echo $producto['clave_producto']; ?>">
							 <?php } ?>
							 <h3><?php echo $producto['nombre']." / ".$producto['clave_producto']; ?></h3>
							 <?php if($producto['tipo']=='nuevo'){
								 echo "<span class='p_nuevo'> *Producto Nuevo </span>";
							 } else if($producto['tipo']=='usado'){
								 echo "<span class='p_usado'> Producto Usado </span>";
							 }	else if($producto['tipo']=='apartar'){
								 echo "<span class='p_apartar'> Apartar Producto </span>";
							 }	else {
								 echo "";
							 }?>
							 <p>
								 <?php echo $producto['descripcion']; ?><br>
								 <?php if($producto['anchura'] != '') { ?>
									 <?php echo "Anchura: ".$producto['anchura']; ?><br>
								 <?php } ?>
								 <?php if($producto['altura'] != '') { ?>
									 <?php echo "Altura: ".$producto['altura']; ?><br>
								 <?php } ?>
								 <?php if($producto['peso'] != '') { ?>
 									<?php echo "Peso: ".$producto['peso']; ?><br>
 								<?php } ?>
							</p>
							<div id="image-med-1">
								<?php if($producto['imagen_mediana_1'] != '') { ?>
								<img src="<?php echo MEDIA.'images/productos/'.$producto['imagen_mediana_1'];?>">
								<?php } ?>
								<?php if($producto['imagen_mediana_2'] != '') { ?>
								<img src="<?php echo MEDIA.'images/productos/'.$producto['imagen_mediana_2'];?>">
								<?php } ?>
							</div>

								<p>
									<?php if($producto['descuento'] == 0) { ?>
										Precio Unitario: <strong><?php echo "$".$producto['precio_unitario']." MXN"; ?></strong>
									<?php } else { ?>
										Precio Con Descuento: <strong><?php echo "$".$producto['precio_descuento']." MXN"; ?></strong>
									<?php } ?>
									<br>
									<?php if($producto['cantidad_mayoreo'] != 0) { ?>
										Precio al Mayoreo: <strong><?php echo "$".$producto['precio_mayoreo']." MXN"; ?></strong> / <?php echo $producto['cantidad_mayoreo']." piezas"; ?>
									<?php } ?>
									<?php if($producto['inventario'] != 0) { ?>
										Inventario : <?php echo $producto['inventario']; ?>
									<?php } ?>
								</p>
								<?php if($producto['imagen_mediana_3'] != '') { ?>
										<img src="<?php echo MEDIA.'images/productos/'.$producto['imagen_mediana_3'];?>">
								<?php } ?>
								<p>
									<?php
									 if($producto['item_extra'] != '') {
										echo $producto['item_extra']." : ".$producto['val_item_extra'];
									 }
									 if($producto['item_extra_2'] != '') {
										 echo $producto['item_extra_2']." : ".$producto['val_item_extra_2'];
 									 }
									 if($producto['video'] != '') {
										 echo "Video : ".$producto['video'];
										 echo "Rating : ".$producto['rating'];
 									 }
									 ?>
								</p>
							</div>
						</div>
							<div class="clear"> </div>
			</div>

	 </div>
</div>

		<?php require('./vistas/theme/foother.php'); ?>
