<?php
require_once'Main.php';
?>

<script>
	document.title='Descripcion'
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
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
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
						<li>Descripcion</li>
					</ol>
				</div>
				<?php
					$id =$_GET['id'];
					$con = mysqli_query($conexion,"SELECT * FROM `libro` WHERE `id_libro`=$id") or die(mysqli_error()); 
					$dato = mysqli_fetch_array($con);
					echo '<center><br>
					<table id="t01">
						<tr>
							<th colspan="3"><b><center>',$dato['nombre'],'<b></th>
						</tr>
						<tr>
							<td width=40%><center> <img src="src\Fotos/Catalago/',$dato['portada'],'" width=70%>
							<td>
								<b>Autor:</b><center><a href="Autor.php?autor=',$dato['autor'],'">',$dato['autor'],'</a></center><br>
								<b>Genero:</b><center><a href="Autor.php?genero=',$dato['genero'],'">',$dato['genero'],'</a></center><br>
								<b>Año:</b><center>',$dato['anio'],'</center><br>
								<b><center><a href="Lector.php?id=',$dato['id_libro'],'"><button type="submit" class="btn btn-success" >LEER</button></a></center><br>
							</td>
						</tr>
						<tr>
							<td colspan="2"><b>Descripcion:</b><br><center>',$dato['descripcion'],'</td>
						</tr>
					</table>';
					mysqli_close($conexion);
				?>
					<br><br><br><br>
				</section>
		</div>
</section>
<?php
?>