<?php
require_once 'Main.php';
?>
<script>
	document.title='Novdades'
	document.getElementById("Cuerpo").innerHTML= '';
</script>



<section class="main container">
	<div class="container">
		<section id = "Cuerpo">
			<div class="miga-de-pan">
				<ol class="breadcrumb" id="Ubicacion">
					<li class="active"><a href="Inicio.php">Inicio</a></li>
					<li>Novedades</li>
				</ol>
			</div>
		<?php
			$foto=0;
			echo '<table>';
				$Con = mysqli_query($conexion,"SELECT * FROM `libro` WHERE 1 ORDER BY `libro`.`id_libro` DESC") or die(mysql_error()); 
				while ($dato = mysqli_fetch_array($Con)){
					if ($foto==0)
						echo'<tr><td><div class="row"><center>';
					if ($foto >=0){
						if ($foto % 4 == 0 && $foto>1)
							echo '</div></td></tr><tr><td><div class="row">'; 
						echo'<div class="col-md-3">
								<center><br><a href="Descripcion.php?id=',$dato['id_libro'],'">
									<img src="src\Fotos/Catalago/',$dato['portada'],'" class="img-responsive" width="70%" alt="'.$dato['nombre'].'">
								</a>  
								</div>';
					}
					$foto+=1;
					if ($foto >7)
						break;
				}
			echo '</div></table>'; 

		?>
		</section>
	</div>
</section>
	
<?php
?>



