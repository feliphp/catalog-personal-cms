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

  public function contarCategorias(){
       return $this->categoria->contarRegistrosCategorias();
  }

  public function verCategoria($id){
    $this->categoria->set('id',$id);
    return $this->categoria->verCategoria();
  }

}
?>
