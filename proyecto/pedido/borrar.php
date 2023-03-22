<?php
	include("../conexion.php");

	$id = $_REQUEST['id'];

	$query = "DELETE FROM venta WHERE id = '$id'";
	$resultado = $conexion->query($query);

	if($resultado){
		echo '<script>alert("Producto eliminado")</script>';
		header("Location: ../inventario.php");
	}else{
		echo "No se elimino el pedido";
	}
?>