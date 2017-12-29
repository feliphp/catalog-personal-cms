<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <title>Login Page  | Catalog Admin</title>
		<link rel="shortcut icon" href="<?php echo URL_ADMIN?>/images/favicon.png">
		<!-- Bootstrap CSS -->
    <link href="<?php echo URL_ADMIN?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo URL_ADMIN?>/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo URL_ADMIN?>/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo URL_ADMIN?>/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="<?php echo URL_ADMIN?>/css/style.css" rel="stylesheet">
    <link href="<?php echo URL_ADMIN?>/css/style-responsive.css" rel="stylesheet" />
</head>
<body class="login-img3-body">

	<div class="container">

		<form class="login-form" method="post"  action="<?php echo URL_LINKS; ?>admin/index.php?cargar=loginUser">
			<div class="login-wrap">
					<p class="login-img"><i class="icon_lock_alt"></i></p>
					<div class="input-group">
						<span class="input-group-addon"><i class="icon_profile"></i></span>
						<input type="text" class="form-control" name="username" placeholder="Username" autofocus>
					</div>
					<div class="input-group">
							<span class="input-group-addon"><i class="icon_key_alt"></i></span>
							<input type="password" class="form-control" name="password" placeholder="Password">
					</div>
					<label class="checkbox">
							<input type="checkbox" value="remember-me"> Remember me
							<!-- habilitar despuès<span class="pull-right"> <a href="#"> Forgot Password?</a></span>-->
					</label>
					<button class="btn btn-primary btn-lg btn-block" name="button-login-aceptar" type="submit">Login</button>
					<!--habilitar despuès <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>-->
			</div>
		</form>

		<?php require('./vistas/theme/foother.php'); ?>
