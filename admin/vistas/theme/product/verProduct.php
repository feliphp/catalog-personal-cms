<?php
require('./vistas/theme/header_adm.php');
session_start();
$id = $_GET['id'];
$dir = dirname(dirname(dirname(dirname(__FILE__))));
require_once($dir.'/controlador/ControladorProductos.php');
$producto = new ControladorProductos();
$dataPro=$producto->verProducto($id);
require_once($dir.'/controlador/ControladorCategorias.php');
$categoria = new ControladorCategorias();
$dataCat = $categoria->verCategoria($dataPro['categoria_id']);
?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-list-alt"></i> Productos </h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php?cargar=product">Home</a> / Ver producto</li>
					</ol>
				</div>
			</div>
      <div class="row">
          <div class="col-lg-12">
              <!--notification start-->
              <section class="panel">
                  <header class="panel-heading">
                    Tabla de Producto
                  </header>
                  <div class="panel-body">

                    <table class="table table-striped table-advance table-hover">
                        <thead>
                        <tr>
                            <td><strong>#</strong></td><td><?php echo $dataPro['id']; ?></td>
                        </tr><tr>
                            <td><strong>Nombre</strong></td><td><?php echo $dataPro['nombre']; ?></td>
                        </tr><tr>
                            <td><strong>Clave del Producto</strong></td><td><?php echo $dataPro['clave_producto']; ?></td>
                        </tr><tr>
                            <td><strong>Tipo</strong></td><td><?php echo $dataPro['tipo']; ?></td>
                        </tr><tr>
                            <td><strong>Disponible</strong></td><td><?php echo $dataPro['disponible']; ?></td>
                        </tr><tr>
                            <td><strong>Visible</strong></td><td><?php echo $dataPro['visible']; ?></td>
                        </tr><tr>
                            <td><strong>Descripción Corta</strong></td><td><?php echo $dataPro['descripcion_corta']; ?></td>
                        </tr><tr>
                            <td><strong>Descripción</strong></td><td><?php echo $dataPro['descripcion']; ?></td>
                        </tr><tr>
                            <td><strong>Tags</strong></td><td><?php echo $dataPro['tags']; ?></td>
                        </tr><tr>
                            <td><strong>Precio Unitario</strong></td><td><?php echo $dataPro['precio_unitario']; ?></td>
                        </tr><tr>
                            <td><strong>Descuento</strong></td><td><?php echo $dataPro['descuento']; ?></td>
                        </tr><tr>
                            <td><strong>Precio Descuento</strong></td><td><?php echo $dataPro['precio_descuento']; ?></td>
                        </tr><tr>
                            <td><strong>Precio Mayoreo</strong></td><td><?php echo $dataPro['precio_mayoreo']; ?></td>
                        </tr><tr>
                            <td><strong>Cantidad Mayoreo</strong></td><td><?php echo $dataPro['cantidad_mayoreo']; ?></td>
                        </tr><tr>
                            <td><strong>ID Categoria</strong></td><td><?php echo $dataCat['nombre']; ?></td>
                        </tr><tr>
                            <td><strong>Anchura</strong></td><td><?php echo $dataPro['anchura']; ?></td>
                        </tr><tr>
                            <td><strong>Altura</strong></td><td><?php echo $dataPro['altura']; ?></td>
                        </tr><tr>
                            <td><strong>Peso</strong></td><td><?php echo $dataPro['peso']; ?></td>
                        </tr><tr>
                            <td><strong>Inventario</strong></td><td><?php echo $dataPro['inventario']; ?></td>
                        </tr><tr>
                            <td><strong>Imagen Chica</strong></td><td><?php echo $dataPro['imagen_chica']; ?></td>
                        </tr><tr>
                            <td><strong>Imagen Mediana 1</strong></td><td><?php echo $dataPro['imagen_mediana_1']; ?></td>
                        </tr><tr>
                            <td><strong>Imagen Mediana 2</strong></td><td><?php echo $dataPro['imagen_mediana_2']; ?></td>
                        </tr><tr>
                            <td><strong>Imagen Mediana 3</strong></td><td><?php echo $dataPro['imagen_mediana_3']; ?></td>
                        </tr><tr>
                            <td><strong>Imagen Grande</strong></td><td><?php echo $dataPro['imagen_grande']; ?></td>
                        </tr><tr>
                            <td><strong>Video</strong></td><td><?php echo $dataPro['video']; ?></td>
                        </tr><tr>
                            <td><strong>Rating</strong></td><td><?php echo $dataPro['rating']; ?></td>
                        </tr><tr>
                            <td><strong>Item Extra</strong></td><td><?php echo $dataPro['item_extra']; ?></td>
                        </tr><tr>
                            <td><strong>Item Extra 2</strong></td><td><?php echo $dataPro['item_extra_2']; ?></td>
                        </tr><tr>
                            <td><strong>Valor Item Extra</strong></td><td><?php echo $dataPro['val_item_extra']; ?></td>
                        </tr><tr>
                            <td><strong>Valor Item Extra 2</strong></td><td><?php echo $dataPro['val_item_extra_2']; ?></td>
                        </tr>
                      </thead>
                    </tr>
                    </table>

                    <a class="btn btn-primary" href="<?php echo URL_LINKS; ?>admin/index.php?cargar=product" title="Bootstrap 3 themes generator"><span class="icon_gift"></span> Regresar</a>
                </div>
            </section>
            <!--notification end-->



        </div>

    </div>
</section>
</section>
<!--main content end-->
<?php require('./vistas/theme/foother_adm.php'); ?>
