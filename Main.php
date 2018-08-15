
<!DOCTYPE html>
<?php
/*session_start();
$admin = $_SESSION['ul']->admin;
if ($admin != 2) {
} else {
  header("Location: Login.php");
}
 */ require_once 'conexion.php';

?>
<html lang="es"><head><meta charset="UTF-8">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<script type="text/javascript" src="js/flipclock.js"></script>
	<script src="js/JSAM.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<title>  </title>

	<head>
		<link rel="shortcut icon" href="Folder.ico" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="src/slider/engine1/style.css" />
		<script type="text/javascript" src="src/slider/engine1/jquery.js"></script>
	</head>
		
	<body><center>
			<section class="jumbotron jumbotron-ar">
			<header>
				<center><a href="Inicio.php"><img src="src/libro 1.png" width="30%" ></a></center>
			</header>
			</section>
		</center>
		<div id="sidebar">
			<ul id="content" class="nav nav-pills nav-stacked" style="max-width: 250px;">
				<li id="Inicio" class="">	 <a href="Inicio.php" onclick="Inicio()">		<span class="glyphicon glyphicon-home"></span><b>  Inicio</b></a></li>
				<li id="Novedades" class=""> <a href="Novedades.php" onclick="Novedades()">		<span class="glyphicon glyphicon-comment"></span><b>  Novedades</b></a></li>
				<li id="Catalago" class=""><a href="Catalago.php" onclick="Ccatalago()"><span class="glyphicon glyphicon-th-list"></span><b>  Catalago</b></a></li>
				<li id="Contacto" class="">	 <a href="Soporte.php" onclick="Contacto()">		<span class="glyphicon glyphicon-send"></span><b>  Contacto</b></a></li>
				<li id="" class="">	 <a href="#" onclick="#"></a></li>
				<li id="Descripcion" class="">	 <a href="#" onclick="Descripcion()">		<span class="glyphicon glyphicon-picture"></span>  Descripcion</a></li>
				<li id="Mis Libros" class="">	 <a href="MyBook.php" onclick="MyBook()">		<span class="glyphicon glyphicon-user"></span>  Mis Libros</a></li>
				<li id="Lector" class="">	 <a href="#" onclick="Lector()">		<span class="glyphicon glyphicon-asterisk"></span> Lector</a></li>
				<li id="Autor" class="">	 <a href="Autor.php" onclick="Autor()">		<span class="glyphicon glyphicon-info-sign"></span>  Autor</a></li>
<!--				<li id="Cerrar" class="">	 <a href="LogIn.php">							<span class="glyphicon glyphicon-off"></span> Cerrar Sesion</a></li>
-->			</ul>
		</div>
			
		<style type="text/css">
			#Cuerpo{
				width: 56.5%;
			}
		</style>
			
		<div id="FecHora" style="text-align:middle;width:320px;padding:0.5em 0;">
			<div><center>
					<ul id="content" class="nav nav-pills nav-stacked" style="max-width: 250px;">
					<li class="Registro"><a href="Registro.php">Registro</a></li>
					<li class="LogIn" ><a href="Index.php">LogIn</a></li>
					<li id="admin" class="active" style="display:none"><a href="Admin.php" style=" background-color: #2eb82e;"><span class="glyphicon glyphicon-star"></span> Admin</a></li>
					</ul>
				</div>
		</div>
	</h3>
	<!--
	<?php
    if ($admin == 1) {
      echo "<script>
      document.getElementById('admin').style.display = 'block'; </script>";
    }
    ?>
	-->
		</body>
</html>
