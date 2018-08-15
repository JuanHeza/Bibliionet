<?php
require_once 'Main.php';
$id =$_GET['id'];
$con = mysqli_query($conexion,"SELECT * FROM `libro` WHERE `id_libro`=$id") or die(mysqli_error()); 
$dato = mysqli_fetch_array($con);
?>
<script>
	document.title='Mis Libros'
	document.getElementById("Cuerpo").innerHTML= '';
</script>

<section class="main container">
	<div class="container">
		<section id = "Cuerpo">
			<div class="miga-de-pan">
			<ol class="breadcrumb">
			  <li class="breadcrumb-item"><a href="Inicio.php">Inicio</a></li>
			  <li class="breadcrumb-item"><a href="MyBook.php">Mis Libros</a></li>
			 <?php 
				
				echo'<li class="breadcrumb-item active">',$dato['nombre'],'</li>';
			?>
			</ol>
			</div>
			<div class='widget-content'>
				<center>
				<?php
				echo '<iframe style="border:1px solid #666CCC" title="Reader" src="src\Libros/',$dato['nombre'],'.pdf" frameborder="1" scrolling="auto" width="750" height="560"></iframe>';
				?>

			</div>
		</section>
	</div>
</section>