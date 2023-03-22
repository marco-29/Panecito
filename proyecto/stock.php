	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Productos en stock</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap-icons.css">
	<link rel="stylesheet" href="css/mystyles.css">
	<script src="js/micodigo.js"></script>
	<script>
		function funcion_javascript(){
			alert('Producto eliminado');
		}
	</script>
</head>
<body class="cuerpo2">
	<div class="caja lista">
		<a href="det.php"><img src="images/let.png" class="img_logo"></a>
		<nav>
			<ul>
				<li><a href="stock.php" class="btn btn-outline-dark cursor botones"><b>Productos en Stock</b></a></li>
				<li><a href="cajero.php" class="btn btn-outline-dark cursor"><b>Cajero</b></a></li>
				<li><a href="inventario.php" class="btn btn-outline-dark cursor"><b>Pedidos</b></a></li>
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
			<h1 class="sep_ti">PRODUCTOS EN STOCK</h1>
		</div>
	</center>

	<div>
		<center>
			<table border="2" class="ti tab">
				<thead>
					<tr class="fil_su">
						<th>PRODUCTO</th>
						<th>CODIGO</th>
						<th>NOMBRE</th>
						<th>TOTAL DE PIEZAS</th>
						<th>PRECIO</th>
						<th colspan="2" class="td_img"><a href="agregar.php" class="btn btn-outline-dark cursor b_nuevo"><b>AGREGAR PRODUCTO</b></a></th>
					</tr>

				</thead>
				<tbody>
					<?php
						include("conexion.php");
						$query = "SELECT * FROM imagenes";
						$resultado = $conexion->query($query);
						while($row = $resultado->fetch_assoc()){
					?>
						<br>
						<tr>
							<td class="td_img tam"><img width="150" height="150px" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>"/></td>						
							<td class="td tam"><?php echo $row['codigo']; ?></td>
							<td class="td tam"><?php echo $row['nombre']; ?></td>
							<td class="td tam"><?php echo $row['total_p']; ?></td>
							<td class="td tam">$<?php echo $row['precio']; ?></td>	
							<th><a href="modificar.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-dark cursor b_mo"><b>Editar</b></a></th>
							<th><a href="eliminar.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-dark cursor b_el"><b onclick="funcion_javascript()">Eliminar</b></a></th>
						</tr>
						<?php 
							}
						?>
				</tbody>
				
			</table>
		</center>
	</div>

<?php  
	include('pie.php');
?>

