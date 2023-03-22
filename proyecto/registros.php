<?php 
	include("conectar.php");

	$nom = $_REQUEST['nom'];
	$nom2 = $_REQUEST['nom'];
	$user = $_REQUEST['user'];
	$pass = $_REQUEST['pass'];

	print($nom);
	print("<br>");
	print($nom2);
	print("<br>");
	print($user);
	print("<br>");
	print($pass);

	$link = Conectar();

	$query = "INSERT INTO det_usuarios(NOMBRE_C) VALUES ('$nom')";
	mysqli_query($link,$query);

	$query = "INSERT INTO usuarios(USER, NOMBRE, PASSWORD) VALUES ('$user', '$nom', '$pass')";
	mysqli_query($link,$query);

	header("Location: index.php?conf=1");
?>