<?php
require_once 'Main.php';
?>
<script>
	document.title='Catalago'
	document.getElementById("Cuerpo").innerHTML= '';
</script>



<section class="main container">
	<div class="container">
		<section id = "Cuerpo">
			<div class="miga-de-pan">
				<ol class="breadcrumb" id="Ubicacion">
					<li class="active"><a href="Inicio.php">Inicio</a></li>
					<li>Catalago</li>
				</ol>
			</div>
		<?php
			$foto=0;
			echo '<table>';
			$con = mysqli_query($conexion,"SELECT * FROM `libro` WHERE 1") or die(mysqli_error()); 
			while ($dato = mysqli_fetch_array($con)){
				if ($foto==0)
					echo'<tr><td><div class="row"><center>';
				if ($foto >=0){
					if ($foto % 4 == 0 && $foto > 1)
						echo '</div></td></tr><tr><td><div class="row">'; 
					echo'<div class="col-md-3">
							<center><br><a href="Descripcion.php?id=',$dato['id_libro'],'">
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



