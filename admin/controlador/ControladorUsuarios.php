<?php
include_once('modelo/Usuario.php');
class ControladorUsuarios {

  private $usuario;

  public function __construct(){
    $this->usuario = new Usuario();
  }

  public function index(){
       return $this->usuario->listarUsuarios();
  }

  public function mostrarConPaginador($inicio,$TAMANO_PAGINA,$order,$columorder){
    $this->usuario->set('inicio',$inicio);
    $this->usuario->set('order',$order);
    $this->usuario->set('columorder',$columorder);
    $this->usuario->set('tamano_paginador',$TAMANO_PAGINA);

      return $this->usuario->mostrarConPaginador();
  }

  public function mostrarConPaginador_busqueda($inicio,$TAMANO_PAGINA,$buscar,$order,$columorder){
    $this->usuario->set('inicio',$inicio);
    $this->usuario->set('order',$order);
    $this->usuario->set('columorder',$columorder);
    $this->usuario->set('busqueda',$buscar);
    $this->usuario->set('tamano_paginador',$TAMANO_PAGINA);

      return $this->usuario->mostrarConPaginador_busqueda();
  }

  public function contarUsuarios(){
       return $this->usuario->contarRegistrosUsuarios();
  }

  public function contarUsuarios_busqueda($buscar){
       $this->usuario->set('busqueda',$buscar);
       return $this->usuario->contarRegistrosUsuarios_busqueda();
  }


  public function crearUsuario($username,$password,$tipo,$permisos,$email,$nombre,$apellido,$telefono,$telefono_2,$otro_contacto){
      $this->usuario->set('username',$username);
      $this->usuario->set('password',MD5($password));
      $this->usuario->set('tipo',$tipo);
      $this->usuario->set('permisos',$permisos);
      $this->usuario->set('email',$email);
      $this->usuario->set('nombre',$nombre);
      $this->usuario->set('apellido',$apellido);
      $this->usuario->set('telefono',$telefono);
      $this->usuario->set('telefono_2',$telefono_2);
      $this->usuario->set('otro_contacto',$otro_contacto);
      return $this->usuario->crearUsuario();
  }

  public function eliminarUsuario($id){
    $this->usuario->set('id',$id);
    $this->usuario->eliminarUsuario();
  }

  public function loginUsuario($username,$password){
    $this->usuario->set('username',$username);
    $this->usuario->set('password',MD5($password));

    $resp = $this->usuario->loginUsuario();

    if($resp == false){
      return false;
    } else {
      return $resp;
    }

  }

  public function verUsuario($id){
    $this->usuario->set('id',$id);
    return $this->usuario->verUsuario();
  }

  public function editarUsuario($id,$username,$tipo,$permisos,$nombre,$apellido,$telefono,$telefono_2,$otro_contacto){
    echo $username;
    $this->usuario->set('id',$id);
    $this->usuario->set('username',$username);
    $this->usuario->set('tipo',$tipo);
    $this->usuario->set('permisos',$permisos);
    $this->usuario->set('nombre',$nombre);
    $this->usuario->set('apellido',$apellido);
    $this->usuario->set('telefono',$telefono);
    $this->usuario->set('telefono_2',$telefono_2);
    $this->usuario->set('otro_contacto',$otro_contacto);

    return $this->usuario->editaUsuario();

  }


}
?>
