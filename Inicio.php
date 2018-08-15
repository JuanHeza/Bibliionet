<?php
require_once'Main.php';
?>
<script>
		document.title='Inicio'
		document.getElementById("Cuerpo").innerHTML= '';		
</script>
<style>
table {
    width:90%;
	HEIGHT: 50%;
	
}
table, th, td {
    border: hiden;
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
					<li class="active">Inicio</li>
				</ol>
			</div>
			<center>
<?php		
			$foto=0;
			echo '<table>';
			$con = mysqli_query($conexion,"SELECT * FROM `libro`") or die(mysqli_error()); 
			while ($dato = mysqli_fetch_array($con)){
				$foto++;
			}
			$K=rand(1,$foto);
			$con = mysqli_query($conexion,"SELECT * FROM `libro` WHERE `id_libro` = $K") or die(mysqli_error()); 
			$dato = mysqli_fetch_array($con);
			echo'<p class="post-contenido text-justify">
					<center>';
			echo '<center><table id="t01">
					<tr><th colspan="3" ><b><center>
					<h2 class="post-title">
						Bienvenido
					</h2></b></th></tr>	
				<tr> <td colspan ="3" ><center> <	-	-	Libro Del Dia	-	-	> </td></tr> 
				<tr>
					<td width=40% ><center> <img src="src\Fotos/Catalago/',$dato['portada'],'" width=70%><br></td>
						<td >
							<b>Autor:</b><center>',$dato['autor'],'</center><br>
							<b>Genero:</b><center>',$dato['genero'],'</center><br>
							<b><center><a href="Descripcion.php?id=',$dato['id_libro'],'"><button type="submit" class="btn btn-success" >VER</button></a></center><br>
						</td>
				</tr>';
			echo'	</center>
				</p>';
?>
		</section>
	</div>
</section>


