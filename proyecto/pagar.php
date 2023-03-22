<?php 
	include('config.php');
	include('conexion.php');
	include('carrito.php');
	include('cabecera.php');
?>

<br>
<br>

<?php 
	if ($_POST) {

		$total = 0;
		$Correo="marco@correo.com";
		$SID=session_id();

		foreach ($_SESSION['CARRITO'] as $indice=>$row) {
			$total = $total+($row['PRECIO']*$row['CANTIDAD']);
		}
			$sentencia = $conexion -> prepare("INSERT INTO `tblventas` 
				(`ID`, `ClaveTransaccion`, `PaypalDatos`, `Correo`, `Total`, `status`) 
				VALUES (NULL,:ClaveTransaccion, '', :Correo, :Total, 'pendiente');");
			$sentencia -> bindParam(":ClaveTransaccion",$SID);
			$sentencia -> bindParam(":Correo",$Correo);
			$sentencia -> bindParam(":Total",$total);
			$sentencia -> execute(); 
		echo "<h3>".$total."</h3>";
	}else{
		$total = 0;
		#$SID=session_id();
		#$Correo="marco@correo.com";

		foreach ($_SESSION['CARRITO'] as $indice=>$row) {
			$total = $total+($row['PRECIO']*$row['CANTIDAD']);
		}
			$resultado = $pdo->prepare('INSERT INTO tblventas 
				(ID, Total) 
				VALUES (NULL, :Total);');
			$resultado -> mysqli_stmt_bind_param(":Total",$total);
			$resultado -> mysqli_execute();
			#$query -> exec();
		echo "<h3>".$total."</h3>";
	}
?>

<?php  
	include('pie.php');
?>