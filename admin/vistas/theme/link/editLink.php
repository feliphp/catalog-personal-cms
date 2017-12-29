<?php require('./vistas/theme/header_adm.php');
session_start();
$id = $_GET['id'];
$dir = dirname(dirname(dirname(dirname(__FILE__))));
require_once($dir.'/controlador/ControladorLinks.php');
$link = new ControladorLinks();
$dataLink=$link->verLink($id);
?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <form id="rendered-form" method="post" action="<?php echo URL_LINKS; ?>admin/index.php?cargar=saveLink" enctype="multipart/form-data">
          <div class="rendered-form">

            <div class="fb-text form-group field-titulo">
              <label for="titulo" class="fb-text-label">Título</label>
              <input type="text" placeholder="Titulo" value="<?php echo $dataLink['titulo']; ?>" class="form-control" name="titulo" maxlength="150" id="titulo" title="Introduzca el Título">
            </div>

            <div class="fb-textarea form-group field-texto">
              <label for="texto" class="fb-textarea-label">Descripción (Texto)</label>
              <textarea type="textarea" placeholder="Texto" class="form-control" name="texto" rows="5" id="texto" title="Texto"><?php echo $dataLink['texto']; ?></textarea>
            </div>

            <div class="fb-file form-group field-media">
              <label for="media" class="fb-file-label">Media</label>
              <input type="hidden" value="<?php echo $dataLink['media']; ?>" class="form-control" name="media"  id="media">
              <input type="file" placeholder="Media" value="<?php echo $dataLink['media']; ?>" class="form-control" name="media" id="imagen" title="media">
            </div>
            <div class="fb-text form-group field-id">
              <input type="hidden" value="<?php echo $dataLink['id']; ?>" class="form-control" name="id"  id="id">
            </div>
            <div class="fb-button form-group field-button-aceptar">
              <button type="submit" class="btn btn-primary" name="button-editar-aceptar" value="Guardar Link" style="warning" id="button-aceptar">Guardar Link</button>
            </div>
          </div>
        </form>

    </section>
</section>
<!--main content end-->
<?php require('./vistas/theme/foother_adm.php'); ?>
