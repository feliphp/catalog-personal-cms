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
              <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-cog"></i> System</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php?cargar=inicio">Home</a> / Ver Sistema</li>
					</ol>
				</div>
			</div>
      <div class="row">
          <div class="col-lg-12">
              <!--notification start-->
              <section class="panel">
                  <header class="panel-heading">
                    Propiedades del Sistema
                  </header>
                  <div class="panel-body">

                    <table class="table table-striped table-advance table-hover">
                        <thead>
                        <tr>
                            <td><strong>#</strong></td><td><?php echo $dataSys['id']; ?></td>
                        </tr><tr>
                            <td><strong>Color Header</strong></td><td><?php echo $dataSys['color_header']; ?></td>
                        </tr><tr>
                            <td><strong>Color Content</strong></td><td><?php echo $dataSys['color_content']; ?></td>
                        </tr><tr>
                            <td><strong>Imagen (logo)</strong></td><td><?php echo $dataSys['logo']; ?></td>
                        </tr><tr>
                            <td><strong>Texto del Header (Home)</strong></td><td><?php echo $dataSys['texto_header']; ?></td>
                        </tr><tr>
                            <td><strong>Texto en Sección Contácto</strong></td><td><?php echo $dataSys['texto_contacto']; ?></td>
                        </tr><tr>
                            <td><strong>Número de Categorias a mostrar</strong></td><td><?php echo $dataSys['numero_categorias']; ?></td>
                        </tr><tr>
                            <td><strong>Cuenta de Facebook Asociada </strong></td><td><?php echo $dataSys['facebook']; ?></td>
                        </tr><tr>
                            <td><strong> SEO Activo </strong></td><td><?php echo $dataSys['seo_activar']; ?></td>
                        </tr><tr>
                            <td><strong> SEO Titulo </strong></td><td><?php echo $dataSys['seo_title']; ?></td>
                        </tr><tr>
                            <td><strong> SEO Descripción </strong></td><td><?php echo $dataSys['seo_description']; ?></td>
                        </tr><tr>
                            <td><strong> SEO Keywords </strong></td><td><?php echo $dataSys['seo_keywords']; ?></td>
                        </tr>
                      </thead>
                    </tr>
                    </table>

                    <a class="btn btn-primary" href="<?php echo URL_LINKS; ?>admin/index.php?cargar=editSystem" title="Bootstrap 3 themes generator"><span class="icon_cogs"></span> Editar</a>
                </div>
            </section>
            <!--notification end-->



        </div>

    </div>
</section>
</section>
<!--main content end-->
<?php require('./vistas/theme/foother_adm.php'); ?>
