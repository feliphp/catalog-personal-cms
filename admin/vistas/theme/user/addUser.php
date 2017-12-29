<?php require('./vistas/theme/header_adm.php'); ?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <form id="rendered-form" method="post" action="<?php echo URL_LINKS; ?>admin/index.php?cargar=saveUser">
          <div class="rendered-form">
            <div class="fb-text form-group field-username">
              <label for="username" class="fb-text-label">username<span class="fb-required">*</span></label>
              <input type="text" placeholder="Username" class="form-control" name="username" maxlength="50" id="username" title="Introduzca Username (Solo carácteres alfanuméricos)" required="required" aria-required="true">
            </div>
            <div class="fb-text form-group field-password">
              <label for="password" class="fb-text-label">Password<span class="fb-required">*</span></label>
              <input type="password" placeholder="Password" class="form-control" name="password" maxlength="25" id="password" title="Introduzca Una contraseña Fuerte (Solo carácteres alfanuméricos)" required="required" aria-required="true">
            </div>
            <div class="fb-select form-group field-tipo">
              <label for="tipo" class="fb-select-label">Tipo</label>
              <select class="form-control" name="tipo" id="tipo">
                <option disabled="null" selected="null">Tipo</option>
                <option value="vende" id="tipo-0">Vendedor</option>
                <option value="compra" id="tipo-1">Comprador</option>
                <option value="admin" id="tipo-2">Administrador</option>
              </select>
            </div>
            <div class="fb-select form-group field-permisos">
              <label for="permisos" class="fb-select-label">Permisos</label>
              <select class="form-control" name="permisos" id="permisos">
                <option disabled="null" selected="null">Permisos</option>
                <option value="all" id="permisos-0">Todos</option>
                <option value="read" id="permisos-1">leer</option>
                <option value="write" id="permisos-2">escribir</option>
              </select>
            </div>
            <div class="fb-text form-group field-email">
              <label for="email" class="fb-text-label">Email<span class="fb-required">*</span></label>
              <input type="email" placeholder="Email" class="form-control" name="email" maxlength="200" id="email" title="Ingresa un email válido  'mail@mail.com'" required="required" aria-required="true">
            </div>
            <div class="fb-text form-group field-nombre">
              <label for="nombre" class="fb-text-label">Nombre</label>
              <input type="text" placeholder="Nombre" class="form-control" name="nombre" maxlength="100" id="nombre" title="Ingresa Nombre">
            </div>
            <div class="fb-text form-group field-apellido">
              <label for="apellido" class="fb-text-label">Apellido</label>
              <input type="text" placeholder="Apellido" class="form-control" name="apellido" maxlength="100" id="apellido" title="Ingresa Apellido">
            </div>
            <div class="fb-text form-group field-telefono">
              <label for="telefono" class="fb-text-label">Teléfono</label>
              <input type="text" placeholder="Télefono" class="form-control" name="telefono" maxlength="25" id="telefono" title="Ingresa Teléfono">
            </div>
            <div class="fb-text form-group field-telefono_2">
              <label for="telefono_2" class="fb-text-label">Teléfono 2</label>
              <input type="text" placeholder="Télefono 2" class="form-control" name="telefono_2" maxlength="25" id="telefono_2" title="Ingresa Otro Teléfono">
            </div>
            <div class="fb-text form-group field-otro_contacto">
              <label for="otro_contacto" class="fb-text-label">Otro medio de Contácto</label>
              <input type="text" placeholder="Otro Contácto" class="form-control" name="otro_contacto" maxlength="25" id="otro_contacto" title="Ingresa otro medio de Contácto">
            </div>
            <div class="fb-button form-group field-button-aceptar">
              <button type="submit" class="btn btn-primary" name="button-aceptar" value="Guardar Usuario" style="warning" id="button-aceptar">Guardar Usuario</button>
            </div>
          </div>
        </form>

    </section>
</section>
<!--main content end-->
<?php require('./vistas/theme/foother_adm.php'); ?>
