<?php
	include("conexion.php");

	$id = $_REQUEST['id'];

	$query = "DELETE FROM imagenes WHERE id = '$id'";
	$resultado = $conexion->query($query);

	if($resultado){
		echo '<script>alert("Producto eliminado")</script>';
		header("Location: stock.php");
	}else{
		echo "No se elimino la imagen";
	}
?>