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
        #formulario{
            display:table;
            margin:auto;
        }
    </style>
    <title>Editar</title>
</head>
<body>

    <h2 class="letras titulo">Modificar Cliente</h2><br><br>

    <?php
        $id=$_GET['id'];
        $nombre=$_GET['nombre'];
        $apellido=$_GET['apellido'];
        $cedula=$_GET['cedula'];
        $telefono=$_GET['telefono'];
        $sexo=$_GET['sexo'];
        $direccion=$_GET['direccion'];
    ?>
    <div id="formulario">
        <form action="generarCambios.php" method="POST">
            <table border="1">
                <tr>
                    <td class="letras">ID:</td>
                    <td><input type="text" name="id" value="<?=$id?>" disabled></td>

                </tr>
                <tr>
                    <td class="letras">Nombre:</td>
                    <td><input type="text" name="nombre" value="<?=$nombre?>"></td>
                </tr>
                <tr>
                    <td class="letras">Apellido:</td>
                    <td><input type="text" name="apellido" value="<?=$apellido?>"></td>
                </tr>
                <tr>
                    <td class="letras">Cedula:</td>
                    <td><input type="text" name="cedula" value="<?=$cedula?>"></td>
                </tr>
                <tr>
                    <td class="letras">Telefono:</td>
                    <td><input type="text" name="telefono" value="<?=$telefono?>"></td>
                </tr>
                <tr>
                    <td class="letras">Sexo:</td>
                    <td><input type="text" name="sexo" value="<?=$sexo?>"></td>
                </tr>
                <tr>
                    <td class="letras">Direccion:</td>
                    <td><input type="text" name="direccion" value="<?=$direccion?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Actualizar" class="btn btn-light"></td>
                    <td><a href="modificarCliente.php"> <button class="btn btn-info">Volver</button></a></td>
                </tr>
            </table>
        </form>

    </div> <br><br>

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