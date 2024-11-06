<?php 
	function Conectar() {
		$servername = 'localhost';
		$database = 'panecito';
		$username = 'root';
		$password = 'root';

		if (!($conn = mysqli_connect($servername, $username, $password)))
		{
			echo "Error al conectarse a la Base de datos. <br>";
			exit();
		}
		else
		{
			echo "Conexion exitosa. <br>";
		}

		if (!mysqli_select_db($conn, $database))
		{
			echo "Error al seleccionar la base de datos. <br>";
			exit();
		}
		else
		{
			echo "Conexion exitosa a la base de datos [$database]. <br>";
		}

		return $conn;
	}
?>