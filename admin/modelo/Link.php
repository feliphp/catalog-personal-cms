<?php
$dir = dirname(dirname(dirname(__FILE__)));
include_once($dir.'/modelo/Conexion.php');
class Link{
  private $id;
  private $titulo;
  private $texto;
  private $media;

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

  public function contarRegistrosLinks(){
    $sql = "SELECT * FROM links";
    $arrayRes =  $this->conn->consultaRetorno($sql);
    return mysqli_num_rows($arrayRes);
  }

  public function contarRegistrosLinks_busqueda(){
    $sql = "SELECT * FROM links WHERE titulo LIKE '%$this->busqueda%'";
    $arrayRes =  $this->conn->consultaRetorno($sql);
    return mysqli_num_rows($arrayRes);
  }

  public function listarLinks(){
    $sql = "SELECT * FROM links";
    return $this->conn->consultaRetorno($sql);
  }

  public function mostrarConPaginador(){
    $sql = "SELECT * FROM links ORDER BY {$this->columorder} {$this->order}  LIMIT {$this->inicio}, {$this->tamano_paginador}";
    return $this->conn->consultaRetorno($sql);
  }

  public function mostrarConPaginador_busqueda(){
    $sql = "SELECT * FROM links WHERE titulo LIKE '%$this->busqueda%' ORDER BY {$this->columorder} {$this->order} LIMIT {$this->inicio}, {$this->tamano_paginador}";
    return $this->conn->consultaRetorno($sql);
  }

  public function crearLink(){
    $sql = "SELECT * FROM links WHERE titulo = '{$this->titulo}'";
    $ret = $this->conn->consultaRetorno($sql);
    $num = mysqli_num_rows($ret);

    if($num != 0){
        return false;
    } else {
      $consulta = "INSERT INTO links(titulo, texto, media) VALUES('{$this->titulo}', '{$this->texto}', '{$this->media}')";
      $this->conn->consultaSimple($consulta);
      return true;
    }
  }

  public function eliminarLink(){
        $sql = "DELETE FROM links WHERE id = '{$this->id}'";
        $this->conn->consultaSimple($sql);
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

  public function editaLink(){
    $consulta = "UPDATE links SET titulo = '{$this->titulo}',texto = '{$this->texto}',media = '{$this->media}' WHERE id = {$this->id}";
    $this->conn->consultaSimple($consulta);
    return true;
  }

}
?>
