<?php
    include_once('assets/conexion.php');
    
    $id= $_POST['id'];
    $nombre= $_POST['nombre']; 
    $apellido= $_POST['apellido'];
    $cedula= $_POST['cedula'];
    $telefono= $_POST['telefono'];
    $sexo= $_POST['sexo'];
    $direccion= $_POST['direccion'];

    $clientes= "UPDATE clientes SET nombre='$nombre', apellido='$apellido', cedula='$cedula', telefono='$telefono', sexo='$sexo', direccion='$direccion' WHERE id='$id'";

    $resultado=mysqli_query($connect, $clientes);

    if(!$resultado){
        echo '<script language="javascript">alert("No se actualizó");</script>';
    }else{
        header("Location: modificarCliente.php");
    }

    echo $id;
?>