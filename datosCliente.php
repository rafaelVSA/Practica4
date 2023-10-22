<?php
    include_once('assets/conexion.php');

    $nombre= $_POST['nombre'];
    $apellido= $_POST['apellido'];
    $cedula= $_POST['cedula'];
    $telefono= $_POST['telefono'];
    $sexo= $_POST['sexo'];
    $direccion= $_POST['direccion'];

    $query=  "INSERT INTO clientes(nombre,apellido,cedula,telefono,sexo,direccion) VALUES ('$nombre','$apellido','$cedula','$telefono','$sexo','$direccion')";

    $rs=mysqli_query($connect,$query) or die(mysqli_error($connect)); //recordset


?>