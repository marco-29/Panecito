<?php
	include("conexion.php");
	$nombre = $_POST['nombre'];
	$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
	$codigo = $_POST['codigo'];
	$total_p = $_POST['total_p'];
	$precio = $_POST['precio'];

	$query = "INSERT INTO imagenes(nombre,imagen,codigo,total_p,precio) VALUES('$nombre','$imagen','$codigo','$total_p','$precio')";
	$resultado = $conexion->query($query);

	if($resultado){
		header("Location: stock.php");
	}else{
		echo "No se inserto la imagen";
	}
?>