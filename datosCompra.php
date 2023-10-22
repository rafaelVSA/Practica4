<?php
    include_once('assets/conexion.php');

    $clientes= $_POST['clientes'];
    $cantidad= $_POST['cantidad'];
    $precio_unitario= $_POST['precio_unitario'];
    $fecha= $_POST['fecha'];
    $hora= $_POST['hora'];
    $ubicacion= $_POST['ubicacion'];
    $total_compra= $precio_unitario * $cantidad;

    $query=  "INSERT INTO compra_botellones(cantidad,precio_unitario,fecha,hora,ubicacion,total_compra,clientes_ci) VALUES ('$cantidad','$precio_unitario','$fecha','$hora','$ubicacion','$total_compra', '$clientes')";

    $rs=mysqli_query($connect,$query) or die(mysqli_error($connect)); //recordset


?>