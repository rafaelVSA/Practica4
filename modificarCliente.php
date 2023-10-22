<!-- 
    Programacion Web
    Seccion: N-1013
    Rafael V. Sanchez A.
    30.393.016

-->

<?php
    include_once('assets/conexion.php');
    $clientes= "SELECT * FROM clientes";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Cliente</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
        body{
            background-image: url(assets/img/fondo.avif);
            background-repeat: no-repeat;
            background-size:cover;
        }
        .letras{
            color: white;
        }
        .titulo{
            text-align: center;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 40px;
            margin-top: 6%;
        }
        .table{
            width: 80%;
            display: table;
            margin:auto;
        }
        .btn-info{
            margin-left:4%;
        }
    </style>
</head>
<body>

    <h2 class="letras titulo">Modificar Clientes</h2><br>

    <a href="opciones.php"><button class="btn btn-info">Volver</button></a><br><br>


    <div>
        <table border="1" class="table table-sm">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Cédula</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Sexo</th>
                <th scope="col">Dirección</th>
                <td scope="col">Opción</th>
            </tr>
            <?php

            $resultado = mysqli_query($connect, $clientes); 
            
            while($row=mysqli_fetch_assoc($resultado))  { ?>
            <tr>
                <td><?php echo $row['nombre'] ?></td>
                <td><?php echo $row['apellido'] ?></td>
                <td><?php echo $row['cedula'] ?></td>
                <td><?php echo $row['telefono'] ?></td>
                <td><?php echo $row['sexo'] ?></td>
                <td><?php echo $row['direccion'] ?></td>
                <td>
                    <a href="editar.php?
                    id=<?php echo $row['id']?> &
                    nombre=<?php echo $row['nombre']?> &
                    apellido=<?php echo $row['apellido']?> &
                    cedula=<?php echo $row['cedula']?> &
                    telefono=<?php echo $row['telefono']?> &
                    sexo=<?php echo $row['sexo']?> &
                    direccion=<?php echo $row['direccion']?> 
                    ">Editar</a>
                </td>
            </tr>
            <?php
            }  ?>

        </table>
    </div><br><br><br>

    <footer class="bg-dark text-center text-white ">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/" role="button"
            ><i class="fab fa-facebook-f"></i
            ></a>
    
            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.twitter.com/" role="button"
            ><i class="fab fa-twitter"></i
            ></a>
    
            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/" role="button"
            ><i class="fab fa-instagram"></i
            ></a>
    
            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/" role="button"
            ><i class="fab fa-github"></i
            ></a>
        </section>
        <!-- Section: Social media -->
        </div>
        <!-- Grid container -->
    
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        &copy; 2023. Todos los derechos reservados. <br> Maracaibo - Edo. Zulia. <br> Venezuela.
        
        </div>
        <!-- Copyright -->
    </footer>


    <script src="https://kit.fontawesome.com/95a02bd20d.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>