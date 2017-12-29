<?php
include_once('modelo/Categoria.php');
class ControladorCategorias {

  private $categoria;

  public function __construct(){
    $this->categoria = new Categoria();
  }

  public function index(){
       return $this->categoria->listarCategorias();
  }

  public function mostrarConPaginador($inicio,$TAMANO_PAGINA,$order,$columorder){
    $this->categoria->set('order',$order);
    $this->categoria->set('columorder',$columorder);
    $this->categoria->set('inicio',$inicio);
    $this->categoria->set('tamano_paginador',$TAMANO_PAGINA);

      return $this->categoria->mostrarConPaginador();
  }

  public function mostrarConPaginador_busqueda($inicio,$TAMANO_PAGINA,$buscar,$order,$columorder){
    $this->categoria->set('order',$order);
    $this->categoria->set('columorder',$columorder);
    $this->categoria->set('inicio',$inicio);
    $this->categoria->set('busqueda',$buscar);
    $this->categoria->set('tamano_paginador',$TAMANO_PAGINA);

      return $this->categoria->mostrarConPaginador();
  }

  public function contarCategorias(){
       return $this->categoria->contarRegistrosCategorias();
  }

  public function contarCategorias_busqueda($buscar){
      $this->categoria->set('busqueda',$buscar);
      return $this->categoria->contarRegistrosCategorias_busqueda();
  }


  public function crearCategoria($nombre,$descripcion,$imagen){
      $this->categoria->set('nombre',$nombre);
      $this->categoria->set('descripcion',$descripcion);
      $this->categoria->set('imagen',$imagen);

      return $this->categoria->crearCategoria();
  }

  public function eliminarCategoria($id){
    $this->categoria->set('id',$id);
    $this->categoria->eliminarCategoria();
  }


  public function verCategoria($id){
    $this->categoria->set('id',$id);
    return $this->categoria->verCategoria();
  }

  public function editarCategoria($id,$nombre,$descripcion,$imagen){
    $this->categoria->set('id',$id);
    $this->categoria->set('nombre',$nombre);
    $this->categoria->set('descripcion',$descripcion);
    $this->categoria->set('imagen',$imagen);

    return $this->categoria->editaCategoria();

  }


}
?>
