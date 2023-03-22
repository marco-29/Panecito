<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cajero</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="css/mystyles.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap-icons.css">
	<script src="js/micodigo.js"></script>
	<script>
		function sumar2(){
			var dato1, dato2, resultado;
			dato1 = prompt ("¿Cuantas piezas se lleva? ");
			dato2 = prompt ("¿Cual es su precio? ");
			
			resultado = parseInt(dato1) * parseInt(dato2);
			resultado = 'El total de la compra es: $' + resultado + '.00';
			alert (resultado);
		}
	</script>
</head>
<body class="cuerpo3">
	<div class="caja lista">
		<a href="det.php"><img src="images/let.png" class="img_logo"></a>
		<nav>
			<ul>
				<li><a href="stock.php" class="btn btn-outline-dark cursor"><b>Productos en Stock</b></a></li>
				<li><a href="cajero.php" class="btn btn-outline-dark cursor botones"><b>Cajero</b></a></li>
				<li><a href="inventario.php" class="btn btn-outline-dark cursor"><b>Pedidos</b></a></li>
				<li class="nav-item active"><a class="nav-link" href="mostrarCarrito.php"><b>Ticket(<?php echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']); ?>)</b></a></li>
			</ul>
		</nav>

		<div class="usu">
			<?php
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
    			<a href="salir.php"> Cerrar sesion </a>
  			</div>
		</div>
	</div>

	<center>
		<div class="caj2">
			<h1 class="sep_ti">CAJERO</h1>
		</div>
	</center>
