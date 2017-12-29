<?php require('./vistas/theme/header_adm.php');
session_start();
$id = $_GET['id'];
$dir = dirname(dirname(dirname(dirname(__FILE__))));
require_once($dir.'/controlador/ControladorProductos.php');
$producto = new ControladorProductos();
$dataPro=$producto->verProducto($id);
require_once($dir.'/controlador/ControladorCategorias.php');
$categoria = new ControladorCategorias();
$dataCat = $categoria->verCategoria($dataPro['categoria_id']);
$rowcategorias = $categoria->index();
?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <form id="rendered-form" method="post" action="<?php echo URL_LINKS; ?>admin/index.php?cargar=saveProduct" enctype="multipart/form-data">
          <div class="rendered-form">
            <div class="rendered-form">
              <div class="fb-text form-group field-nombre">
                <label for="nombre" class="fb-text-label">Nombre<span class="fb-required">*</span></label>
                <input type="text" placeholder="Nombre" value="<?php echo $dataPro['nombre']; ?>" class="form-control" name="nombre" maxlength="200" id="nombre" title="Introduzca el Nombre de la Categoría" required="required" aria-required="true">
              </div>
              <div class="fb-text form-group field-clave_producto">
                <label for="clave_producto" class="fb-text-label">Clave del Producto<span class="fb-required">*</span></label>
                <input type="text" placeholder="Clave del Producto" value="<?php echo $dataPro['clave_producto']; ?>" class="form-control" name="clave_producto" maxlength="25" id="clave_producto" title="Introduzca la Clave del Producto" required="required" aria-required="true">
              </div>
              <div class="fb-select form-group field-tipo">
                <label for="tipo" class="fb-select-label">Tipo</label>
                <select class="form-control" name="tipo" id="tipo">
                  <option disabled="null" selected="null">Tipo</option>
                  <?php if($dataPro['tipo']=='nuevo'){ ?>
                    <option value="nuevo" id="tipo-0" selected>Nuevo</option>
                  <?php } else { ?>
                    <option value="nuevo" id="tipo-0">Nuevo</option>
                  <?php } ?>
                  <?php if($dataPro['tipo']=='usado'){ ?>
                      <option value="usado" id="tipo-1" selected>Usado</option>
                  <?php } else { ?>
                      <option value="usado" id="tipo-1">Usado</option>
                  <?php } ?>
                  <?php if($dataPro['tipo']=='apartar'){ ?>
                    <option value="apartar" id="tipo-2" selected>Para Apartar</option>
                  <?php } else { ?>
                    <option value="apartar" id="tipo-2">Para Apartar</option>
                  <?php } ?>
                  <?php if($dataPro['tipo']=='otro'){ ?>
                    <option value="otro" id="tipo-3" selected>Otro</option>
                  <?php } else { ?>
                    <option value="otro" id="tipo-3">Otro</option>
                  <?php } ?>
                </select>
              </div>
              <div class="fb-select form-group field-disponible">
                <label for="disponible" class="fb-select-label">Disponible</label>
                <select class="form-control" name="disponible" id="disponible">
                  <option disabled="null" selected="null">Disponible</option>
                  <?php if($dataPro['disponible']=='1'){ ?>
                    <option value="1" id="disponible-0" selected>Sí</option>
                  <?php } else { ?>
                    <option value="1" id="disponible-0">Sí</option>
                  <?php } ?>
                  <?php if($dataPro['disponible']=='no'){ ?>
                      <option value="0" id="disponible-1" selected>No</option>
                  <?php } else { ?>
                      <option value="0" id="disponible-1">No</option>
                  <?php } ?>
                </select>
              </div>
              <div class="fb-select form-group field-visible">
                <label for="visible" class="fb-select-label">Visible</label>
                <select class="form-control" name="visible" id="visible">
                  <option disabled="null" selected="null">Visible</option>
                  <?php if($dataPro['visible']=='1'){ ?>
                    <option value="1" id="visible-0" selected>Sí</option>
                  <?php } else { ?>
                    <option value="1" id="visible-0">Sí</option>
                  <?php } ?>
                  <?php if($dataPro['visible']=='no'){ ?>
                      <option value="0" id="visible-1" selected>No</option>
                  <?php } else { ?>
                      <option value="0" id="visible-1">No</option>
                  <?php } ?>
                </select>
              </div>
              <div class="fb-text form-group field-descripcion_corta">
                <label for="descripcion_corta" class="fb-text-label">Descripcion Corta</label>
                <input type="text" placeholder="Descripcion Corta" value="<?php echo $dataPro['descripcion_corta']; ?>" class="form-control" name="descripcion_corta" maxlength="200" id="descripcion_corta" title="Introduzca la Descripcion Corta">
              </div>
              <div class="fb-textarea form-group field-descripcion">
                <label for="descripcion" class="fb-textarea-label">Descripción</label>
                <textarea type="textarea" placeholder="Descripción"  class="form-control" name="descripcion" rows="5" id="descripcion" title="Descripción"><?php echo $dataPro['descripcion']; ?></textarea>
              </div>
              <div class="fb-text form-group field-tags">
                <label for="tags" class="fb-text-label">Tags</label>
                <input type="text" placeholder="Tags" class="form-control" value="<?php echo $dataPro['tags']; ?>" name="tags" maxlength="200" id="tags" title="Introduzca los Tags separados por (,) para busquedas.">
              </div>
              <div class="fb-number form-group field-precio_unitario">
                <label for="precio_unitario" class="fb-number-label">Precio Unitario</label>
                <input type="number" placeholder="Precio Unitario" value="<?php echo $dataPro['precio_unitario']; ?>" class="form-control" name="precio_unitario"  id="precio_unitario" title="Introduzca el Precio Unitario">
              </div>
              <div class="fb-number form-group field-descuento">
                <label for="descuento" class="fb-number-label">Descuento</label>
                <input type="number" placeholder="Descuento" value="<?php echo $dataPro['descuento']; ?>" class="form-control" name="descuento" id="descuento" title="Introduzca el descuento">
              </div>
              <div class="fb-number form-group field-precio_descuento">
                <label for="precio_descuento" class="fb-number-label">Precio Con Descuento</label>
                <input type="number" placeholder="Precio Descuento" value="<?php echo $dataPro['precio_descuento']; ?>" class="form-control" name="precio_descuento"  id="precio_descuento" title="Introduzca el Precio con Descuento">
              </div>
              <div class="fb-number form-group field-precio_mayoreo">
                <label for="precio_mayoreo" class="fb-number-label">Precio al Mayoreo</label>
                <input type="number" placeholder="Precio al Mayoreo" value="<?php echo $dataPro['precio_mayoreo']; ?>" class="form-control" name="precio_mayoreo"  id="precio_mayoreo" title="Introduzca el Precio al Mayoreo">
              </div>
              <div class="fb-number form-group field-cantidad_mayoreo">
                <label for="cantidad_mayoreo" class="fb-number-label">Cantidad para Mayoreo</label>
                <input type="number" placeholder="cantidad_mayoreo" value="<?php echo $dataPro['cantidad_mayoreo']; ?>" class="form-control" name="cantidad_mayoreo" id="cantidad_mayoreo" title="Introduzca la Cantidad para aplicar el Mayoreo">
              </div>
              <div class="fb-text form-group field-categoria_id">
                <label for="categoria_id" class="fb-text-label">Categoría</label>
                <select class="form-control" name="categoria_id" id="categoria_id">
                  <option value="<?php echo $dataCat['id']; ?>"><?php  echo $dataCat['nombre']; ?></option>
                  <?php
                    foreach ($rowcategorias as $lacategoria) {
                          echo "<option value='".$lacategoria['id']."'>".$lacategoria['nombre']."</option>";
                    }
                   ?>
                </select>
              </div>
              <div class="fb-text form-group field-altura">
                <label for="altura" class="fb-text-label">Altura</label>
                <input type="text" placeholder="Altura" value="<?php echo $dataPro['altura']; ?>"  class="form-control" name="altura" maxlength="40" id="altura" title="Introduzca la altura">
              </div>
              <div class="fb-text form-group field-anchura">
                <label for="anchura" class="fb-text-label">Anchura</label>
                <input type="text" placeholder="Anchura" value="<?php echo $dataPro['anchura']; ?>" class="form-control" name="anchura" maxlength="30" id="categoria_id" title="Introduzca la anchura">
              </div>
              <div class="fb-text form-group field-peso">
                <label for="peso" class="fb-text-label">Peso</label>
                <input type="text" placeholder="Peso" value="<?php echo $dataPro['peso']; ?>" class="form-control" name="peso" maxlength="20" id="peso" title="Introduzca el Peso">
              </div>
              <div class="fb-number form-group field-inventario">
                <label for="inventario" class="fb-number-label">Inventario</label>
                <input type="number" placeholder="Inventario" value="<?php echo $dataPro['inventario']; ?>" class="form-control" name="inventario" id="inventario" title="Introduzca la cantidad de Productos">
              </div>
              <div class="fb-file form-group field-imagen_chica">
                <label for="imagen_chica" class="fb-file-label">Imagen Chica</label>
                <input type="hidden" value="<?php echo $dataPro['imagen_chica']; ?>" class="form-control" name="imagen_chica"  id="imagen_chica">
                <input type="file" placeholder="Imagen Chica" value="<?php echo $dataPro['imagen_chica']; ?>" class="form-control" name="imagen_chica" id="imagen_chica" title="Introduzca la imagen pequeña">
              </div>
              <div class="fb-file form-group field-imagen_mediana_1">
                <label for="imagen_mediana_1" class="fb-file-label">Imagen Mediana 1</label>
                <input type="hidden" value="<?php echo $dataPro['imagen_mediana_1']; ?>" class="form-control" name="imagen_mediana_1"  id="imagen_mediana_1">
                <input type="file" placeholder="Imagen Mediana 1" value="<?php echo $dataPro['imagen_mediana_1']; ?>" class="form-control" name="imagen_mediana_1" id="imagen_mediana_1" title="Introduzca la imagen mediana 1">
              </div>
              <div class="fb-file form-group field-imagen_mediana_2">
                <label for="imagen_mediana_2" class="fb-file-label">Imagen Mediana 2</label>
                <input type="hidden" value="<?php echo $dataPro['imagen_mediana_2']; ?>" class="form-control" name="imagen_mediana_2"  id="imagen_mediana_2">
                <input type="file" placeholder="Imagen Mediana 2" value="<?php echo $dataPro['imagen_mediana_2']; ?>" class="form-control" name="imagen_mediana_2" id="imagen_mediana_2" title="Introduzca la imagen mediana 2">
              </div>
              <div class="fb-file form-group field-imagen_mediana_3">
                <label for="imagen_mediana_3" class="fb-file-label">Imagen Mediana 3</label>
                <input type="hidden" value="<?php echo $dataPro['imagen_mediana_3']; ?>" class="form-control" name="imagen_mediana_3"  id="imagen_mediana_3">
                <input type="file" placeholder="Imagen Mediana 3" value="<?php echo $dataPro['imagen_mediana_3']; ?>" class="form-control" name="imagen_mediana_3" id="imagen_mediana_3" title="Introduzca la imagen mediana 3">
              </div>
              <div class="fb-file form-group field-imagen_grande">
                <label for="imagen_grande" class="fb-file-label">Imagen Grande</label>
                <input type="hidden" value="<?php echo $dataPro['imagen_grande']; ?>" class="form-control" name="imagen_grande"  id="imagen_grande">
                <input type="file" placeholder="Imagen Grande" value="<?php echo $dataPro['imagen_grande']; ?>" class="form-control" name="imagen_grande" id="imagen_grande" title="Introduzca la imagen grande">
              </div>
              <div class="fb-file form-group field-video">
                <label for="video" class="fb-file-label">Video<span class="tooltip-element" tooltip="Video">?</span></label>
                <input type="text" placeholder="Video" value="<?php echo $dataPro['video']; ?>" class="form-control" name="video" maxlength="200" id="video" title="Ingresa liga de Video de Youtube">
              </div>
              <div class="fb-number form-group field-rating">
                <label for="rating" class="fb-number-label">Rating</label>
                <input type="number" placeholder="Rating" value="<?php echo $dataPro['rating']; ?>" class="form-control" name="rating" id="rating" title="Introduzca el rating">
              </div>
              <div class="fb-text form-group field-item_extra">
                <label for="item_extra" class="fb-text-label">Item Extra</label>
                <input type="text" placeholder="Item Extra" value="<?php echo $dataPro['item_extra']; ?>" class="form-control" name="item_extra" maxlength="200" id="item_extra" title="Introduzca Item Extra">
              </div>
              <div class="fb-text form-group field-item_extra_2">
                <label for="item_extra_2" class="fb-text-label">Item Extra 2</label>
                <input type="text" placeholder="Item Extra 2" value="<?php echo $dataPro['item_extra_2']; ?>" class="form-control" name="item_extra_2" maxlength="200" id="item_extra_2" title="Introduzca Item Extra 2">
              </div>
              <div class="fb-text form-group field-val_item_extra">
                <label for="val_item_extra" class="fb-text-label">Valor Item Extra</label>
                <input type="text" placeholder="Valor Item Extra" value="<?php echo $dataPro['val_item_extra']; ?>" class="form-control" name="val_item_extra" maxlength="100" id="val_item_extra" title="Introduzca Valor del Item Extra">
              </div>
              <div class="fb-text form-group field-val_item_extra_2">
                <label for="val_item_extra_2" class="fb-text-label">Valor Item Extra 2</label>
                <input type="text" placeholder="Valor Item Extra 2" value="<?php echo $dataPro['val_item_extra_2']; ?>" class="form-control" name="val_item_extra_2" maxlength="100" id="val_item_extra_2" title="Introduzca Valor del Item Extra 2">
              </div>
            <div class="fb-text form-group field-id">
              <input type="hidden" value="<?php echo $dataPro['id']; ?>" class="form-control" name="id"  id="id">
            </div>
            <div class="fb-button form-group field-button-aceptar">
              <button type="submit" class="btn btn-primary" name="button-editar-aceptar" value="Guardar Producto" style="warning" id="button-aceptar">Guardar Producto</button>
            </div>
          </div>
        </form>

    </section>
</section>
<!--main content end-->
<?php require('./vistas/theme/foother_adm.php'); ?>
