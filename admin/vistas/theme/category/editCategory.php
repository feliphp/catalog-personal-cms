<?php require('./vistas/theme/header_adm.php');
session_start();
$id = $_GET['id'];
$dir = dirname(dirname(dirname(dirname(__FILE__))));
require_once($dir.'/controlador/ControladorCategorias.php');
$categoria = new ControladorCategorias();
$dataCat=$categoria->verCategoria($id);
?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <form id="rendered-form" method="post" action="<?php echo URL_LINKS; ?>admin/index.php?cargar=saveCategory" enctype="multipart/form-data">
          <div class="rendered-form">

            <div class="fb-text form-group field-nombre">
              <label for="nombre" class="fb-text-label">Nombre<span class="fb-required">*</span></label>
              <input type="text" placeholder="Nombre" value="<?php echo $dataCat['nombre']; ?>" class="form-control" name="nombre" maxlength="50" id="nombre" title="Introduzca el Nombre de la Categoría" required="required" aria-required="true">
            </div>
            <div class="fb-textarea form-group field-descripcion">
              <label for="descripcion" class="fb-textarea-label">Descripción</label>
              <textarea type="textarea" placeholder="Descripción"  class="form-control" name="descripcion" rows="5" id="descripcion" title="Descripción"><?php echo $dataCat['descripcion']; ?></textarea>
            </div>
            <div class="fb-file form-group field-imagen">
              <label for="imagen" class="fb-file-label">Imagen</label>
              <input type="hidden" value="<?php echo $dataCat['imagen']; ?>" class="form-control" name="imagen"  id="imagen">
              <input type="file" placeholder="Imagen" value="<?php echo $dataCat['imagen']; ?>" class="form-control" name="imagen" id="imagen" title="Imagen">
            </div>
            <div class="fb-text form-group field-id">
              <input type="hidden" value="<?php echo $dataCat['id']; ?>" class="form-control" name="id"  id="id">
            </div>
            <div class="fb-button form-group field-button-aceptar">
              <button type="submit" class="btn btn-primary" name="button-editar-aceptar" value="Guardar Categoria" style="warning" id="button-aceptar">Guardar Categoria</button>
            </div>
          </div>
        </form>

    </section>
</section>
<!--main content end-->
<?php require('./vistas/theme/foother_adm.php'); ?>
