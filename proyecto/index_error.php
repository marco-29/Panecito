<?php
	session_start();
	session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Acceso</title>
	<link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="css/mystyles.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body class="cuerpo">
	<center>
		<div class="container">
			<div class="caja1">
				<div class="row">
					<div class="col-1">				
					</div>
					<div class="col-10">
						<div>
							<img class="img" src="images/panecitolog.png">
							<h1>LOGIN</h1>
					</div>
					<form action="validar.php" method="post">
						<div>
							<div>
							<div class="form-group">
								<div class="input-group mb-2">
									<span class="input-group-text caja_us1" id="basic-addon1"><i class="fa fa-user fa-2x"></i></span>
									<input class="form-control caja_us" type="text" name="user" placeholder="Usuario">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group mb-2">
									<span class="input-group-text caja_pass1" id="basic-addon1"><i class="fa fa-lock fa-2x"></i></span>
									<input class="form-control caja_pass" type="password" name="pass" placeholder="Password">
								</div>
							</div>		
							<div class="mb-3">
								<div class="alert alert-danger">
									<?php
										$err = $_REQUEST['err'];
										if($err == 0)
										{
											print("La contraseña es incorrecta");
											print("<hr><br>");
										}
										elseif ($err == 1) 
										{
											print("El usuario no existe");
											print("<hr><br>");
										}
									?>
									<p>** Verificar por favor **</p>
								</div>								
							</div>							
						</div>					
						<div class="form-group">
							<div class="d-grid">
								<button type="submit" class="caja_bot btn btn-primary btn-block">Entrar</button>
								<a class="btn btn-primary caja_re" href="registro.php">Registrar</a>
							</div>                       
						</div>

					</form>

				</div>
			</div>
	</center>
</body>
</html>
				</div>
				<div class="col-1">				
				</div>
			</div>
		
		</div>		
	</div>
	
	


</body>
</html>