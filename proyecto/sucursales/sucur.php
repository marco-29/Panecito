<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<meta name="vieport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../css/mystyles.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
	<script src="../js/codigo.js"></script>
</head>
<body class="cuerpo">
	<nav>
		<div class="cajas lista">
			<a href="../det.php"><img src="../images/let.png" class="img_logo"></a>
			
				<ul>
					<li><a href="../stock.php" class="btn btn-outline-dark cursor"><b>Productos en Stock</b></a></li>
					<li><a href="../cajero.php" class="btn btn-outline-dark cursor"><b>Cajero</b></a></li>
					<li><a href="../inventario.php" class="btn btn-outline-dark cursor"><b>Pedidos</b></a></li>
					<li><a href="sucur.php" class="btn btn-outline-dark cursor botones"><b>Sucursales</b></a></li>
				</ul>
			

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
	</nav>
	<br>
	<center>
		<div class="caj_suc">
			<h1 class="sep_ti">SUCURSALES</h1>
		</div>
	</center>

	<br>
	<div>
		<center>
			<?php
						include("../conexion.php");
						$query = "SELECT * FROM sucursales";
						$resultado = $conexion->query($query);
						while($row = $resultado->fetch_assoc()){
			?>
			<div class="sucursales">
				<div>
					<h1>Sucursal <?php echo $row['direccion']; ?></h1>
					<br>
					<p><i class="bi bi-telephone"></i>  <?php echo $row['telefono']; ?></p>
					<p><i class="bi bi-geo-alt"></i>  <?php echo $row['direccion']; ?></p>
					<p><i class="bi bi-envelope-fill"></i>  <?php echo $row['correo']; ?></p>
					<p><i class="bi bi-calendar"></i>  <?php echo $row['dias']; ?></p>
					<p><i class="bi bi-clock"></i>  <?php echo $row['horario']; ?></p>	
				</div>
			</div>
			<br>
			<?php 
			}
			?>	
			
		</center>
	</div>


		<!--<div class="caja3">
			<h1 class="ti sep ">BIENVENIDO</h1>
			<div class="hr"></div>
			<p class="text_info sep">
				<i class="bi bi-telephone"></i> 102018288 <br>
				<i class="bi bi-geo-alt"></i> Av. Las animas <br>
				<i class="bi bi-envelope-fill"></i> panecito@gmail.com <br>
				<i class="bi bi-calendar"></i> Lunes a Domingo<br>
				<i class="bi bi-clock"></i> Horario 8:00 am - 9:00 pm
			</p>
		</div>-->

	<script type="text/javascript" src="css/bootstrap/js/bootstrap.bundle.js"></script>
	<script src="js/popup.js"></script>
</body>
</html>