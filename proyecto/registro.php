<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap-icons.css">
	<link rel="stylesheet" href="css/mystyles.css">
	<script src="js/micodigo.js"></script>
	<script>
		function funcion_javascript(){
			alert('Usuario registrado');
		}
	</script>
</head>
<body class="cuerpo">
	<center>
		<div class="caja2">
			<h1 class="ti sep ">REGISTRO</h1>
			<div class="hr"></div>
			<form action="registros.php" method="post">
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
					<label class="form-label">Nombre completo</label>
					<input class="form-control form2" type="text" required name="nom" placeholder="Nombre completo">
				</div>
				<div class="mb-3 mt-3 form">
					<label class="form-label"><i class="bi bi-person-circle"></i> Usuario</label>
					<input class="form-control form2" type="text" required name="user" placeholder="Usuario">
				</div>
				<div class="mb-3 form">
					<label class="form-label"><i class="bi bi-key-fill"></i> Password</label>
					<input class="form-control form2" type="password" required name="pass" placeholder="Password">
				</div>
				<button type="submit" class="btn btn-success btn_regis sep sep_ab" onclick="funcion_javascript()">Registrar</button>
				<a class="btn btn-primary btn_vol sep sep_ab" href="index.php">Volver</a>
			</form>
		</div>
	</center>
</body>
</html>