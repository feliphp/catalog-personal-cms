<?php
include_once('modelo/Sistema.php');
class ControladorSistema {

  private $sistema;

  public function __construct(){
    $this->sistema = new Sistema();
  }

  public function verSistema($id){
    $this->sistema->set('id',$id);
    return $this->sistema->verSistema();
  }
}
?>
