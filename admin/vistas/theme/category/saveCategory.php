<?php
$nombre= limpiarString($_POST['nombre']);
$descripcion = limpiarString($_POST['descripcion']);
$buttonaceptar = $_POST['button-aceptar'];
$buttoneditar = $_POST['button-editar-aceptar'];

$hoy = date("mdy");
$uploadOk = 1;

if($_FILES["imagen"]["name"] != null){
  $media_dir = dirname(dirname(dirname(dirname(dirname(__FILE__)))))."/media/images/";
  $imagen = $hoy ."_".rand() ."_". $_FILES["imagen"]["name"];
  $url_file = $media_dir . basename($imagen);
  $imageFileType = pathinfo($url_file,PATHINFO_EXTENSION);
}

if($buttonaceptar != null){
        if($_FILES["imagen"]["name"] != null){
          //validaciones
          if (file_exists($url_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
          }
          if ($_FILES["imagen"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
          }
          if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
          }
        }
        // Upload
        if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
          // if everything is ok, try to upload file
        } else {
          $upl=1;
          if($_FILES["imagen"]["name"] != null){
            if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $url_file)){
                $upl = 1;
              } else {
                $upl = 0;
                echo "Error al intentar cargar Imagen Chica";
            }
          }

          if ($upl == 1) {
                //proceso master
                $dir = dirname(dirname(dirname(dirname(__FILE__))));
                require_once($dir.'/controlador/ControladorCategorias.php');
                $categoria = new ControladorCategorias();
                $retCat=$categoria->crearCategoria($nombre,$descripcion,$imagen);
                if($retCat == 1){
                  echo "<script language=Javascript> location.href=\"".INDEX_CAT."\"; </script>";
                  die();
                } else {
                  echo "Ocurrio un Error";
                }

          } else {
            echo "Sorry, there was an error uploading your file.";
          }
        }


} elseif ($buttoneditar != null) {

        if($_FILES["imagen"]["name"] != null){
          //validaciones
          if (file_exists($url_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
          }
          if ($_FILES["imagen"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
          }
          if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
          }
        } else {
          $imagen= $_POST['imagen'];
        }

        // Upload
        if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
          // if everything is ok, try to upload file
        } else {
          $upl=1;
          if($_FILES["imagen"]["name"] != null){
            if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $url_file)){
                $upl = 1;
              } else {
                $upl = 0;
                echo "Error al intentar cargar Imagen Chica";
            }
          }


          if ($upl == 1) {
                //proceso master
                $dir = dirname(dirname(dirname(dirname(__FILE__))));
                $id = $_POST['id'];
                require_once($dir.'/controlador/ControladorCategorias.php');
                $categoria = new ControladorCategorias();
                $retCat = $categoria->editarCategoria($id,$nombre,$descripcion,$imagen);

                if($retCat == 1){
                  echo "<script language=Javascript> location.href=\"".INDEX_CAT."\"; </script>";
                  die();
                } else {
                  echo "Ocurrio un Error al editar";
                }


        }

      }

}

?>
