<?php 
	include('config.php');
	include('carrito.php');
	include('cabecera.php');
?>

	<br>
	<div class="caja_car">
		<center>
			<h3>Lista de carrito</h3>
		</center>
	</div>
	<?php if (!empty($_SESSION['CARRITO'])) { ?>
		<table class="table table-dark table-bordered">
			<tbody>
				<tr>
					<th width="40%">Nombre</th>
					<th width="15%" class="text-center">Cantidad</th>
					<th width="20%" class="text-center">Precio</th>
					<th width="20%" class="text-center">Total</th>
					<th width="5%">--</th>
				</tr>
				<?php $total = 0; ?> 
				<?php foreach ($_SESSION['CARRITO'] as $indice=>$row) { ?>
						<tr>
							<td width="40%"><?php echo $row['NOMBRE']?></td>
							<td width="15%" class="text-center"><?php echo $row['CANTIDAD']?></td>
							<td width="20%" class="text-center">$<?php echo $row['PRECIO']?></td>
							<td width="20%" class="text-center">$<?php echo number_format($row['PRECIO']*$row['CANTIDAD'],2);?></td>
							<td width="5%"> 
								<form action="" method="post">
									<input type="hidden"
									 name="id"
									 id="id" 
									 value="<?php echo openssl_encrypt($row['ID'],COD,KEY);?>">
									<button 
									class="btn btn-danger" 
									type="submit"
									name="btnAccion"
									value="Eliminar">
										Eliminar
									</button>
								</form>
							</td>
							<td width="5%"> 
								<form action="" method="post">
									
								</form>
							</td>
						</tr>

						<!--https://www.youtube.com/watch?v=Q8y-Hh-QEC8 !-->
						
						<?php $total = $total+($row['PRECIO']*$row['CANTIDAD']); ?>
				<?php } ?>
						<tr>
							<td colspan="3" align="right"><h3>Total</h3></td>
							<td align="right"><h3>$<?php echo number_format($total,2);?></h3></td>
							<td></td>
						</tr>

						<tr>
							<td colspan="5">
								<form action="" method="post">
									<input type="hidden"
									 name="id"
									 id="id" 
									 value="<?php echo openssl_encrypt($row['ID'],COD,KEY);?>">
									<button class="btn btn-primary btn-lg btn-block" type="submit" n
									ame="btnAccion" 
									value="proceder">
									Pagar
									</button>
								</form>
							</td>
						</tr>
				
			</tbody>
		</table>
	<?php }else{ ?> 
		<div class="alert alert-success">
			No hay productos en el carrito
		</div>
	<?php } ?>

<?php include('pie.php'); ?>