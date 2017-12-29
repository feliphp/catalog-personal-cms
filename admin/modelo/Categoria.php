<?php
$dir = dirname(dirname(dirname(__FILE__)));
include_once($dir.'/modelo/Conexion.php');
class Categoria{
  private $id;
  private $nombre;
  private $descripcion;
  private $imagen;
  private $order;
  private $columorder;

  private $busqueda;
  private $inicio;
  private $tamano_paginador;

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

  public function contarRegistrosCategorias_busqueda(){
    $sql = "SELECT * FROM categoria WHERE nombre LIKE '%$this->busqueda%'";
    $arrayRes =  $this->conn->consultaRetorno($sql);
    return mysqli_num_rows($arrayRes);
  }

  public function listarCategorias(){
    $sql = "SELECT * FROM categoria";
    return $this->conn->consultaRetorno($sql);
  }

  public function mostrarConPaginador_busqueda(){
    $sql = "SELECT * FROM categoria ORDER BY {$this->columorder} {$this->order} LIMIT {$this->inicio}, {$this->tamano_paginador}";
    return $this->conn->consultaRetorno($sql);
  }

  public function mostrarConPaginador(){
    $sql = "SELECT * FROM categoria WHERE nombre LIKE '%$this->busqueda%' ORDER BY {$this->columorder} {$this->order} LIMIT {$this->inicio}, {$this->tamano_paginador}";
    return $this->conn->consultaRetorno($sql);
  }

  public function crearCategoria(){
    $sql = "SELECT * FROM categoria WHERE email = '{$this->email}'";
    $ret = $this->conn->consultaRetorno($sql);
    $num = mysqli_num_rows($ret);

    if($num != 0){
        return false;
    } else {
      $consulta = "INSERT INTO categoria(nombre, descripcion, imagen) VALUES('{$this->nombre}', '{$this->descripcion}', '{$this->imagen}')";
      $this->conn->consultaSimple($consulta);
      return true;
    }
  }

  public function eliminarCategoria(){
        $sql = "DELETE FROM categoria WHERE id = '{$this->id}'";
        $this->conn->consultaSimple($sql);
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

  public function editaCategoria(){
    $consulta = "UPDATE categoria SET nombre = '{$this->nombre}',descripcion = '{$this->descripcion}',imagen = '{$this->imagen}' WHERE id = {$this->id}";
    $this->conn->consultaSimple($consulta);
    return true;
  }

}
?>
