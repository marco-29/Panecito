<?php 
	include("../conectar.php");

	$telefono = $_REQUEST['telefono'];
	$direccion = $_REQUEST['direccion'];
	$correo = $_REQUEST['correo'];
	$dias = $_REQUEST['dias'];
	$horario = $_REQUEST['horario'];

	print($telefono);
	print("<br>");
	print($direccion);
	print("<br>");
	print($correo);
	print("<br>");
	print($dias);
	print("<br>");
	print($horario);

	$link = Conectar();

	$query = "INSERT INTO sucursales(telefono, direccion, correo, dias, horario) VALUES ('$telefono', '$direccion', '$correo', '$dias', '$horario')";
	mysqli_query($link,$query);

	header("Location: ../det.php?conf=1");
?>