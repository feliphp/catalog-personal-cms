<!DOCTYPE HTML>
<html>
	<head>
    <link href="<?php echo URL_ACTUAL;?>/css/style.css" rel='stylesheet' type='text/css' />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo URL_ACTUAL;?>/images/fav-icon.png" />
    <?php $dir = dirname(dirname(dirname(__FILE__)));
      require_once($dir.'/controlador/ControladorSistema.php');
      $sistema = new ControladorSistema();
      $arrayConfigSys = $sistema->verSistema(1);?>
      <?php if($arrayConfigSys['seo_activar'] == 'si'){?>
		   <title><? echo $arrayConfigSys['seo_title']; ?></title>
       <meta name="description" content="<? echo $arrayConfigSys['seo_description']; ?>">
       <meta name="keywords" content="<? echo $arrayConfigSys['seo_keywords']; ?>">
     <? } else { ?>
       <title>Catálogo</title>
     <? } ?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		<!-- Global CSS for the page and tiles -->
  		<link rel="stylesheet" href="<?php echo URL_ACTUAL;?>/css/main.css">
  		<!-- //Global CSS for the page and tiles -->
		<!---start-click-drop-down-menu----->
		<script src="<?php echo URL_ACTUAL;?>/js/jquery.min.js"></script>
<!----start-dropdown--->
 <script type="text/javascript">
var $ = jQuery.noConflict();
$(function() {
  $('#activator').click(function(){
    $('#box').animate({'top':'0px'},500);
  });
  $('#boxclose').click(function(){
  $('#box').animate({'top':'-700px'},500);
  });
});
$(document).ready(function(){
  $('#box').animate({'top':'-700px'},500);
//Hide (Collapse) the toggle containers on load
$(".toggle_container").hide();
//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
$(".trigger").click(function(){
  $(this).toggleClass("active").next().slideToggle("slow");
    return false; //Prevent the browser jump to the link anchor
});

});
</script>
</head>
<body>
<?php
 require_once($dir.'/controlador/ControladorCategorias.php');
 require_once($dir.'/controlador/ControladorLinks.php');
 $color_header = $arrayConfigSys['color_header'];
 $color_content = $arrayConfigSys['color_content'];
 $logo = $arrayConfigSys['logo'];
 $texto_header = $arrayConfigSys['texto_header'];
 $numero_categorias = $arrayConfigSys['numero_categorias'];
 $categoria = new ControladorCategorias();
 $rowcategorias = $categoria->index();
 $links = new ControladorLinks();
 $rowLinks = $links->index();
 if($color_header != '#ffffff'){
?>
<style>
  .header{
    background:url(/catalog/vistas/theme/images/border.png) repeat-x 0px 0px <?php echo $color_header; ?> !important;
  }
</style>
<?php }
if($color_content != '#ffffff'){ ?>
  <style>
  body{
  	background-color: <?php echo $color_content; ?> !important;
  }
  </style>
<?php } ?>
<div class="header">
      <div class="wrap">
      <div class="logo">
        <?php $imagen_archivo = $dir ."/media/images/" . $logo;
        if (file_exists($imagen_archivo)) { ?>
        <a href="index.php"><img src="<?php echo MEDIA ."images/". $logo; ?>" title="pinbal" width="154px" height="52px" /></a>
      <?php } else { ?>
        <a href="index.php"><img src="<?php echo URL_ACTUAL;?>/images/logo.png" title="pinbal" /></a>
      <?php  } ?>
      </div>
      <div class="nav-icon">
         <a href="#" class="right_bt" id="activator"><span> </span> </a>
      </div>
       <div class="box" id="box">
         <div class="box_content">
          <div class="box_content_center">
            <div class="form_content">
              <div class="menu_box_list">
                <ul>
                  <li><a href="index.php"><span>home</span></a></li>
                  <li><a href="index.php?cargar=contacto"><span>Contact</span></a></li>
                  <?php foreach ($rowLinks as $losLinks) { ?>
                    <li><a href="index.php?cargar=links&id=<?php echo $losLinks['id']; ?>"><span><?php echo $losLinks['titulo']; ?></span></a></li>
                  <?php } ?>
                  <div class="clear"> </div>
                </ul>
              </div>
              <a class="boxclose" id="boxclose"> <span> </span></a>
            </div>
          </div>
        </div>
      </div>
      <div class="top-searchbar">
        <form>
          <input type="text" name="busca" value="<?php echo $_GET['busca']; ?>"/><input type="submit" value="" />
          <?php if($numero_categorias > 0){ ?>

                <select name="categoria" id="soflow" onchange='this.form.submit()'>
                  <option value="null">Selecciona Categoría</option>
                  <?php
                      $count = 0;
                     foreach ($rowcategorias as $lacategoria) {
                        if($count < $numero_categorias){
                            echo "<option value='".$lacategoria['id']."'>".$lacategoria['nombre']."</option>";
                        }
                       $count++;
                      }
                  ?>
                </select>

              <?php } ?>
        </form>
      </div>

      <div class="userinfo">

      </div>
      <div class="clear"> </div>
    </div>
</div>
<div class="content">
  <div class="wrap">
