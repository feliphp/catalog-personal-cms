<?php require('./vistas/theme/header_adm.php'); ?>


      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-list-alt"></i> Products</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                  <!-- busqueda -->
                  <?php $buscar = $_POST['buscar']; ?>
                    <form id="rendered-form" method="post" action="<?php echo URL_LINKS; ?>admin/index.php?cargar=product">
                      <div class="rendered-form">
                        <div class="fb-text form-group field-buscar">
                            <input type="text" value="<?php echo $buscar; ?>" placeholder="Buscar" id="buscar" class="form-control" name="buscar">
                        </div>
                        <div class="fb-button form-group field-button-buscar">
                          <button type="submit" class="btn btn" name="button-buscar" value="Buscar" style="warning" id="button-buscar">Buscar producto</button>
                        </div>
                      </div>
                    </form>
                    <!-- end busqueda -->
                      <!--notification start-->
                      <section class="panel">
                          <header class="panel-heading">
                            Tabla de Productos
                          </header>
                          <div class="panel-body">
                            <!-- ordenamiento-->
                            <?php $order = $_GET["order"];
                            $columorder = $_GET["columorder"];
                            if($columorder == ''){
                              $columorder = 'id';
                            }
                            if (($order == '')||($order == 'ASC')){
                                $orderif = 'DESC';
                            } else {
                                $orderif = 'ASC';
                            }
                            if($order == ''){
                              $order = 'ASC';
                            }
                             ?>
                             <!-- fin ordenamiento -->
                            <table class="table table-striped table-advance table-hover">
                                <thead>
                                <tr>
                                    <th>I</th>
                                    <th><a href="<?php echo URL_LINKS; ?>admin/index.php?cargar=product&order=<?php echo $orderif; ?>&columorder=id">#</a></th>
                                    <th><a href="<?php echo URL_LINKS; ?>admin/index.php?cargar=product&order=<?php echo $orderif; ?>&columorder=clave_producto">Clave</a></th>
                                    <th>Precio</th>
                                    <th>Acciones</th>
                                </tr>
                              </thead>
                              <tbody>
                            <?php
                             $dir = dirname(dirname(dirname(dirname(__FILE__))));
                             require_once($dir.'/controlador/ControladorProductos.php');
                             $productos = new ControladorProductos();

                          if($buscar == ''){
                             $num_total_registros = $productos->contarProductos();
                           } else {
                             $num_total_registros = $productos->contarProductos_busqueda($buscar);
                           }
                             $TAMANO_PAGINA = TAMANO_PAGINADOR;

                             //examino la página a mostrar y el inicio del registro a mostrar
                             $pagina = $_GET["pagina"];
                             if (!$pagina) {
                               $inicio = 0;
                               $pagina = 1;
                             } else {
                               $inicio = ($pagina - 1) * $TAMANO_PAGINA;
                             }
                             //calculo el total de páginas
                             $total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);

                             if($buscar == ''){
                               $resultados = $productos->mostrarConPaginador($inicio,$TAMANO_PAGINA,$order,$columorder);
                             } else {
                               $resultados = $productos->mostrarConPaginador_busqueda($inicio,$TAMANO_PAGINA,$buscar,$order,$columorder);
                             }
                             while ($row = mysqli_fetch_array($resultados)) :
                             ?>
                              <tr>
                                  <td><img src="<?php echo MEDIA.'thumbnails/'.$row['imagen_chica'];?>" width="25px" height="20px"></td>
                                  <td><?php echo $row['id']; ?></td>
                                  <td><?php echo $row['clave_producto']; ?></td>
                                  <td><?php echo $row['precio_unitario']; ?></td>
                                  <td><div class="btn-group">
                                      <a class="btn btn-primary" href="<?php echo URL_LINKS; ?>admin/index.php?cargar=editProduct&id=<?php echo $row['id']; ?>"><i class="icon_pencil"></i></a>
                                      <a class="btn btn-success" href="<?php echo URL_LINKS; ?>admin/index.php?cargar=verProduct&id=<?php echo $row['id']; ?>"><i class="icon_documents"></i></a>
                                      <a class="btn btn-danger" href="<?php echo URL_LINKS; ?>admin/index.php?cargar=deleteProduct&id=<?php echo $row['id']; ?>" onclick="if(confirm('Esta seguro que desea eliminar este registro?') == false){return false;}"><i class="icon_close_alt2"></i></a>
                                  </div></td>
                              </tr>
                            <?php endwhile; ?>
                              </table>

                    <!--pagination start-->
                        <section class="panel">
                          <div class="panel-body">
                              <div>
                                <ul class="pagination pagination-lg">
                            <?php
                                if ($total_paginas > 1) {
                                 if ($pagina != 1)
                                    echo '<li><a href="'.URL_LINKS.'admin/index.php?cargar=product&pagina='.($pagina-1).'">«</a></li>';
                                    for ($i=1;$i<=$total_paginas;$i++) {
                                       if ($pagina == $i)
                                          //si muestro el índice de la página actual, no coloco enlace
                                          echo '<li><a href="" onclick="return false;">'.$pagina.'</a></li>';
                                       else
                                          //si el índice no corresponde con la página mostrada actualmente,
                                          //coloco el enlace para ir a esa página
                                          echo '  <li><a href="'.URL_LINKS.'admin/index.php?cargar=product&pagina='.$i.'">'.$i.'</a></li>';
                                    }
                                    if ($pagina != $total_paginas)
                                       echo '<li><a href="'.URL_LINKS.'admin/index.php?cargar=product&pagina='.($pagina+1).'">»</a></li>';
                                }
                            ?>
                          </ul>
                          </div>
                        </div>
                    </section>
                    <!--pagination end-->


                              <a class="btn btn-primary" href="<?php echo URL_LINKS; ?>admin/index.php?cargar=addProduct" title="Bootstrap 3 themes generator"><span class="icon_gift"></span> Agregar Producto</a>
                          </div>
                      </section>
                      <!--notification end-->



                  </div>

              </div>
          </section>
      </section>
      <!--main content end-->
  <?php require('./vistas/theme/foother_adm.php'); ?>
