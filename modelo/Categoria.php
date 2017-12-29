<?php
include_once('Conexion.php');
class Categoria{
  private $id;
  private $nombre;
  private $descripcion;
  private $imagen;

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

  public function contarRegistrosCategorias(){
    $sql = "SELECT * FROM categoria";
    $arrayRes =  $this->conn->consultaRetorno($sql);
    return mysqli_num_rows($arrayRes);
  }

  public function listarCategorias(){
    $sql = "SELECT * FROM categoria";
    return $this->conn->consultaRetorno($sql);
  }

  public function verCategoria(){
      $sql = "SELECT * FROM categoria WHERE id = {$this->id} LIMIT 1";
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
