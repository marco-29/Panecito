<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../css/mystyles.css">
	<title>Index de Imagenes</title>
</head>
<body class="cuerpo">
	<?php
		include("../conexion.php");

		$id = $_REQUEST['id'];

		$query = "SELECT * FROM venta WHERE id='$id'";
		$resultado = $conexion->query($query);
		$row = $resultado->fetch_assoc();
	?>

	<div class="caja lista">
		<a href="../det.php"><img src="../images/let.png" class="img_logo"></a>
		<nav>
			<ul>
				<li><a href="../stock.php" class="btn btn-outline-dark cursor"><b>Productos en Stock</b></a></li>
				<li><a href="../cajero.php" class="btn btn-outline-dark cursor"><b>Cajero</b></a></li>
				<li><a href="../inventario.php" class="btn btn-outline-dark cursor"><b>Inventario</b></a></li>
			</ul>
		</nav>

		<div class="usu">
			<?php
				session_start();
				$user = $_SESSION['nombre'];

				if(!isset($user)){
					header("location: index.php");

				}

				echo "<p>$user</p>";
			?>
		</div>

		<div class="dropdown1">
  			<button class="dropbtn"><i class="bi bi-person-lines-fill"></i></button>
  			<div class="dropdown-content">
    			<a href="../salir.php"> Cerrar sesion </a>
  			</div>
		</div>
	</div>

	<center>
		<div class="caj">
			<h1 class="sep_ti">EDITAR</h1>
		</div>
	</center>

	<center>
		<div class="caj_edit">
			<br>
				<form action="editar_pedido.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
					<input type="text" REQUIRED name="cliente" placeholder="Cliente" value="<?php echo $row['cliente']; ?>"/><br>
					<input type="text" REQUIRED name="telefono" placeholder="Telefono" value="<?php echo $row['telefono']; ?>"/><br>
					<input type="text" REQUIRED name="producto" placeholder="Producto" value="<?php echo $row['producto']; ?>"/><br>
					<input type="number" REQUIRED name="precio" placeholder="Precio" value="<?php echo $row['precio']; ?>"/><br>
					<input type="number" REQUIRED name="cantidad" placeholder="Cantidad" value="<?php echo $row['cantidad']; ?>"/><br>
					
					<button class="btn btn-outline-dark cursor b_mo">Editar</button>
					
				</form>		
		</div>
	</center>

</body>
</html>