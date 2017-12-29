<?php
$dir = dirname(dirname(dirname(__FILE__)));
include_once($dir.'/modelo/Conexion.php');
class Usuario{
  private $id;
  private $username;
  private $password;
  private $tipo;
  private $permisos;
  private $email;
  private $nombre;
  private $apellido;
  private $telefono;
  private $telefono_2;
  private $otro_contacto;

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

  public function contarRegistrosUsuarios(){
    $sql = "SELECT * FROM usuarios";
    $arrayRes =  $this->conn->consultaRetorno($sql);
    return mysqli_num_rows($arrayRes);
  }

  public function contarRegistrosUsuarios_busqueda(){
    $sql = "SELECT * FROM usuarios WHERE username LIKE '%$this->busqueda%' OR email LIKE '%$this->busqueda%' OR nombre LIKE '%$this->busqueda%'";
    $arrayRes =  $this->conn->consultaRetorno($sql);
    return mysqli_num_rows($arrayRes);
  }

  public function listarUsuarios(){
    $sql = "SELECT * FROM usuarios";
    return $this->conn->consultaRetorno($sql);
  }

  public function mostrarConPaginador(){
    $sql = "SELECT * FROM usuarios ORDER BY {$this->columorder} {$this->order} LIMIT {$this->inicio}, {$this->tamano_paginador}";
    return $this->conn->consultaRetorno($sql);
  }

  public function mostrarConPaginador_busqueda(){
    $sql = "SELECT * FROM usuarios WHERE username LIKE '%$this->busqueda%' OR email LIKE '%$this->busqueda%' OR nombre LIKE '%$this->busqueda%' ORDER BY {$this->columorder} {$this->order} LIMIT {$this->inicio}, {$this->tamano_paginador}";
    return $this->conn->consultaRetorno($sql);
  }

  public function loginUsuario(){
    $sql = "SELECT * FROM usuarios WHERE username = '{$this->username}' AND password = '{$this->password}'";
    $ret = $this->conn->consultaRetorno($sql);
    $num = mysqli_num_rows($ret);

    if($num == 0){
        return false;
      } else {
        $row = mysqli_fetch_assoc($ret);
        return $row['username'];
      }
  }

  public function crearUsuario(){
    $sql = "SELECT * FROM usuarios WHERE email = '{$this->email}'";
    $ret = $this->conn->consultaRetorno($sql);
    $num = mysqli_num_rows($ret);

    if($num != 0){
        return false;
    } else {
      $consulta = "INSERT INTO usuarios(username, password, tipo, permisos, email, nombre, apellido, telefono, telefono_2, otro_contacto) VALUES('{$this->username}', '{$this->password}', '{$this->tipo}', '{$this->permisos}', '{$this->email}', '{$this->nombre}', '{$this->apellido}', '{$this->telefono}', '{$this->telefono_2}', '{$this->otro_contacto}')";
      $this->conn->consultaSimple($consulta);
      return true;
    }
  }

  public function eliminarUsuario(){
        $sql = "DELETE FROM usuarios WHERE id = '{$this->id}'";
        $this->conn->consultaSimple($sql);
  }

  public function verUsuario(){
      $sql = "SELECT * FROM usuarios WHERE id = {$this->id} LIMIT 1";
      $ret = $this->conn->consultaRetorno($sql);
      $row = mysqli_fetch_assoc($ret);

      $this->id = $row['id'];
      $this->username = $row['username'];
      $this->password = $row['password'];
      $this->tipo = $row['tipo'];
      $this->permisos = $row['permisos'];
      $this->email = $row['email'];
      $this->nombre = $row['nombre'];
      $this->apellido = $row['apellido'];
      $this->telefono = $row['telefono'];
      $this->telefono_2 = $row['telefono_2'];
      $this->otro_contacto = $row['otro_contacto'];

      return $row;
  }

  public function editaUsuario(){
    $consulta = "UPDATE usuarios SET username = '{$this->username}',tipo = '{$this->tipo}',permisos = '{$this->permisos}',nombre = '{$this->nombre}',apellido = '{$this->apellido}',telefono = '{$this->telefono}',telefono_2 = '{$this->telefono_2}',otro_contacto = '{$this->otro_contacto}' WHERE id = {$this->id}";
    $this->conn->consultaSimple($consulta);
    return true;
  }

}
?>
