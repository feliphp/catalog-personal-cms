<?php
include_once('modelo/Link.php');
class ControladorLinks {

  private $link;

  public function __construct(){
    $this->link = new Link();
  }

  public function index(){
       return $this->link->listarLinks();
  }

  // cambios para ordenamiento
    public function mostrarConPaginador($inicio,$TAMANO_PAGINA,$order,$columorder){
      $this->link->set('order',$order);
      $this->link->set('columorder',$columorder);
      $this->link->set('inicio',$inicio);
      $this->link->set('tamano_paginador',$TAMANO_PAGINA);

        return $this->link->mostrarConPaginador();
    }

    public function mostrarConPaginador_busqueda($inicio,$TAMANO_PAGINA,$buscar,$order,$columorder){
      $this->link->set('inicio',$inicio);
      $this->link->set('order',$order);
      $this->link->set('columorder',$columorder);
      $this->link->set('busqueda',$buscar);
      $this->link->set('tamano_paginador',$TAMANO_PAGINA);
        return $this->link->mostrarConPaginador_busqueda($buscar);
    }
    // fin cambios para ordenamiento


  public function contarLinks(){
       return $this->link->contarRegistrosLinks();
  }

  public function contarLinks_busqueda($buscar){
    $this->link->set('busqueda',$buscar);
    return $this->link->contarRegistrosProductos_busqueda();
  }


  public function crearLink($titulo,$texto,$media){
      $this->link->set('titulo',$titulo);
      $this->link->set('texto',$texto);
      $this->link->set('media',$media);

      return $this->link->crearLink();
  }

  public function eliminarLink($id){
    $this->link->set('id',$id);
    $this->link->eliminarLink();
  }


  public function verLink($id){
    $this->link->set('id',$id);
    return $this->link->verLink();
  }

  public function editarLink($id,$titulo,$texto,$media){
    $this->link->set('id',$id);
    $this->link->set('titulo',$titulo);
    $this->link->set('texto',$texto);
    $this->link->set('media',$media);

    return $this->link->editaLink();

  }


}
?>
