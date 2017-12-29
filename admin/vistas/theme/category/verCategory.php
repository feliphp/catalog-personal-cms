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
              <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-list-alt"></i> Categories</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php?cargar=inicio">Home</a> / Ver categoría</li>
					</ol>
				</div>
			</div>
      <div class="row">
          <div class="col-lg-12">
              <!--notification start-->
              <section class="panel">
                  <header class="panel-heading">
                    Tabla de Categoría
                  </header>
                  <div class="panel-body">

                    <table class="table table-striped table-advance table-hover">
                        <thead>
                        <tr>
                            <td><strong>#</strong></td><td><?php echo $dataCat['id']; ?></td>
                        </tr><tr>
                            <td><strong>Nombre</strong></td><td><?php echo $dataCat['nombre']; ?></td>
                        </tr><tr>
                            <td><strong>Descripción</strong></td><td><?php echo $dataCat['descripcion']; ?></td>
                        </tr><tr>
                            <td><strong>Imagen</strong></td><td><?php echo $dataCat['imagen']; ?></td>
                        </tr>
                      </thead>
                    </tr>
                    </table>

                    <a class="btn btn-primary" href="<?php echo URL_LINKS; ?>admin/index.php?cargar=category" title="Bootstrap 3 themes generator"><span class="icon_ol"></span> Regresar</a>
                </div>
            </section>
            <!--notification end-->



        </div>

    </div>
</section>
</section>
<!--main content end-->
<?php require('./vistas/theme/foother_adm.php'); ?>
