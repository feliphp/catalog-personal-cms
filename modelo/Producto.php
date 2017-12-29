<?php
include_once('Conexion.php');
class Producto{
  private $id;
  private $nombre;
  private $clave_producto;
  private $tipo;
  private $disponible;
  private $visible;
  private $descripcion_corta;
  private $descripcion;
  private $tags;
  private $precio_unitario;
  private $descuento;
  private $precio_descuento;
  private $precio_mayoreo;
  private $cantidad_mayoreo;
  private $meta_title;
  private $anchura;
  private $altura;
  private $peso;
  private $inventario;
  private $imagen_chica;
  private $imagen_mediana_1;
  private $imagen_mediana_2;
  private $imagen_mediana_3;
  private $imagen_grande;
  private $video;
  private $rating;
  private $item_extra;
  private $item_extra_2;
  private $val_item_extra;
  private $val_item_extra_2;

  private $stars;
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

  public function listarProductos_category(){
    $sql = "SELECT * FROM producto WHERE categoria_id = {$this->id} AND visible = 1";
    return $this->conn->consultaRetorno($sql);
  }

  public function listarProductos_busqueda(){
    $sql = "SELECT * FROM producto WHERE nombre like '%$this->busqueda%' OR clave_producto like '%$this->busqueda%' WHERE visible = 1";
    return $this->conn->consultaRetorno($sql);
  }

  public function listarProductos(){
    $sql = "SELECT * FROM producto WHERE visible = 1";
    return $this->conn->consultaRetorno($sql);
  }

  public function obtenerEstrellas(){
    $sql = "SELECT rating FROM producto WHERE id = {$this->id}";
    return $this->conn->consultaRetorno($sql);
  }

  public function guardaEstrellas(){
    $sql = "UPDATE producto SET rating = '{$this->stars}' WHERE id = {$this->id}";
    $this->conn->consultaSimple($sql);
    return true;
  }

  public function verProducto(){
      $sql = "SELECT * FROM producto WHERE id = {$this->id} LIMIT 1";
      $ret = $this->conn->consultaRetorno($sql);
      $row = mysqli_fetch_assoc($ret);

      $this->id = $row['id'];
      $this->nombre = $row['nombre'];
      $this->clave_producto = $row['clave_producto'];
      $this->tipo = $row['tipo'];
      $this->disponible = $row['disponible'];
      $this->visible = $row['visible'];
      $this->descripcion_corta = $row['descripcion_corta'];
      $this->tags = $row['tags'];
      $this->precio_unitario = $row['precio_unitario'];
      $this->descuento = $row['descuento'];
      $this->precio_descuento = $row['precio_descuento'];
      $this->precio_mayoreo = $row['precio_mayoreo'];
      $this->cantidad_mayoreo = $row['cantidad_mayoreo'];
      $this->meta_title = $row['meta_title'];
      $this->anchura = $row['anchura'];
      $this->altura = $row['altura'];
      $this->peso = $row['peso'];
      $this->inventario = $row['inventario'];
      $this->imagen_chica = $row['imagen_chica'];
      $this->imagen_mediana_1 = $row['imagen_mediana_1'];
      $this->imagen_mediana_2 = $row['imagen_mediana_2'];
      $this->imagen_mediana_3 = $row['imagen_mediana_3'];
      $this->imagen_grande = $row['imagen_grande'];
      $this->video = $row['video'];
      $this->rating = $row['rating'];
      $this->item_extra = $row['item_extra'];
      $this->item_extra_2 = $row['item_extra_2'];
      $this->val_item_extra = $row['val_item_extra'];
      $this->val_item_extra_2 = $row['val_item_extra_2'];

      return $row;
  }
}
?>
