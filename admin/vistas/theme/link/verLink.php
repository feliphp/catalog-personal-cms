<?php require('./vistas/theme/header_adm.php');
session_start();
$id = $_GET['id'];
$dir = dirname(dirname(dirname(dirname(__FILE__))));
require_once($dir.'/controlador/ControladorLinks.php');
$link = new ControladorLinks();
$dataLin=$link->verLink($id);
?>


      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-fa-external-link"></i> Links</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php?cargar=inicio">Home</a> / Ver Link</li>
					</ol>
				</div>
			</div>
      <div class="row">
          <div class="col-lg-12">
              <!--notification start-->
              <section class="panel">
                  <header class="panel-heading">
                    Tabla de Link
                  </header>
                  <div class="panel-body">

                    <table class="table table-striped table-advance table-hover">
                        <thead>
                        <tr>
                            <td><strong>#</strong></td><td><?php echo $dataLin['id']; ?></td>
                        </tr><tr>
                            <td><strong>Títitulo</strong></td><td><?php echo $dataLin['titulo']; ?></td>
                        </tr><tr>
                            <td><strong>Texto</strong></td><td><?php echo $dataLin['texto']; ?></td>
                        </tr><tr>
                            <td><strong>Media</strong></td><td><?php echo $dataLin['media']; ?></td>
                        </tr>
                      </thead>
                    </tr>
                    </table>

                    <a class="btn btn-primary" href="<?php echo URL_LINKS; ?>admin/index.php?cargar=link" title="Bootstrap 3 themes generator"><span class="icon_link"></span> Regresar</a>
                </div>
            </section>
            <!--notification end-->



        </div>

    </div>
</section>
</section>
<!--main content end-->
<?php require('./vistas/theme/foother_adm.php'); ?>
