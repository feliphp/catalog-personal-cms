<?php
$dir = dirname(dirname(dirname(__FILE__)));
include_once($dir.'/modelo/Conexion.php');
class Producto{
  private $id;
  private $nombre;
  private $clave_producto;
  private $disponible;
  private $visible;
  private $descripcion_corta;
  private $tipo;
  private $descripcion;
  private $tags;
  private $precio_unitario;
  private $descuento;
  private $precio_descuento;
  private $precio_mayoreo;
  private $cantidad_mayoreo;
  private $categoria_id;
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

  public function contarRegistrosProductos(){
    $sql = "SELECT * FROM producto";
    $arrayRes =  $this->conn->consultaRetorno($sql);
    return mysqli_num_rows($arrayRes);
  }

  public function contarRegistrosProductos_busqueda(){
    $sql = "SELECT * FROM producto WHERE nombre LIKE '%$this->busqueda%' OR clave_producto LIKE '%$this->busqueda%'";
    $arrayRes =  $this->conn->consultaRetorno($sql);
    return mysqli_num_rows($arrayRes);
  }

  public function listarProductos(){
    $sql = "SELECT * FROM producto ORDER BY id {$this->order}";
    return $this->conn->consultaRetorno($sql);
  }
   // cambios para ordenamiento
  public function mostrarConPaginador(){
    $sql = "SELECT * FROM producto ORDER BY {$this->columorder} {$this->order} LIMIT {$this->inicio}, {$this->tamano_paginador}";
    return $this->conn->consultaRetorno($sql);
  }

  public function mostrarConPaginador_busqueda(){
    $sql = "SELECT * FROM producto WHERE nombre LIKE '%$this->busqueda%' OR clave_producto LIKE '%$this->busqueda%' ORDER BY {$this->columorder} {$this->order} LIMIT {$this->inicio}, {$this->tamano_paginador}";
    return $this->conn->consultaRetorno($sql);
  }
  // fin cambios para ordenamiento
  public function crearProducto(){
    $sql = "SELECT * FROM producto WHERE clave_producto = '{$this->clave_producto}'";
    $ret = $this->conn->consultaRetorno($sql);
    $num = mysqli_num_rows($ret);

    if($num != 0){
        return false;
    } else {
      $consulta = "INSERT INTO producto(nombre,clave_producto,tipo,disponible,visible,descripcion_corta,descripcion,tags,precio_unitario,descuento,precio_descuento,precio_mayoreo,cantidad_mayoreo,categoria_id,anchura,altura,peso,inventario,imagen_chica,imagen_mediana_1,imagen_mediana_2,imagen_mediana_3,imagen_grande,video,rating,item_extra,item_extra_2,val_item_extra,val_item_extra_2) VALUES
        ('{$this->nombre}', '{$this->clave_producto}', '{$this->tipo}', '{$this->disponible}', '{$this->visible}', '{$this->descripcion_corta}', '{$this->descripcion}', '{$this->tags}', '{$this->precio_unitario}', '{$this->descuento}', '{$this->precio_descuento}', '{$this->precio_mayoreo}', '{$this->cantidad_mayoreo}', '{$this->categoria_id}', '{$this->anchura}', '{$this->altura}', '{$this->peso}', '{$this->inventario}', '{$this->imagen_chica}', '{$this->imagen_mediana_1}',
          '{$this->imagen_mediana_2}', '{$this->imagen_mediana_3}', '{$this->imagen_grande}', '{$this->video}', '{$this->rating}', '{$this->item_extra}', '{$this->item_extra_2}', '{$this->val_item_extra}', '{$this->val_item_extra_2}')";
      $this->conn->consultaSimple($consulta);
      return true;
    }
  }

  public function eliminarProducto(){
        $sql = "DELETE FROM producto WHERE id = '{$this->id}'";
        $this->conn->consultaSimple($sql);
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
      $this->categoria_id = $row['categoria_id'];
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

  public function editaProducto(){
    $consulta = "UPDATE producto SET nombre = '{$this->nombre}',clave_producto = '{$this->clave_producto}',tipo = '{$this->tipo}', disponible = '{$this->disponible}', visible = '{$this->visible}',descripcion_corta = '{$this->descripcion_corta}',descripcion = '{$this->descripcion}',tags = '{$this->tags}',precio_unitario = '{$this->precio_unitario}',descuento = '{$this->descuento}',precio_descuento = '{$this->precio_descuento}',precio_mayoreo = '{$this->precio_mayoreo}',cantidad_mayoreo = '{$this->cantidad_mayoreo}',categoria_id = '{$this->categoria_id}',anchura = '{$this->anchura}',altura = '{$this->altura}',peso = '{$this->peso}',inventario = '{$this->inventario}',imagen_chica = '{$this->imagen_chica}',imagen_mediana_1 = '{$this->imagen_mediana_1}',imagen_mediana_2 = '{$this->imagen_mediana_2}',imagen_mediana_3 = '{$this->imagen_mediana_3}',imagen_grande = '{$this->imagen_grande}',video = '{$this->video}',item_extra = '{$this->item_extra}',item_extra_2 = '{$this->item_extra_2}',val_item_extra = '{$this->val_item_extra}',val_item_extra_2 = '{$this->val_item_extra_2}' WHERE id = {$this->id}";

    $this->conn->consultaSimple($consulta);
    return true;
  }

}
?>
