<?php
	include("../conexion.php");
	$cliente = $_POST['cliente'];
	$telefono = $_POST['telefono'];
	$producto = $_POST['producto'];
	$precio = $_POST['precio'];
	$cantidad = $_POST['cantidad'];

	$query = "INSERT INTO venta(cliente,telefono,producto,precio,cantidad) VALUES('$cliente','$telefono','$producto','$precio','$cantidad')";
	$resultado = $conexion->query($query);

	if($resultado){
		header("Location: ../inventario.php");
	}else{
		echo "No se inserto la imagen";
	}
?>