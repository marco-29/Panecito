<?php 
	include('config.php');
	include('carrito.php');
	include('cabecera.php');
?>

		<!--<div class="alert alert-success">
			<?php echo $mensaje; ?>
			<a href="mostrarCarrito.php" class="badge bagde-success">Ver Carrito</a>
		</div> --> 
	
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
							<th></th>

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
									<form action="" method="post">
										<th class="td tam">
											<input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($row['id'],COD,KEY); ?>">
											<input type="hidden" name="codigo" id="codigo" value="<?php echo openssl_encrypt($row['codigo'],COD,KEY); ?>">
											<input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($row['nombre'],COD,KEY); ?>">
											<input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($row['precio'],COD,KEY); ?>">
											<input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY);?>">
										
											<button class="btn btn-primary"
											name="btnAccion"
											value="Agregar"
											type="submit">
											Agregar 
											</button>
										</th>
									</form>
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