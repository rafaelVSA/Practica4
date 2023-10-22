<!-- 
    Programacion Web
    Seccion: N-1013
    Rafael V. Sanchez A.
    30.393.016

-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opciones</title>
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
            margin-top: 8%;
        }
        #botones{
            display:table;
            margin:auto;
        }
        #botones2{
            display:table;
            margin:auto;
        }
        
    </style>
</head>
<body>

    <h2 class="letras titulo">Menú de Opciones</h2><br>
    <div id="botones">     
            
        <a href="registroCliente.php"><button class="btn btn-light">Registrar Cliente</button></a><br><br><br>

        <a href="modificarCliente.php"><button class="btn btn-light">Modificar Cliente</button></a><br><br><br>

        <a href="registroCompra.php"><button class="btn btn-light">Registrar Compra</button></a><br><br><br>

        <a href="compras.php"><button class="btn btn-light">Mostrar Compras</button></a><br><br>

        <div id="botones2">
            <a href="index.php"><button class="btn btn-info">SALIR</button></a><br><br>
        </div>
    </div>

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
