<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<meta name="vieport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="css/mystyles.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
	<script src="js/codigo.js"></script>
</head>
<body class="cuerpo">
	<nav>
		<div class="cajas lista">
			<a href="det.php"><img src="images/let.png" class="img_logo"></a>
			
				<ul>
					<li><a href="stock.php" class="btn btn-outline-dark cursor"><b>Productos en Stock</b></a></li>
					<li><a href="cajero.php" class="btn btn-outline-dark cursor"><b>Cajero</b></a></li>
					<li><a href="inventario.php" class="btn btn-outline-dark cursor"><b>Pedidos</b></a></li>
					<li><a href="sucursales/sucur.php" class="btn btn-outline-dark cursor"><b>Sucursales</b></a></li>
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
	<br>
	<br>
	<center>
		<div id="MiCarrusel" class="carousel slide caja_carru" data-bs-ride="carousel">
			<div class="carousel-indicators"> 
				<button type="button" data-bs-target="#MiCarrusel" data-bs-slide-to="0" class="active" arial-label="Slide 1"></button>
				<button type="button" data-bs-target="#MiCarrusel" data-bs-slide-to="1" class="active" arial-label="Slide 2"></button>
				<button type="button" data-bs-target="#MiCarrusel" data-bs-slide-to="2" class="active" arial-label="Slide 3"></button>
			</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-50 h-100" src="images/cro1.jpg">
						<div class="container">
							<div class="carousel-caption">
								<center>
									<div class="caja_carru_2">
										<h1>Proximamente</h1>
										<p>No soportaras el poder de su sabor.</p>
									</div>
								</center>
								<p><button class="btn btn-sm btn-dark" id="abrir">+ Informacion</button></p>
							</div>
						</div>						
					</div>
					<div class="carousel-item">
						<img class="d-block w-50 h-75" src="images/pan-re.jpg">
						<div class="container">
							<div class="carousel-caption">
								<center>
									<div class="caja_carru_2">
										<h1>Rellenos de queso</h1>
									</div>
								</center>
								<p><button class="btn btn-sm btn-dark" id="abrir2">+ Informacion</button></p>
							</div>
						</div>						
					</div>
					<div class="carousel-item">
						<img class="d-block w-50 h-75" src="images/con-oreo.jpg">
						<div class="container">
							<div class="carousel-caption">
								<center>
									<div class="caja_carru_2">
										<h1>Conchas oreo</h1>
										<p>Las mejores conchas las encontraras aqui.</p>
									</div>
								</center>
								<p><button class="btn btn-sm btn-dark" id="abrir3">+ Informacion</button></p>
							</div>
						</div>						
					</div>	
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#MiCarrusel" data-bs-slide="prev">
					<span class="carousel-control-prev-icon"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#MiCarrusel" data-bs-slide="next">
					<span class="carousel-control-next-icon"></span>
					<span class="visually-hidden">Next</span>
				</button>

			<div class="overlay" id="overlay">
				<div class="popup" id="popup">
					<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="bi bi-x-circle"></i></a>
					<h1>Croissant</h1>
					<p>Este pan sera relleno de mermelada de fresa, realizado con masa de hojaldre, su forma sera de cuernito.</p>
					<p>Saldra a la venta el 29/mayo/2022</p>
					<p>Este producto tendra un costo de $6.00</p>
					<img src="images/cro1.jpg" width="250px">
				</div>
			</div>

			<div class="overlay" id="overlay2">
				<div class="popup" id="popup2">
					<a href="#" id="btn-cerrar-popup2" class="btn-cerrar-popup"><i class="bi bi-x-circle"></i></a>
					<h1>Rellenos de queso</h1>
					<p>Este pan sera relleno de queso crema, realizado con masa de pan, espolvoreado con ajonjli dorado y su forma sera de bolita.</p>
					<p>Saldra a la venta el 29/mayo/2022</p>
					<p>Este producto tendra un costo de $7.00</p>
					<img src="images/pan-re.jpg" width="250px">
				</div>
			</div>

			<div class="overlay" id="overlay3">
				<div class="popup" id="popup3">
					<a href="#" id="btn-cerrar-popup3" class="btn-cerrar-popup"><i class="bi bi-x-circle"></i></a>
					<h1>Concha de oreo</h1>
					<p>Este pan tendra un relleno de crema sabor oreo, su envidiosa tendra la mezcla de galletas oreo molidas con manteca vegetal, harina y azucar glass, realizado con masa de pan y su forma sera circular.</p>
					<p>Saldra a la venta el 29/mayo/2022</p>
					<p>Este producto tendra un costo de $6.00</p>
					<img src="images/con-oreo.jpg" width="250px">
				</div>
			</div>
		</div>

		<div class="caja3">
			<h1 class="ti sep ">REGISTRO DE SUCURSAL</h1>
			<div class="hr"></div>
			<form action="sucursales/regis_sucur.php" method="post">
				<?php
					if(isset($_REQUEST['conf'])) {
						print("<div class='alert alert-success'>");
						$conf = $_REQUEST['conf'];
						if($conf==1) {
							print("Formulario Registrado.");
						}
						print("</div>");
					}
				?>
				<div class="mb-3 mt-3 form">
					<label class="">Telefono</label>
					<input class="form-control form2" type="text" required name="telefono" placeholder="Identificador">
				</div>
				<div class="mb-3 mt-3 form">
					<label class="form-label">Direccion</label>
					<input class="form-control form2" type="text" required name="direccion" placeholder="Nombre completo">
				</div>
				<div class="mb-3 mt-3 form">
					<label class="form-label">Correo</label>
					<input class="form-control form2" type="text" required name="correo" placeholder="Usuario">
				</div>
				<div class="mb-3 form">
					<label class="form-label">Dias de labor</label>
					<input class="form-control form2" type="text" required name="dias" placeholder="Password">
				</div>
				<div class="mb-3 form">
					<label class="form-label">Horario</label>
					<input class="form-control form2" type="text" required name="horario" placeholder="Password">
				</div>
				<button type="submit" class="btn btn-success btn_regis sep sep_ab" onclick="funcion_javascript()">Registrar</button>
			</form>
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
	</center>

	<script type="text/javascript" src="css/bootstrap/js/bootstrap.bundle.js"></script>
	<script src="js/popup.js"></script>
</body>
</html>