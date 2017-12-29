<?php require('./vistas/theme/header_adm.php');
session_start();
$id = $_GET['id'];
$dir = dirname(dirname(dirname(dirname(__FILE__))));
require_once($dir.'/controlador/ControladorSistema.php');
$sistema = new ControladorSistema();
$dataSys=$sistema->verSistema(1);
?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <form id="rendered-form" method="post" action="<?php echo URL_LINKS; ?>admin/index.php?cargar=saveSystem" enctype="multipart/form-data">
          <div class="rendered-form">

            <div class="fb-text form-group field-color_header">
              <label for="color_header" class="fb-text-label">Color Header</label>
              <input type="color" placeholder="Color Header" value="<?php echo $dataSys['color_header']; ?>" class="form-control" name="color_header" id="color_header" title="Color Header">
            </div>

            <div class="fb-text form-group field-color_content">
              <label for="color_content" class="fb-text-label">Color Fondo del Contenido</label>
              <input type="color" placeholder="Color Fondo del Contenido" value="<?php echo $dataSys['color_content']; ?>" class="form-control" name="color_content" id="color_content" title="Color Fondo del Contenido">
            </div>

            <div class="fb-file form-group field-logo">
              <label for="logo" class="fb-file-label">Logo</label>
              <input type="hidden" value="<?php echo $dataSys['logo']; ?>" class="form-control" name="logo"  id="logo">
              <input type="file" placeholder="Logo" value="<?php echo $dataSys['logo']; ?>" class="form-control" name="logo" id="logo" title="Logo">
            </div>

            <div class="fb-textarea form-group field-texto_header">
              <label for="texto_header" class="fb-textarea-label">Texto Header</label>
              <textarea type="textarea" placeholder="Texto Header"  class="form-control" name="texto_header" rows="5" id="texto_header" title="Texto Header"><?php echo $dataSys['texto_header']; ?></textarea>
            </div>

            <div class="fb-textarea form-group field-texto_contacto">
              <label for="texto_contacto" class="fb-textarea-label">Texto Contácto</label>
              <textarea type="textarea" placeholder="Texto Contacto"  class="form-control" name="texto_contacto" rows="5" id="texto_contacto" title="Texto Contacto"><?php echo $dataSys['texto_contacto']; ?></textarea>
            </div>

            <div class="fb-number form-group field-numero_categorias">
              <label for="numero_categorias" class="fb-number-label">Número de Categorias</label>
              <input type="number" placeholder="Número de Categorias" value="<?php echo $dataSys['numero_categorias']; ?>" class="form-control" name="numero_categorias"  id="numero_categorias" title="Introduzca el Número de Categorias">
            </div>

            <div class="fb-text form-group field-facebook">
              <label for="facebook" class="fb-text-label">Facebook</label>
              <input type="text" placeholder="Facebook" value="<?php echo $dataSys['facebook']; ?>" class="form-control" name="facebook" maxlength="230" id="facebook" title="Introduzca la cuenta facebook">
            </div>

            <div class="fb-text form-group field-seo_activar">
              <label for="seo_activar" class="fb-text-label">ACTIVAR SEO</label>
              <select class="form-control" name="seo_activar" id="seo_activar">
                <option disabled="null" selected="null">ACTIVAR SEO</option>
                <?php if($dataPro['seo_activar']=='si'){ ?>
                  <option value="si" id="seo_activar-0" selected>Sí</option>
                <?php } else { ?>
                  <option value="si" id="seo_activar-0">Sí</option>
                <?php } ?>
                <?php if($dataPro['seo_activar']=='no'){ ?>
                    <option value="no" id="seo_activar-1" selected>No</option>
                <?php } else { ?>
                    <option value="no" id="seo_activar-1">No</option>
                <?php } ?>
              </select>
            </div>

            <div class="fb-text form-group field-seo_title">
              <label for="seo_title" class="fb-text-label">SEO Title</label>
              <input type="text" placeholder="Title" value="<?php echo $dataSys['seo_title']; ?>" class="form-control" name="seo_title" maxlength="230" id="seo_title" title="Introduzca el Title para SEO">
            </div>

            <div class="fb-text form-group field-seo_description">
              <label for="seo_description" class="fb-text-label">SEO Descripción</label>
              <input type="text" placeholder="Descripción" value="<?php echo $dataSys['seo_description']; ?>" class="form-control" name="seo_description" maxlength="230" id="seo_description" title="Introduzca la descripción para SEO">
            </div>

            <div class="fb-text form-group field-seo_keywords">
              <label for="seo_keywords" class="fb-text-label">SEO Keywords</label>
              <input type="text" placeholder="Keywords" value="<?php echo $dataSys['seo_keywords']; ?>" class="form-control" name="seo_keywords" maxlength="230" id="seo_description" title="Introduzca las keywords para SEO">
            </div>

            <div class="fb-text form-group field-id">
              <input type="hidden" value="<?php echo $dataSys['id']; ?>" class="form-control" name="id"  id="id">
            </div>
            <div class="fb-button form-group field-button-aceptar">
              <button type="submit" class="btn btn-primary" name="button-editar-aceptar" value="Guardar Categoria" style="warning" id="button-aceptar">Guardar Configuraciones del Sistema</button>
            </div>
          </div>
        </form>

    </section>
</section>
<!--main content end-->
<?php require('./vistas/theme/foother_adm.php'); ?>
