<?php
	include("../conexion.php");
	$id = $_REQUEST['id'];
	$cliente = $_POST['cliente'];
	$telefono = $_POST['telefono'];
	$producto = $_POST['producto'];
	$precio = $_POST['precio'];
	$cantidad = $_POST['cantidad'];

	$query = "UPDATE venta SET cliente='$cliente', telefono='$telefono', producto='$producto', precio='$precio', cantidad='$cantidad' WHERE id = '$id'";
	$resultado = $conexion->query($query);

	if($resultado){
		header("Location: ../inventario.php");
	}else{
		echo "No se modifico el pedido";
	}
?>