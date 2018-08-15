<html>
<head>
	<meta charset="utf-8">
	<title>Insertar</title>
</head>
<body>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<?php 
include("conexion.php");
mysqli_query($conexion,"insert into usuario(Nombre,Correo,Tarjeta,CV,Contra) 
	values('$_REQUEST[nombre]','$_REQUEST[correo]','$_REQUEST[tarjeta]','$_REQUEST[cv]','$_REQUEST[contra]')")
	or die 
	("<script>
		window.alert('ERROR');
		</script>".mysql_error());
mysql_close($conexion);

echo '<script> 
		window.alert("Registro agregado correctamente"); 
		window.location = ("index.php");	
      </script>';
?>
</body>
</html>
