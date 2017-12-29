<?php
$nombre= limpiarString($_POST['nombre']);
$clave_producto = limpiarString($_POST['clave_producto']);
$tipo = $_POST['tipo'];
$disponible = $_POST['disponible'];
$visible = $_POST['visible'];
$descripcion_corta = limpiarString($_POST['descripcion_corta']);
$descripcion = limpiarString($_POST['descripcion']);
$tags = limpiarString($_POST['tags']);
$precio_unitario = $_POST['precio_unitario'];
$descuento = $_POST['descuento'];
$precio_descuento = $_POST['precio_descuento'];
$precio_mayoreo = $_POST['precio_mayoreo'];
$cantidad_mayoreo = $_POST['cantidad_mayoreo'];
$categoria_id = $_POST['categoria_id'];
$anchura = limpiarString($_POST['anchura']);
$altura = limpiarString($_POST['altura']);
$peso = limpiarString($_POST['peso']);
$inventario = $_POST['inventario'];
$video = limpiarString($_POST['video']);
$item_extra = limpiarString($_POST['item_extra']);
$item_extra_2 = limpiarString($_POST['item_extra_2']);
$val_item_extra = limpiarString($_POST['val_item_extra']);
$val_item_extra_2 = limpiarString($_POST['val_item_extra_2']);

$buttonaceptar = $_POST['button-aceptar'];
$buttoneditar = $_POST['button-editar-aceptar'];
$hoy = date("mdy");
$uploadOk = 1;

if($_FILES["imagen_chica"]["name"] != null){
  $media_dir_imagen_chica = dirname(dirname(dirname(dirname(dirname(__FILE__)))))."/media/thumbnails/";
  $imagen_chica = $hoy ."_".rand() ."_". $_FILES["imagen_chica"]["name"];
  $url_file_imagen_chica = $media_dir_imagen_chica . basename($imagen_chica);
  $imagen_chicaFileType = pathinfo($url_file_imagen_chica,PATHINFO_EXTENSION);
}

if($_FILES["imagen_grande"]["name"] != null){
  $media_dir_imagen_grande = dirname(dirname(dirname(dirname(dirname(__FILE__)))))."/media/images/productos/";
  $imagen_grande = $hoy ."_".rand() ."_". $_FILES["imagen_grande"]["name"];
  $url_file_imagen_grande = $media_dir_imagen_grande . basename($imagen_grande);
  $imagen_grandeFileType = pathinfo($url_file_imagen_grande,PATHINFO_EXTENSION);
}
if($_FILES["imagen_mediana_1"]["name"] != null){
  $media_dir_imagen_mediana_1 = dirname(dirname(dirname(dirname(dirname(__FILE__)))))."/media/images/productos/";
  $imagen_mediana_1 = $hoy ."_".rand() ."_". $_FILES["imagen_mediana_1"]["name"];
  $url_file_imagen_mediana_1 = $media_dir_imagen_mediana_1 . basename($imagen_mediana_1);
  $imagen_mediana_1FileType = pathinfo($url_file_imagen_mediana_1,PATHINFO_EXTENSION);
}

if($_FILES["imagen_mediana_2"]["name"] != null){
  $media_dir_imagen_mediana_2 = dirname(dirname(dirname(dirname(dirname(__FILE__)))))."/media/images/productos/";
  $imagen_mediana_2 = $hoy ."_".rand() ."_". $_FILES["imagen_mediana_2"]["name"];
  $url_file_imagen_mediana_2 = $media_dir_imagen_mediana_2 . basename($imagen_mediana_2);
  $imagen_mediana_2FileType = pathinfo($url_file_imagen_mediana_2,PATHINFO_EXTENSION);
}

