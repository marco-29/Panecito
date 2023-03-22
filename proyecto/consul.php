<?php 
	include("conectar.php");

	$link = Conectar();

	$query = 'SELECT * FROM det_usuarios';
	$consulta = mysqli_query($link,$query);
	$datos = mysqli_num_rows($consulta);

	print("El numero de registros de la tabla det_usuarios es: [$datos] <br>");

	$columnas = mysqli_num_fields($consulta);

	print("El numero de columnas de la tabla det_usuarios es: [$columnas] <br>");

	print("<br><hr><br>");
	print("Los Datos de la tabla det_usuarios son: <br>");

	while($fila = mysqli_fetch_row($consulta))
	{
		print("$fila[0] - $fila[1] - $fila[2] - $fila[3] - $fila[4] - $fila[5] <br>");
	}
?>