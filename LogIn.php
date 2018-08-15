<html>
<head>
	<title>Login</title>
</head>
<body>
<?php 
include("conexion.php");

$correo = $_REQUEST['correo'];
$contra = $_REQUEST['contra'];
$consulta = sprintf("select Correo, Contra from usuario where Correo = '%s'", mysql_real_escape_string($correo));
$registro = mysql_query($consulta);
//$registro = mysqli_query($conexion,"select Correo, Contra from usuario where Correo = $correo");

while($reg = mysql_fetch_array($registro)) {
	$correo_consulta = $reg['Correo'];
	$contra_consulta = $reg['Contra'];
}
// $registro = mysql_query("select Correo, Contra from usuario where Correo = '$correo'",$conexion)
// 	or die("ERROR 1".mysql_error());
// $registro2 = mysql_query("select Contra from usuario where Contra = '$_REQUEST[contra]'",$conexion)
// 	or die("ERROR 2".mysql_error());
// while($reg = mysql_fetch_array($registro)) {
// 	echo "<br><br>". $reg;
// }

if(empty($correo) || empty($contra)) {
	echo "<script>
	window.alert('Usuario o contraseña incorrecto');
	window.location = ('login.php');
	</script>";
}else if($correo == $correo_consulta && $contra == $contra_consulta) {
	echo "<script>
		window.alert('Bienvenido');
		window.location = ('books.html');
		</script>";
} else {
	echo "<script>
	window.alert('Usuario o contraseña incorrecto');
	</script>";
}
?>
</body>
</html>

