<?php
$dir = dirname(dirname(dirname(__FILE__)));
include_once($dir.'/modelo/Conexion.php');
class Sistema{
  private $id;
  private $color_header;
  private $color_content;
  private $logo;
  private $texto_header;
  private $texto_contacto;
  private $numero_categorias;
  private $facebook;
  private $seo_activar;
  private $seo_title;
  private $seo_description;
  private $seo_keywords;

  private $conn;

  public function __construct(){
    $this->conn = new Conexion();
  }

  public function set($atributo, $contenido){
    $this->$atributo = $contenido;
  }

  public function get($atributo){
    return $this->$atributo;
  }

  public function buscarSistema(){
    $sql = "SELECT * FROM sistema";
    $arrayRes =  $this->conn->consultaRetorno($sql);
    return mysqli_num_rows($arrayRes);
  }

  public function crearSistema(){
      $consulta = "INSERT INTO sistema(color_header, color_content, logo, texto_header, texto_contacto, numero_categorias, facebook, seo_activar, seo_title, seo_description, seo_keywords) VALUES('{$this->color_header}', '{$this->color_content}', '{$this->logo}', '{$this->texto_header}', '{$this->texto_contacto}', '{$this->numero_categorias}', '{$this->facebook}', '{$this->seo_activar}', '{$this->seo_title}', '{$this->seo_description}', '{$this->seo_keywords}')";
      $this->conn->consultaSimple($consulta);
      return true;
  }



  public function verSistema(){
      $sql = "SELECT * FROM sistema WHERE id = {$this->id} LIMIT 1";
      $ret = $this->conn->consultaRetorno($sql);
      $row = mysqli_fetch_assoc($ret);

      $this->id = $row['id'];
      $this->color_header = $row['color_header'];
      $this->color_content = $row['color_content'];
      $this->logo = $row['logo'];
      $this->texto_header = $row['texto_header'];
      $this->texto_contacto = $row['texto_contacto'];
      $this->numero_categorias = $row['numero_categorias'];
      $this->facebook = $row['facebook'];
      $this->seo_activar = $row['seo_activar'];
      $this->seo_title = $row['seo_title'];
      $this->seo_description = $row['seo_description'];
      $this->seo_keywords = $row['seo_keywords'];

      return $row;
  }

  public function editaSistema(){
    $consulta = "UPDATE sistema SET color_header = '{$this->color_header}',color_content = '{$this->color_content}',logo = '{$this->logo}',texto_header = '{$this->texto_header}',texto_contacto = '{$this->texto_contacto}',numero_categorias = '{$this->numero_categorias}',facebook = '{$this->facebook}',seo_activar = '{$this->seo_activar}',seo_title = '{$this->seo_title}',seo_description = '{$this->seo_description}',seo_keywords = '{$this->seo_keywords}' WHERE id = {$this->id}";
    $this->conn->consultaSimple($consulta);
    return true;
  }

}
?>
