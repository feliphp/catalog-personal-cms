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
  public function index_id($id){
       $this->producto->set('id',$id);
       return $this->producto->listarProductos_category();
  }
  public function index_busca($busca){
       $this->producto->set('busqueda',$busca);
       return $this->producto->listarProductos_busqueda();
  }

  public function mostrarConPaginador($inicio,$TAMANO_PAGINA){
    $this->producto->set('inicio',$inicio);
    $this->producto->set('tamano_paginador',$TAMANO_PAGINA);

      return $this->producto->mostrarConPaginador();
  }
  public function contarProductos(){
       return $this->producto->contarRegistrosProductos();
  }
  public function verProducto($id){
    $this->producto->set('id',$id);
    return $this->producto->verProducto();
  }

  public function getStars($id){
    $this->producto->set('id',$id);
    return $this->producto->obtenerEstrellas();
  }

  public function setStars($votos,$star,$id){
    $this->producto->set('id',$id);
    $this->producto->set('stars',$votos.":".$star);
    return $this->producto->guardaEstrellas();
  }
}
?>
