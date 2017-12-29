<?php
$color_header = $_POST['color_header'];
$color_content = $_POST['color_content'];
$texto_header = $_POST['texto_header'];
$texto_contacto = $_POST['texto_contacto'];
$numero_categorias = $_POST['numero_categorias'];
$facebook = $_POST['facebook'];
$seo_activar = $_POST['seo_activar'];
$seo_title = limpiarString($_POST['seo_title']);
$seo_description = limpiarString($_POST['seo_description']);
$seo_keywords= limpiarString($_POST['seo_keywords']);

$buttoneditar = $_POST['button-editar-aceptar'];


$media_dir = dirname(dirname(dirname(dirname(dirname(__FILE__)))))."/media/images/";
$media_dir_tmp = dirname(dirname(dirname(dirname(dirname(__FILE__)))))."/media/temp/";
$hoy = date("mdy");
$imagen = $hoy ."_".rand() ."_". $_FILES["logo"]["name"];
$url_file_tmp = $media_dir_tmp . basename($imagen);
$nombre_imagen_sin_extension = array_pop(array_reverse(explode(".", $imagen)));
$url_file = $media_dir . basename($nombre_imagen_sin_extension).".png";
$imagen_png = basename($nombre_imagen_sin_extension).".png";
$uploadOk = 1;
$imageFileType = pathinfo($url_file_tmp,PATHINFO_EXTENSION);

if($buttonaceptar != null){
    //No deve pasar
  } elseif ($buttoneditar != null) {

        $uploadOk = 1;
        //validaciones
        if($_FILES["logo"]["name"] != null){
          if (file_exists($url_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
          }
          if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
          }
        } else {
          $imagen = $_POST['logo'];
        }

        // Upload
        if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
          // if everything is ok, try to upload file
        } else {
          $upl=1;
          if($_FILES["logo"]["name"] != null){
            if (move_uploaded_file($_FILES["logo"]["tmp_name"], $url_file_tmp)){
                $upl = 1;
                $dir_zebra = dirname(dirname(__FILE__))."/vendor/Zebra_Image/Zebra_Image.php";
                require_once($dir_zebra);
                $img = new Zebra_Image();
                // a source image
                $img->source_path = $url_file_tmp;

                $img->target_path = $url_file;

                // resize the image to exactly 150x150 pixels, without altering aspect ratio, by using the CROP_CENTER method
                $img->resize(154, 52, ZEBRA_IMAGE_CROP_CENTER);

                // apply a "sharpen" filter to the resulting images
                $img->sharpen_images = true;

                unlink($url_file_tmp);
              } else {
                $upl = 0;
                echo "Error al intentar cargar Imagen Chica";
            }
          }

          if ($upl == 1) {
                //proceso master
                $dir = dirname(dirname(dirname(dirname(__FILE__))));
                $id = $_POST['id'];
                require_once($dir.'/controlador/ControladorSistema.php');
                $sistema = new ControladorSistema();
                $retSys = $sistema->editarSistema($id,$color_header,$color_content,$imagen_png,$texto_header,$texto_contacto,$numero_categorias,$facebook,$seo_activar,$seo_title,$seo_description,$seo_keywords);

                if($retSys == 1){
                  echo "<script language=Javascript> location.href=\"".INDEX_SYS."\"; </script>";
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
