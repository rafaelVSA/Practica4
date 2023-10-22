<!-- 
    Programacion Web
    Seccion: N-1013
    Rafael V. Sanchez A.
    30.393.016

-->

<?php
    include_once('assets/conexion.php');
    $registro= "SELECT * FROM compra_botellones";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Compras</title>
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
            margin-top: 5%;
        }
        .btn-info{
            margin-left:4%;
        }
        .table{
            width: 80%;
            display: table;
            margin:auto;
        }
    </style>
</head>
<body>

    <h2 class="letras titulo">Registro de Compras</h2><br>
    <a href="opciones.php"><button class="btn btn-info">Volver</button></a>

    <a href="generarReporte.php"><button class="btn btn-light">Imprimir Reporte / PDF</button></a><br><br>

    <div class="table-responsive">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio por Botellón</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Ubicación</th>
                    <th scope="col">Total Compra</th>
                </tr>
            </thead>
            <tbody>
                <?php $resultado = mysqli_query($connect, $registro);
                 while($row=mysqli_fetch_assoc($resultado))  { ?>
                <tr>
                    <td><?php echo $row["cantidad"]; ?></td>
                    <td><?php echo $row["precio_unitario"]; ?></td>
                    <td><?php echo $row["fecha"]; ?></td>
                    <td><?php echo $row["hora"]; ?></td>
                    <td><?php echo $row["ubicacion"]; ?></td>
                    <td><?php echo $row["total_compra"]; ?></td>
                </tr>  <?php } mysqli_free_result($resultado) ?>
            </tbody>
        </table>
    </div>
    <br><br>

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