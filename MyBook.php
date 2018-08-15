<?php
require_once 'Main.php';
?>
<script>
	document.title='Mis Libros'
	document.getElementById("Cuerpo").innerHTML= '';
</script>

<style>
table {
    width:90%;
	HEIGHT: 50%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr	{
    background-color: white;
    color: black;
}
table#t01 th	{
    background-color: green;
    color: white;
}
</style>

<section class="main container">
	<div class="container">
		<section id = "Cuerpo">
			<div class="miga-de-pan">
				<ol class="breadcrumb" id="Ubicacion">
					<li class="active"><a href="Inicio.php">Inicio</a></li>
					<li>Mis Libros</li>
				</ol>
			</div>
			<table>
			<center><table id="t01">
				<tr><th colspan="3"><b><center>Mis Libros<b></th></tr>
	<?php	$foto=0;
			$con = mysqli_query($conexion,"SELECT * FROM `libro` WHERE 1") or die(mysqli_error()); 
			while ($dato = mysqli_fetch_array($con)){
				if ($foto==0)
					echo'<tr><div class="row">';
				if ($foto >=0){
					if ($foto % 4 == 0)
						echo '</div></td></tr><tr><td><div class="row">'; 
					echo'<div class="col-md-3">
							<center><br><a href="Descripcion.php?id=',$dato['id_libro'],'">
									<img src="src\Fotos/Catalago/',$dato['portada'],'" class="img-responsive" width="70%" alt="'.$dato['nombre'].'"><br>
							</a><a href="Lector.php?id=',$dato['id_libro'],'">
							<button type="submit" class="btn btn-danger" >Leer</button>
							</a>  
						</div>';
				}
				$foto+=1;
			if ($foto >3)
				break;
			}
			echo '</div></table>'; 
		?>
		</section>
	</div>
</section>