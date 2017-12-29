<?php require('./vistas/theme/header_adm.php');
session_start();
$id = $_GET['id'];
$dir = dirname(dirname(dirname(dirname(__FILE__))));
require_once($dir.'/controlador/ControladorUsuarios.php');
$usuario = new ControladorUsuarios();
$dataUser=$usuario->verUsuario($id);
?>


      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-list-alt"></i> Users</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php?cargar=inicio">Home</a> / Ver usuario</li>
					</ol>
				</div>
			</div>
      <div class="row">
          <div class="col-lg-12">
              <!--notification start-->
              <section class="panel">
                  <header class="panel-heading">
                    Tabla de Usuario
                  </header>
                  <div class="panel-body">

                    <table class="table table-striped table-advance table-hover">
                        <thead>
                        <tr>
                            <td><strong>#</strong></td><td><?php echo $dataUser['id']; ?></td>
                        </tr><tr>
                            <td><strong>Username</strong></td><td><?php echo $dataUser['username']; ?></td>
                        </tr><tr>
                            <td><strong>Tipo</strong></td><td><?php echo $dataUser['tipo']; ?></td>
                        </tr><tr>
                            <td><strong>Permisos</strong></td><td><?php echo $dataUser['permisos']; ?></td>
                        </tr><tr>
                            <td><strong>Email</strong></td><td><?php echo $dataUser['email']; ?></td>
                        </tr><tr>
                            <td><strong>Nombre</strong></td><td><?php echo $dataUser['nombre']; ?></td>
                        </tr><tr>
                            <td><strong>Apellido</strong></td><td><?php echo $dataUser['apellido']; ?></td>
                        </tr><tr>
                            <td><strong>Teléfono</strong></td><td><?php echo $dataUser['telefono']; ?></td>
                        </tr><tr>
                            <td><strong>Teléfono 2</strong></td><td><?php echo $dataUser['telefono_2']; ?></td>
                        </tr><tr>
                            <td><strong>Otro</strong></td><td><?php echo $dataUser['otro_contacto']; ?></td>
                        </tr>
                      </thead>
                    </tr>
                    </table>

                    <a class="btn btn-primary" href="<?php echo URL_LINKS; ?>admin/index.php?cargar=inicio" title="Bootstrap 3 themes generator"><span class="icon_profile"></span> Regresar</a>
                </div>
            </section>
            <!--notification end-->



        </div>

    </div>
</section>
</section>
<!--main content end-->
<?php require('./vistas/theme/foother_adm.php'); ?>
