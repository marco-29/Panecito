<?php 
	include("conectar.php");

	$user = $_REQUEST['user'];
	$pass = $_REQUEST['pass'];

	$link = Conectar();

	$query = "SELECT USER, PASSWORD FROM usuarios WHERE USER = '" . $user . "'";

	$consulta = mysqli_query($link,$query);

	$datos = mysqli_num_rows($consulta);

	if ($datos == 1)
	{
		while($fila = mysqli_fetch_row($consulta))
		{
			//$user_consulta = $fila[1];
			//print("Acceso Autorizado");
			if($fila[1] == $pass)
			{
				session_start();
				$_SESSION['nombre'] = $user;

				header("location: det.php");
			}
			else
			{
				header("location: index_error.php?err=0");
			}			
		}
	}
	elseif ($datos > 1) {
		print("Error al consultar la base de datos, contactar al Administrador");
	}
	elseif ($datos == 0){
		//print("El Usuaior no Existe");
		header("location: index_error.php?err=1");
	}

	print("<br>");
	print("<a href = index.php>Inicio</a> ");
?>