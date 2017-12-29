<?php require('./vistas/theme/header_adm.php'); ?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <form id="rendered-form" method="post" action="<?php echo URL_LINKS; ?>admin/index.php?cargar=saveCategory" enctype="multipart/form-data">
          <div class="rendered-form">
            <div class="fb-text form-group field-nombre">
              <label for="nombre" class="fb-text-label">Nombre<span class="fb-required">*</span></label>
              <input type="text" placeholder="Nombre" class="form-control" name="nombre" maxlength="50" id="nombre" title="Introduzca el Nombre de la Categoría" required="required" aria-required="true">
            </div>
            <div class="fb-textarea form-group field-descripcion">
              <label for="descripcion" class="fb-textarea-label">Descripción</label>
              <textarea type="textarea" placeholder="Descripción" class="form-control" name="descripcion" rows="5" id="descripcion" title="Descripción"></textarea>
            </div>
            <div class="fb-file form-group field-imagen">
              <label for="imagen" class="fb-file-label">Imagen</label>
              <input type="file" placeholder="Imagen" class="form-control" name="imagen" id="imagen" title="Imagen">
            </div>
            <div class="fb-button form-group field-button-aceptar">
              <button type="submit" class="btn btn-primary" name="button-aceptar" value="Guardar Categoría" style="warning" id="button-aceptar">Guardar Categoría</button>
            </div>
          </div>
        </form>

    </section>
</section>
<!--main content end-->
<?php require('./vistas/theme/foother_adm.php'); ?>
