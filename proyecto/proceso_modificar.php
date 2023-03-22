<?php
	include("conexion.php");
	$id = $_REQUEST['id'];
	$nombre = $_POST['nombre'];
	$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
	$codigo = $_POST['codigo'];
	$total_p = $_POST['total_p'];
	$precio = $_POST['precio'];

	$query = "UPDATE imagenes SET nombre='$nombre', imagen='$imagen', codigo='$codigo', total_p='$total_p', precio='$precio' WHERE id = '$id'";
	$resultado = $conexion->query($query);

	if($resultado){
		header("Location: stock.php");
	}else{
		echo "No se modifico la imagen";
	}
?>