if($_FILES["imagen_mediana_3"]["name"] != null){
  $media_dir_imagen_mediana_3 = dirname(dirname(dirname(dirname(dirname(__FILE__)))))."/media/images/productos/";
  $imagen_mediana_3 = $hoy ."_".rand() ."_". $_FILES["imagen_mediana_3"]["name"];
  $url_file_imagen_mediana_3 = $media_dir_imagen_mediana_3 . basename($imagen_mediana_3);
  $imagen_mediana_3FileType = pathinfo($url_file_imagen_mediana_3,PATHINFO_EXTENSION);
}

if($buttonaceptar != null){
//validaciones
  if (file_exists($url_file_imagen_chica) || file_exists($url_file_imagen_grande) || file_exists($url_file_imagen_mediana_1) || file_exists($url_file_imagen_mediana_2) || file_exists($url_file_imagen_mediana_3)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }
  if ($_FILES["imagen_chica"]["size"] > 700000) {
    echo "Sorry, your file imagen_chica is too large.";
    $uploadOk = 0;
    die();
  }
  if ($_FILES["imagen_mediana_1"]["size"] > 50000000) {
    echo "Sorry, your file imagen_mediana_1 is too large.";
    $uploadOk = 0;
    die();
  }
  if ($_FILES["imagen_mediana_2"]["size"] > 50000000) {
    echo "Sorry, your file imagen_mediana_2 is too large.";
    $uploadOk = 0;
    die();
  }
  if ($_FILES["imagen_mediana_3"]["size"] > 50000000) {
    echo "Sorry, your file imagen_mediana_3 is too large.";
    $uploadOk = 0;
    die();
  }
  if ($_FILES["imagen_grande"]["size"] > 50000000) {
    echo "Sorry, your file imagen_grande is too large.";
    $uploadOk = 0;
    die();
  }
  if($_FILES["imagen_chica"]["name"] != null){
    if($imagen_chicaFileType != "jpg" && $imagen_chicaFileType != "png" && $imagen_chicaFileType != "jpeg" && $imagen_chicaFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed In Imagen Chica.";
      $uploadOk = 0;
    }
  }
  if($_FILES["imagen_grande"]["name"] != null){
    if($imagen_grandeFileType != "jpg" && $imagen_grandeFileType != "png" && $imagen_grandeFileType != "jpeg" && $imagen_grandeFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed In Imagen Grande.";
      $uploadOk = 0;
    }
  }
  if($_FILES["imagen_mediana_1"]["name"] != null){
    if($imagen_mediana_1FileType != "jpg" && $imagen_mediana_1FileType != "png" && $imagen_mediana_1FileType != "jpeg" && $imagen_mediana_1FileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed In Imagen Mediana 1.";
      $uploadOk = 0;
    }
  }
  if($_FILES["imagen_mediana_2"]["name"] != null){
    if($imagen_mediana_2FileType != "jpg" && $imagen_mediana_2FileType != "png" && $imagen_mediana_2FileType != "jpeg" && $imagen_mediana_2FileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed In Imagen Mediana 2.";
      $uploadOk = 0;
    }
  }
  if($_FILES["imagen_mediana_2"]["name"] != null){
    if($imagen_mediana_3FileType != "jpg" && $imagen_mediana_3FileType != "png" && $imagen_mediana_3FileType != "jpeg" && $imagen_mediana_3FileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed In Imagen Mediana 3.";
      $uploadOk = 0;
    }
  }

  // Upload
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
  } else {
    $upl=1;
    if($_FILES["imagen_chica"]["name"] != null){
      if (move_uploaded_file($_FILES["imagen_chica"]["tmp_name"], $url_file_imagen_chica)){
          $upl = 1;
        } else {
          $upl = 0;
          echo "Error al intentar cargar Imagen Chica";
      }
    }
    if($_FILES["imagen_grande"]["name"] != null){
      if (move_uploaded_file($_FILES["imagen_grande"]["tmp_name"], $url_file_imagen_grande)){
        $upl = 1;
      } else {
        $upl = 0;
        echo "Error al intentar cargar Imagen Grande";
        die();
      }
    }
    if($_FILES["imagen_mediana_1"]["name"] != null){
      if (move_uploaded_file($_FILES["imagen_mediana_1"]["tmp_name"], $url_file_imagen_mediana_1)){
        $upl = 1;
      } else {
        $upl = 0;
        echo "Error al intentar cargar Imagen Merdiana 1";
        die();
      }
    }
    if($_FILES["imagen_mediana_2"]["name"] != null){
      if (move_uploaded_file($_FILES["imagen_mediana_2"]["tmp_name"], $url_file_imagen_mediana_2)){
        $upl = 1;
      } else {
        $upl = 0;
        echo "Error al intentar cargar Imagen Merdiana 2";
        die();
      }
    }
    if($_FILES["imagen_mediana_3"]["name"] != null){
      if (move_uploaded_file($_FILES["imagen_mediana_3"]["tmp_name"], $url_file_imagen_mediana_3)){
        $upl = 1;
      } else {
        $upl = 0;
        echo "Error al intentar cargar Imagen Merdiana 3";
        die();
      }
    }

    //proceso master
    if ($upl == 1) {
          $dir = dirname(dirname(dirname(dirname(__FILE__))));
          require_once($dir.'/controlador/ControladorProductos.php');
          $producto = new ControladorProductos();
          $retPro=$producto->crearProducto($nombre,$clave_producto,$tipo,$disponible,$visible,$descripcion_corta,$descripcion,$tags,$precio_unitario,$descuento,$precio_descuento,$precio_mayoreo,$cantidad_mayoreo,$categoria_id,$anchura,$altura,$peso,$inventario,$imagen_chica,$imagen_mediana_1,$imagen_mediana_2,$imagen_mediana_3,$imagen_grande,$video,$rating,$item_extra,$item_extra_2,$val_item_extra,$val_item_extra_2);
            if($retPro == 1){
              echo "<script language=Javascript> location.href=\"".INDEX_PRO."\"; </script>";
              die();
            } else {
              echo "Ocurrio un Error";
            }
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
      }
} elseif ($buttoneditar != null) {

  //validaciones
  if (file_exists($url_file_imagen_chica) || file_exists($url_file_imagen_grande) || file_exists($url_file_imagen_mediana_1) || file_exists($url_file_imagen_mediana_2) || file_exists($url_file_imagen_mediana_3)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }
  if ($_FILES["imagen_chica"]["size"] > 700000) {
    echo "Sorry, your file imagen_chica is too large.";
    $uploadOk = 0;
    die();
  }
  if ($_FILES["imagen_mediana_1"]["size"] > 50000000) {
    echo "Sorry, your file imagen_mediana_1 is too large.";
    $uploadOk = 0;
    die();
  }
  if ($_FILES["imagen_mediana_2"]["size"] > 50000000) {
    echo "Sorry, your file imagen_mediana_2 is too large.";
    $uploadOk = 0;
    die();
  }
  if ($_FILES["imagen_mediana_3"]["size"] > 50000000) {
    echo "Sorry, your file imagen_mediana_3 is too large.";
    $uploadOk = 0;
    die();
  }
  if ($_FILES["imagen_grande"]["size"] > 50000000) {
    echo "Sorry, your file imagen_grande is too large.";
    $uploadOk = 0;
    die();
  }
  if($_FILES["imagen_chica"]["name"] != null){
    if($imagen_chicaFileType != "jpg" && $imagen_chicaFileType != "png" && $imagen_chicaFileType != "jpeg" && $imagen_chicaFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed In Imagen Chica.";
      $uploadOk = 0;
    }
  } else {
    $imagen_chica = $_POST['imagen_chica'];
  }

  if($_FILES["imagen_grande"]["name"] != null){
    if($imagen_grandeFileType != "jpg" && $imagen_grandeFileType != "png" && $imagen_grandeFileType != "jpeg" && $imagen_grandeFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed In Imagen Grande.";
      $uploadOk = 0;
    }
  } else {
    $imagen_grande = $_POST['imagen_grande'];
  }
  if($_FILES["imagen_mediana_1"]["name"] != null){
    if($imagen_mediana_1FileType != "jpg" && $imagen_mediana_1FileType != "png" && $imagen_mediana_1FileType != "jpeg" && $imagen_mediana_1FileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed In Imagen Mediana 1.";
      $uploadOk = 0;
    }
  } else {
    $imagen_mediana_1 = $_POST['imagen_mediana_1'];
  }
  if($_FILES["imagen_mediana_2"]["name"] != null){
    if($imagen_mediana_2FileType != "jpg" && $imagen_mediana_2FileType != "png" && $imagen_mediana_2FileType != "jpeg" && $imagen_mediana_2FileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed In Imagen Mediana 2.";
      $uploadOk = 0;
    }
  }else {
    $imagen_mediana_2 = $_POST['imagen_mediana_2'];
  }
  if($_FILES["imagen_mediana_3"]["name"] != null){
    if($imagen_mediana_3FileType != "jpg" && $imagen_mediana_3FileType != "png" && $imagen_mediana_3FileType != "jpeg" && $imagen_mediana_3FileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed In Imagen Mediana 3.";
      $uploadOk = 0;
    }
  } else {
    $imagen_mediana_3 = $_POST['imagen_mediana_3'];
  }
  // Upload
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
  } else {

        $upl=1;
        if($_FILES["imagen_chica"]["name"] != null){
            if (move_uploaded_file($_FILES["imagen_chica"]["tmp_name"], $url_file_imagen_chica)){
              $upl = 1;
            } else {
              $upl = 0;
              echo "Error al intentar cargar Imagen Chica";
              die();
            }
        }
        if($_FILES["imagen_grande"]["name"] != null){
          if (move_uploaded_file($_FILES["imagen_grande"]["tmp_name"], $url_file_imagen_grande)){
            $upl = 1;
          } else {
            $upl = 0;
            echo "Error al intentar cargar Imagen Grande";
            die();
          }
        }
        if($_FILES["imagen_mediana_1"]["name"] != null){
          if (move_uploaded_file($_FILES["imagen_mediana_1"]["tmp_name"], $url_file_imagen_mediana_1)){
            $upl = 1;
          } else {
            $upl = 0;
            echo "Error al intentar cargar Imagen Merdiana 1";
            die();
          }
        }
        if($_FILES["imagen_mediana_2"]["name"] != null){
          if (move_uploaded_file($_FILES["imagen_mediana_2"]["tmp_name"], $url_file_imagen_mediana_2)){
            $upl = 1;
          } else {
            $upl = 0;
            echo "Error al intentar cargar Imagen Merdiana 2";
            die();
          }
        }
        if($_FILES["imagen_mediana_3"]["name"] != null){
          if (move_uploaded_file($_FILES["imagen_mediana_3"]["tmp_name"], $url_file_imagen_mediana_3)){
            $upl = 1;
          } else {
            $upl = 0;
            echo "Error al intentar cargar Imagen Merdiana 3";
            die();
          }
        }
  if ($upl == 1) {
            //proceso master
              $dir = dirname(dirname(dirname(dirname(__FILE__))));
              $id = $_POST['id'];
              require_once($dir.'/controlador/ControladorProductos.php');
              $producto = new ControladorProductos();

              $retPro = $producto->editarProducto($id,$nombre,$clave_producto,$tipo,$disponible,$visible,$descripcion_corta,$descripcion,$tags,$precio_unitario,$descuento,$precio_descuento,$precio_mayoreo,$cantidad_mayoreo,$categoria_id,$anchura,$altura,$peso,$inventario,$imagen_chica,$imagen_mediana_1,$imagen_mediana_2,$imagen_mediana_3,$imagen_grande,$video,$item_extra,$item_extra_2,$val_item_extra,$val_item_extra_2);

              if($retPro == 1){
                echo "<script language=Javascript> location.href=\"".INDEX_PRO."\"; </script>";
                die();
              } else {
                echo "Ocurrio un Error al editar";
              }
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
}

?>
