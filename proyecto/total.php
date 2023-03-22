<?php 
    include("conexion.php");
    $query = "SELECT * FROM imagenes";
    $pre = $row['precio'];
    $piezas = $_REQUEST['piezas'];

    $total = $piezas * $pre;

    print("El total de piezas son: $piezas <br>");
    print("El total a pagar es: $total");

?>