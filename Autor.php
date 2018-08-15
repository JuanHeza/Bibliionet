<?php
require_once 'Main.php';
?>
<script>
	document.title='Autor'
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
					<li>Autor</li>
				</ol>
			</div>			
		<?php
			if (isset($_GET['autor'])){
				$Pato=$_GET['autor'];
//				$con = mysqli_query($conexion,"SELECT * FROM `libro` WHERE `autor` = $Pato") or die(mysql_error());
			}	
			if (isset($_GET['genero'])){
				$Pato=$_GET['genero'];
//				$con = mysqli_query($conexion,"SELECT * FROM `libro` WHERE `genero` = $Pato ") or die(mysql_error());
			}	
			$foto=0;
			echo '<center><table id="t01">
					<tr><th colspan="3"><b><center>',$Pato,'<b></th></tr>';
			if (isset($_GET['autor'])){
//				$Pato=$_GET['autor'];
				$con = mysqli_query($conexion,"SELECT * FROM `libro` WHERE `autor` = $Pato") or die(mysql_error());
			}	
			if (isset($_GET['genero'])){
//				$Pato=$_GET['genero'];
				$con = mysqli_query($conexion,"SELECT * FROM `libro` WHERE `genero` = $Pato ") or die(mysql_error());
			}	
			while ($dato = mysqli_fetch_array($con)){
				if ($foto==0)
					echo'<tr><div class="row">';
				if ($foto >=0){
					if ($foto % 4 == 0)
						echo '</div></td></tr><tr><td><div class="row">'; 
					echo'<div class="col-md-3">
							<center><br><a href="Descripcion.php">
								<img src="src\Fotos/Catalago/',$dato['portada'],'" class="img-responsive" width="75%" alt="'.$dato['nombre'].'">
							</a>  
						</div>';
				}
				$foto+=1;
			}
			echo '</div></table>'; 
		?>
		</section>
	</div>
</section>
	
<?php
?>



