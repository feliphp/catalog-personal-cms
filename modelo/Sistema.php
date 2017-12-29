<?php
include_once('Conexion.php');
class Sistema{
  private $id;
  private $color_header;
  private $color_content;
  private $logo;
  private $texto_header;
  private $texto_contacto;
  private $numero_categorias;
  private $facebook;

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

      return $row;
  }
}
?>
