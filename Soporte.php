<?php
require_once'Main.php';
?>
<script>
		document.title='Soporte'
		document.getElementById("Cuerpo").innerHTML= '';		
</script>
<section class="main container">
		<div class="container">

			<section id = "Cuerpo">
			<div class="miga-de-pan">
				<ol class="breadcrumb" id="Ubicacion">
					<li class="active"><a href="Inicio.php">Inicio</a></li>
					<li>Soporte</li>
				</ol>
			</div>
			<center><img src="src/ST.png" width="55%"></center>

<?php
if (!isset($_POST['Email'])) {
?>
	<br><br><form class="form-horizontal" action="<?=$_SERVER['PHP_SELF']?>" method="post">
		<div class="form-group">
		<label for="Nombre" class="col-sm-4 control-label">Nombre</label>
			<div class="col-sm-6">
			  <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Nombre">
			</div>
		</div>
		<div class="form-group">
		<label for="Email" class="col-sm-4 control-label">Email</label>
			<div class="col-sm-6">
			  <input type="email" class="form-control" name="Email" id="Email" placeholder="Email">
			</div>
		</div>
		<div class="form-group">
		<label for="Email" class="col-sm-4 control-label">Asunto</label>
			<div class="radio col-sm-2">
				<label>
					<input type="radio" name="Asunto" value="Problema" >
					Problema
				</label>
			</div>
			<div class="radio col-sm-2">
				  <label>
					<input type="radio" name="Asunto" value="Sugerencia">
					Sugerencia
				  </label>
			</div>
			<div class="radio col-sm-2">
				  <label>
					<input type="radio" name="Asunto" value="Otro">
					Otro
				  </label>
			</div>
		</div>	
		<center><div class="form-group">
		<label for="Mensaje" class="col-sm-4 control-label">Mensaje</label>
			<div class="col-sm-7">
			<textarea class="form-control" name="Mensaje" rows="6" id="Mensaje"></textarea>
			</div>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-danger">Enviar</button>
			<button type="reset" class="btn btn-primary">Borrar</button>
			</center>
		</div>
</form>
<?php
}else{
  $mensaje="Reporte de Soporte Tecnico";
  $mensaje.= "\n\nNombre: ". $_POST['Nombre'];
  $mensaje.= "\n\nEmail: ".$_POST['Email'];
  $mensaje.= "\n\nAsunto: ". $_POST['Asunto'];
  $mensaje.= "\n\nMensaje: \n".$_POST['Mensaje'];
  $destino= "juanehza@hotmail.com";
  $remitente = $_POST['Email'];
  $asunto = "Algo - ".$_POST['Asunto'];
  mail($destino,$asunto,$mensaje,"FROM: $remitente");
?>
  <p><strong>Mensaje enviado.</strong></p>
<?php
	echo "<p><center><strong>Nombre: </strong>". $_POST['Nombre']."<br>";
	echo "<strong>Remitente: </strong>".$remitente."<br>";
	echo "<strong>Asunto: </strong>". $asunto."<br>";
	echo "<strong>Mensaje: </strong>".$_POST['Mensaje']."<br></p>";
}
?>

			</section>
		</div>
</section>
<?php
?>
