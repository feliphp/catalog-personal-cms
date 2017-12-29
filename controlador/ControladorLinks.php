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
  public function verLink($id){
    $this->link->set('id',$id);
    return $this->link->verLink();
  }
}
?>
