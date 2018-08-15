<?php
function conexBase(){
	global $conexion;
	global $db;
	$conexion=mysqli_connect("localhost","root","","")
				or die("Error en Conexion");
	$db= mysqli_select_db($conexion,"kingdom")
			or die("Problemas en la seleccion de la base de datos");

	if (!mysqli_set_charset($conexion, "utf8")) {
		printf("Error cargando el conjunto de caracteres utf8: %s\n", mysqli_error($conexion));
		exit();
	}
}
conexBase();
?>