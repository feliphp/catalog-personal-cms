<?php session_start();
if($_SESSION['username'] == ''){
  echo "<script language=Javascript> location.href=\"".LOGOUT."\"; </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo URL_ADMIN;?>/images/favicon.ico" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="<?php echo URL_ADMIN;?>/images/favicon.png">

    <title>Elements | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->
    <link href="<?php echo URL_ADMIN;?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo URL_ADMIN;?>/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo URL_ADMIN;?>/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo URL_ADMIN;?>/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="<?php echo URL_ADMIN;?>/css/style.css" rel="stylesheet">
    <link href="<?php echo URL_ADMIN;?>/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>

  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.php?cargar=inicio" class="logo">FLIX <span class="lite">Admin</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">
                    <li>
                      <!--  <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>-->
                    </li>
                </ul>
                <!--  search form end -->
            </div>

            <div class="top-nav notification-row">
                <!-- notificatoin dropdown start-->
              <ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="<?php echo URL_ADMIN;?>/images/avatar1_small.png">
                            </span>
                            <span class="username">
                              <?php echo $_SESSION['username'];?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <!--<li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                            </li>-->
                            <li>
                                <a href="<?php echo LOGOUT."?cargar=logout"; ?>"><i class="icon_key_alt"></i> Log Out</a>
                            </li>

                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>
      <!--header end-->
      <!--sidebar start-->
          <aside>
              <div id="sidebar"  class="nav-collapse ">
                  <!-- sidebar menu start-->
                  <ul class="sidebar-menu">
                      <li class="active">
                          <a class="" href="index.php?cargar=inicio">
                              <i class="icon_house_alt"></i>
                              <span>Dashboard</span>
                          </a>
                      </li>
              <li class="sub-menu">
                          <a href="javascript:;" class="">
                              <i class="icon_document_alt"></i>
                              <span>Formularios</span>
                              <span class="menu-arrow arrow_carrot-right"></span>
                          </a>
                          <ul class="sub">
                              <li><a class="" href="index.php?cargar=addUser">Agregar Usuario</a></li>
                              <li><a class="" href="index.php?cargar=addCategory">Agregar Categoría</a></li>
                              <li><a class="" href="index.php?cargar=addProduct">Agregar Producto</a></li>
                              <li><a class="" href="index.php?cargar=addLink">Agregar Link</a></li>
                          </ul>
                      </li>
                      <li class="sub-menu">
                          <a href="javascript:;" class="">
                              <i class="icon_desktop"></i>
                              <span>Secciones</span>
                              <span class="menu-arrow arrow_carrot-right"></span>
                          </a>
                          <ul class="sub">
                              <li><a class="" href="index.php?cargar=inicio">Usuarios</a></li>
                              <li><a class="" href="index.php?cargar=category">Categorías</a></li>
                              <li><a class="" href="index.php?cargar=product">Productos</a></li>
                              <li><a class="" href="index.php?cargar=system">Sistema</a></li>
                              <li><a class="" href="index.php?cargar=link">Links</a></li>
                          </ul>
                      </li>


                  </ul>
                  <!-- sidebar menu end-->
              </div>
          </aside>
          <!--sidebar end-->
