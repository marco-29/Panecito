<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pedidos</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="css/mystyles.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap-icons.css">
	<script src="js/micodigo.js"></script>
	<script>
		function funcion_javascript(){
			alert('Pedido finalizado');
		}
	</script>
	<script>
		function funcion_eliminar(){
			alert('Pedido eliminado');
		}
	</script>
</head>
<body class="cuerpo4">
	<div class="caja lista">
		<a href="det.php"><img src="images/let.png" class="img_logo"></a>
		<nav>
			<ul>
				<li><a href="stock.php" class="btn btn-outline-dark cursor"><b>Productos en Stock</b></a></li>
				<li><a href="cajero.php" class="btn btn-outline-dark cursor"><b>Cajero</b></a></li>
				<li><a href="inventario.php" class="btn btn-outline-dark cursor botones"><b>Pedidos</b></a></li>
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
    			<a href="salir.php"> Cerrar sesion </a>
  			</div>
		</div>
	</div>

	<center>
		<div class="caj2">
			<h1 class="sep_ti">PEDIDOS</h1>
		</div> 
	</center>

	<form action="total.php" method="post">
		<div>
			<center>
				<table border="2" class="ti tab">
					<thead>
						<tr class="fil_su">
							<th class="td_id">#</th>
							<th class="td">CLIENTE</th>
							<th class="td">TELEFONO</th>
							<th class="td">PRODUCTO</th>
							<th class="td">PRECIO</th>
							<th class="td">CANTIDAD</th>					
							<th class="td">TOTAL</th>
							<th colspan="3" class="td_img"><a href="pedido/pedido.php" class="btn btn-outline-dark cursor b_nuevo"><b>AGREGAR PEDIDO</b></a></th>
						</tr>

					</thead>
					<tbody>
						<?php
							include("conexion.php");
							$query = "SELECT * FROM venta";
							$resultado = $conexion->query($query);
							while($row = $resultado->fetch_assoc()){
						?>
							<br>
							<tr>
								<td class="td_id tam"><?php echo $row['id']; ?></td>					
								<td class="td tam"><?php echo $row['cliente']; ?></td>
								<td class="td tam"><?php echo $row['telefono']; ?></td>
								<td class="td tam"><?php echo $row['producto']; ?></td>
								<td class="td tam">$<?php echo $row['precio']; ?></td>
								<td class="td tam"><?php echo $row['cantidad']; ?></td>
								<td class="td tam">$<?php echo number_format($row['precio']*$row['cantidad'],2);?></td>
								<th><a href="pedido/editar.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-dark cursor b_mo1"><b><i class="bi bi-pencil-square"></i></b></a></th>
								<th><a href="pedido/borrar.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-dark cursor b_el1"><b onclick="funcion_eliminar()"><i class="bi bi-trash-fill"></i></b></a></th>	
								<th class=""><a href="pedido/borrar.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-dark cursor b_mo2"><b onclick="funcion_javascript()"><i class="bi bi-check2-square"></i></b></a></th>
								
							</tr>
							<?php 
								}
							?>
					</tbody>
					
				</table>
			</center>
		</div>
	</form>
</body>
</html>