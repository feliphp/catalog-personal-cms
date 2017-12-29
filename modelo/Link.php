<?php
include_once('Conexion.php');
class Link{
  private $id;
  private $titulo;
  private $texto;
  private $media;
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
  public function listarLinks(){
    $sql = "SELECT * FROM links";
    return $this->conn->consultaRetorno($sql);
  }
  public function verLink(){
      $sql = "SELECT * FROM links WHERE id = {$this->id} LIMIT 1";
      $ret = $this->conn->consultaRetorno($sql);
      $row = mysqli_fetch_assoc($ret);

      $this->id = $row['id'];
      $this->nombre = $row['nombre'];
      $this->descripcion = $row['descripcion'];
      $this->imagen = $row['imagen'];


      return $row;
  }
}
?>
