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
        <form id="rendered-form" method="post" action="<?php echo URL_LINKS; ?>admin/index.php?cargar=saveUser">
          <div class="rendered-form">
            <div class="fb-text form-group field-username">
              <label for="username" class="fb-text-label">username<span class="fb-required">*</span></label>
              <input type="text" placeholder="Username" value="<?php echo $dataUser['username']; ?>" class="form-control" name="username" maxlength="50" id="username" title="Introduzca Username" required="required" aria-required="true">
            </div>
            <div class="fb-select form-group field-tipo">
              <label for="tipo" class="fb-select-label">Tipo</label>
              <select class="form-control" name="tipo" id="tipo">
                <option disabled="null" selected="null">Tipo</option>
                <?php if($dataUser['tipo']=='vende'){ ?>
                      <option value="vende" id="tipo-0" selected>Vendedor</option>
                <?php } else { ?>
                      <option value="vende" id="tipo-0">Vendedor</option>
                <?php } ?>
                <?php if($dataUser['tipo']=='compra'){ ?>
                      <option value="compra" id="tipo-1" selected>Comprador</option>
                <?php } else { ?>
                      <option value="compra" id="tipo-1">Comprador</option>
                <?php } ?>
                <?php if($dataUser['tipo']=='admin'){ ?>
                      <option value="admin" id="tipo-2" selected>Administrador</option>
                <?php } else { ?>
                      <option value="admin" id="tipo-2">Administrador</option>
                <?php } ?>
              </select>
            </div>
            <div class="fb-select form-group field-permisos">
              <label for="permisos" class="fb-select-label">Permisos</label>
              <select class="form-control" name="permisos" id="permisos">
                <option disabled="null" selected="null">Permisos</option>
                <?php if($dataUser['permisos']=='all'){ ?>
                      <option value="all" id="permisos-0" selected>Todos</option>
                <?php } else { ?>
                      <option value="all" id="permisos-0">Todos</option>
                <?php } ?>
                <?php if($dataUser['permisos']=='read'){ ?>
                      <option value="read" id="permisos-1" selected>leer</option>
                <?php } else { ?>
                      <option value="read" id="permisos-1">leer</option>
                <?php } ?>
                <?php if($dataUser['permisos']=='write'){ ?>
                      <option value="write" id="permisos-2" selected>escribir</option>
                <?php } else { ?>
                      <option value="write" id="permisos-2">escribir</option>
                <?php } ?>
              </select>
            </div>
            <div class="fb-text form-group field-email">
              <label for="email" class="fb-text-label">Email<span class="fb-required">*</span></label>
              <input type="email" placeholder="Email" value="<?php echo $dataUser['email']; ?>" class="form-control" name="email" maxlength="200" id="email" title="Ingresa un email válido  'mail@mail.com'" required="required" aria-required="true">
            </div>
            <div class="fb-text form-group field-nombre">
              <label for="nombre" class="fb-text-label">Nombre</label>
              <input type="text" placeholder="Nombre" value="<?php echo $dataUser['nombre']; ?>" class="form-control" name="nombre" maxlength="100" id="nombre" title="Ingresa Nombre">
            </div>
            <div class="fb-text form-group field-apellido">
              <label for="apellido" class="fb-text-label">Apellido</label>
              <input type="text" placeholder="Apellido" value="<?php echo $dataUser['apellido']; ?>" class="form-control" name="apellido" maxlength="100" id="apellido" title="Ingresa Apellido">
            </div>
            <div class="fb-text form-group field-telefono">
              <label for="telefono" class="fb-text-label">Teléfono</label>
              <input type="text" placeholder="Télefono" value="<?php echo $dataUser['telefono']; ?>" class="form-control" name="telefono" maxlength="25" id="telefono" title="Ingresa Teléfono">
            </div>
            <div class="fb-text form-group field-telefono_2">
              <label for="telefono_2" class="fb-text-label">Teléfono 2</label>
              <input type="text" placeholder="Télefono 2" value="<?php echo $dataUser['telefono_2']; ?>" class="form-control" name="telefono_2" maxlength="25" id="telefono_2" title="Ingresa Otro Teléfono">
            </div>
            <div class="fb-text form-group field-otro_contacto">
              <label for="otro_contacto" class="fb-text-label">Otro medio de Contácto</label>
              <input type="text" placeholder="Otro Contácto" value="<?php echo $dataUser['otro_contacto']; ?>" class="form-control" name="otro_contacto" maxlength="25" id="otro_contacto" title="Ingresa otro medio de Contácto">
            </div>
            <div class="fb-text form-group field-id">
              <input type="hidden" value="<?php echo $dataUser['id']; ?>" class="form-control" name="id"  id="id">
            </div>
            <div class="fb-button form-group field-button-aceptar">
              <button type="submit" class="btn btn-primary" name="button-editar-aceptar" value="Guardar Usuario" style="warning" id="button-aceptar">Guardar Usuario</button>
            </div>
          </div>
        </form>

    </section>
</section>
<!--main content end-->
<?php require('./vistas/theme/foother_adm.php'); ?>
