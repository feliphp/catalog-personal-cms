<?php
include_once('modelo/Sistema.php');
class ControladorSistema {

  private $sistema;

  public function __construct(){
    $this->sistema = new Sistema();
  }

  public function verSistema($id){
    $this->sistema->set('id',$id);
    $conteo_sys = $this->sistema->buscarSistema();
    if($conteo_sys == 0){
      $sys=$this->sistema->crearSistema();
    }
    return $this->sistema->verSistema();
  }

  public function editarSistema($id,$color_header,$color_content,$logo,$texto_header,$texto_contacto,$numero_categorias,$facebook,$seo_activar,$seo_title,$seo_description,$seo_keywords){
    $this->sistema->set('id',$id);
    $this->sistema->set('color_header',$color_header);
    $this->sistema->set('color_content',$color_content);
    $this->sistema->set('logo',$logo);
    $this->sistema->set('texto_header',$texto_header);
    $this->sistema->set('texto_contacto',$texto_contacto);
    $this->sistema->set('numero_categorias',$numero_categorias);
    $this->sistema->set('facebook',$facebook);
    $this->sistema->set('seo_activar',$seo_activar);
    $this->sistema->set('seo_title',$seo_title);
    $this->sistema->set('seo_description',$seo_description);
    $this->sistema->set('seo_keywords',$seo_keywords);

    return $this->sistema->editaSistema();

  }


}
?>
