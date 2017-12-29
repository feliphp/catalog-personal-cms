<?php
include_once('modelo/Producto.php');
class ControladorProductos {

  private $producto;

  public function __construct(){
    $this->producto = new Producto();
  }

  public function index(){
       return $this->producto->listarProductos();
  }
// cambios para ordenamiento
  public function mostrarConPaginador($inicio,$TAMANO_PAGINA,$order,$columorder){
    $this->producto->set('order',$order);
    $this->producto->set('columorder',$columorder);
    $this->producto->set('inicio',$inicio);
    $this->producto->set('tamano_paginador',$TAMANO_PAGINA);

      return $this->producto->mostrarConPaginador();
  }

  public function mostrarConPaginador_busqueda($inicio,$TAMANO_PAGINA,$buscar,$order,$columorder){
    $this->producto->set('inicio',$inicio);
    $this->producto->set('order',$order);
    $this->producto->set('columorder',$columorder);
    $this->producto->set('busqueda',$buscar);
    $this->producto->set('tamano_paginador',$TAMANO_PAGINA);
      return $this->producto->mostrarConPaginador_busqueda($buscar);
  }
  // fin cambios para ordenamiento

  public function contarProductos(){
       return $this->producto->contarRegistrosProductos();
  }

  public function contarProductos_busqueda($buscar){
    $this->producto->set('busqueda',$buscar);
    return $this->producto->contarRegistrosProductos_busqueda();
  }

  public function crearProducto($nombre,$clave_producto,$tipo,$disponible,$visible,$descripcion_corta,$descripcion,$tags,$precio_unitario,$descuento,$precio_descuento,$precio_mayoreo,$cantidad_mayoreo,$categoria_id,$anchura,$altura,$peso,$inventario,$imagen_chica,$imagen_mediana_1,$imagen_mediana_2,$imagen_mediana_3,$imagen_grande,$video,$rating,$item_extra,$item_extra_2,$val_item_extra,$val_item_extra_2){
      $this->producto->set('nombre',$nombre);
      $this->producto->set('clave_producto',$clave_producto);
      $this->producto->set('tipo',$tipo);
      $this->producto->set('disponible',$disponible);
      $this->producto->set('visible',$visible);
      $this->producto->set('descripcion_corta',$descripcion_corta);
      $this->producto->set('descripcion',$descripcion);
      $this->producto->set('tags',$tags);
      $this->producto->set('precio_unitario',$precio_unitario);
      $this->producto->set('descuento',$descuento);
      $this->producto->set('precio_descuento',$precio_descuento);
      $this->producto->set('precio_mayoreo',$precio_mayoreo);
      $this->producto->set('cantidad_mayoreo',$cantidad_mayoreo);
      $this->producto->set('categoria_id',$categoria_id);
      $this->producto->set('anchura',$anchura);
      $this->producto->set('altura',$altura);
      $this->producto->set('peso',$peso);
      $this->producto->set('inventario',$inventario);
      $this->producto->set('imagen_chica',$imagen_chica);
      $this->producto->set('imagen_mediana_1',$imagen_mediana_1);
      $this->producto->set('imagen_mediana_2',$imagen_mediana_2);
      $this->producto->set('imagen_mediana_3',$imagen_mediana_3);
      $this->producto->set('imagen_grande',$imagen_grande);
      $this->producto->set('video',$video);
      $this->producto->set('rating',$rating);
      $this->producto->set('item_extra',$item_extra);
      $this->producto->set('item_extra_2',$item_extra_2);
      $this->producto->set('val_item_extra',$item_extra);
      $this->producto->set('val_item_extra_2',$item_extra_2);

      return $this->producto->crearProducto();
  }

  public function eliminarProducto($id){
    $this->producto->set('id',$id);
    $this->producto->eliminarProducto();
  }


  public function verProducto($id){
    $this->producto->set('id',$id);
    return $this->producto->verProducto();
  }

  public function editarProducto($id,$nombre,$clave_producto,$tipo,$disponible,$visible,$descripcion_corta,$descripcion,$tags,$precio_unitario,$descuento,$precio_descuento,$precio_mayoreo,$cantidad_mayoreo,$categoria_id,$anchura,$altura,$peso,$inventario,$imagen_chica,$imagen_mediana_1,$imagen_mediana_2,$imagen_mediana_3,$imagen_grande,$video,$item_extra,$item_extra_2,$val_item_extra,$val_item_extra_2){
    $this->producto->set('id',$id);
    $this->producto->set('nombre',$nombre);
    $this->producto->set('clave_producto',$clave_producto);
    $this->producto->set('tipo',$tipo);
    $this->producto->set('disponible',$disponible);
    $this->producto->set('visible',$visible);
    $this->producto->set('descripcion_corta',$descripcion_corta);
    $this->producto->set('descripcion',$descripcion);
    $this->producto->set('tags',$tags);
    $this->producto->set('precio_unitario',$precio_unitario);
    $this->producto->set('descuento',$descuento);
    $this->producto->set('precio_descuento',$precio_descuento);
    $this->producto->set('precio_mayoreo',$precio_mayoreo);
    $this->producto->set('cantidad_mayoreo',$cantidad_mayoreo);
    $this->producto->set('categoria_id',$categoria_id);
    $this->producto->set('anchura',$anchura);
    $this->producto->set('altura',$altura);
    $this->producto->set('peso',$peso);
    $this->producto->set('inventario',$inventario);
    $this->producto->set('imagen_chica',$imagen_chica);
    $this->producto->set('imagen_mediana_1',$imagen_mediana_1);
    $this->producto->set('imagen_mediana_2',$imagen_mediana_2);
    $this->producto->set('imagen_mediana_3',$imagen_mediana_3);
    $this->producto->set('imagen_grande',$imagen_grande);
    $this->producto->set('video',$video);
    $this->producto->set('item_extra',$item_extra);
    $this->producto->set('item_extra_2',$item_extra_2);
    $this->producto->set('val_item_extra',$val_item_extra);
    $this->producto->set('val_item_extra_2',$val_item_extra_2);

    return $this->producto->editaProducto();

  }


}
?>
