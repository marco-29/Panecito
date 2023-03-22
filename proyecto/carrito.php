<?php  
session_start();
	$mensaje = "";
	if (isset($_POST['btnAccion'])) {
		switch ($_POST['btnAccion']) {
			case 'Agregar':
				if (is_numeric(openssl_decrypt($_POST['id'], COD, KEY))) {
						$ID = openssl_decrypt($_POST['id'], COD, KEY);
						$mensaje.= "OK ID ".$ID."<br/>";
				}else{
						$mensaje.="UPSS id incorrecto"."<br/>"; break;
				}

				if (is_string(openssl_decrypt($_POST['codigo'], COD, KEY))) {
						$CODIGO = openssl_decrypt($_POST['codigo'], COD, KEY);
						$mensaje.= "OK CODIGO ".$CODIGO."<br/>";
				}else{
						$mensaje.="UPSS codigo incorrecto"."<br/>"; break;
				}

				if (is_string(openssl_decrypt($_POST['nombre'], COD, KEY))) {
						$NOMBRE = openssl_decrypt($_POST['nombre'], COD, KEY);
						$mensaje.= "OK NOMBRE ".$NOMBRE."<br/>";
					}else{
						$mensaje.="UPSS nombre incorrecto"."<br/>"; break;
					}

					if (is_numeric(openssl_decrypt($_POST['cantidad'], COD, KEY))) {
						$CANTIDAD = openssl_decrypt($_POST['cantidad'], COD, KEY);
						$mensaje.= "OK CANTIDAD ".$CANTIDAD."<br/>";
					}else{
						$mensaje.="UPSS cantidad incorrecto"."<br/>"; break;
					}


					if (is_numeric(openssl_decrypt($_POST['precio'], COD, KEY))) {
						$PRECIO = openssl_decrypt($_POST['precio'], COD, KEY);
						$mensaje.= "OK PRECIO ".$PRECIO."<br/>";
					}else{
						$mensaje.="UPSS precio incorrecto"."<br/>"; break;
					}

				if (!isset($_SESSION['CARRITO'])) {
					$row = array(
						'ID' => $ID,
						'CODIGO' => $CODIGO,
						'NOMBRE' => $NOMBRE,
						'CANTIDAD' => $CANTIDAD, 
						'PRECIO' => $PRECIO
					);

					$_SESSION['CARRITO'][0] = $row;
				}else{
					$NumeroProductos=count($_SESSION['CARRITO']);

					$row = array(
						'ID' => $ID,
						'CODIGO' => $CODIGO,
						'NOMBRE' => $NOMBRE,
						'CANTIDAD' => $CANTIDAD,
						'PRECIO' => $PRECIO
					);  

					$_SESSION['CARRITO'][$NumeroProductos] = $row;
				}

				$mensaje = print_r($_SESSION, true);
			break;

			case "Eliminar":
				if (is_numeric(openssl_decrypt($_POST['id'], COD, KEY))) {
						$ID = openssl_decrypt($_POST['id'], COD, KEY);
					foreach ($_SESSION['CARRITO'] as $indice=>$row) {
						if ($row['ID'] == $ID) {
							unset($_SESSION['CARRITO'][$indice]);
							$_SESSION['CARRITO']=array_values($_SESSION["CARRITO"]);
							echo "<script>alert('Elemento borrado');</scrip>";
							header("Location: mostrarCarrito.php");
							echo "<script>alert('Elemento borrado');</scrip>";
							break;
						}
					}
				}else{
						$mensaje.="UPSS ID incorrecto".$ID."<br/>";
				}
			break;

			case "proceder":
				if (is_numeric(openssl_decrypt($_POST['id'], COD, KEY))) {
						$ID = openssl_decrypt($_POST['id'], COD, KEY);
					foreach ($_SESSION['CARRITO'] as $indice=>$row) {
						
							unset($_SESSION['CARRITO'][$indice]);
							$_SESSION['CARRITO']=array_values($_SESSION["CARRITO"]);
							echo "<script>alert('Elemento borrado');</scrip>";
							header("Location: mostrarCarrito.php");
							echo "<script>alert('Elemento borrado');</scrip>";
							break;
						
					}
				}else{
						$mensaje.="UPSS ID incorrecto".$ID."<br/>";
				}
			break;
		}
	}
?>