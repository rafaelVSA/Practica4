<!-- 
    Programacion Web
    Seccion: N-1013
    Rafael V. Sanchez A.
    30.393.016

-->

<?php   
    if (isset($_POST['btnEntrar']) && $_POST['btnEntrar'] == 'INGRESAR' && isset($_POST['usuario']) && isset($_POST['contrasena'])) {

        if(isset($_POST['usuario']) && isset($_POST['contrasena'])){

            if(!empty($_POST['usuario']) && !empty($_POST['contrasena'])){
                $usuarioAdmin= "admin";
                $contrasenaAdmin="admin";
                $usuario = $_POST['usuario'];
                $contrasena = $_POST['contrasena'];
                if($usuarioAdmin==$usuario && $contrasenaAdmin==$contrasena){
                    header('Location: opciones.php');
                    exit();
                }else{
                    echo '<script language="javascript">alert("incorrecto");</script>';
                }
            }else{
                echo '<script language="javascript">alert("datos vacios");</script>';
            }
        }else{
            echo '<script language="javascript">alert("no se enviaron los datos");</script>';
        }
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>inicio</title>
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
        .labels{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 20px;
            margin-top: 2%;
            margin-bottom: 1%;
        }
        #formulario{
            display:table;
            margin:auto;
        }
        .labelTXT{
            display:table;
            margin:auto;
        }
    </style>
</head>
<body>

   
    <h2 class="letras titulo">Inicio de Sesión</h2><br>
    <div id="formulario">
        <form method="POST">
            <div class="labelTXT">
                <label for="usuario" class="letras labels"> Usuario</label> <br><br>
            </div>
            <input type="text" name="usuario" placeholder="Escribe el usuario"> <br><br>
            <div class="labelTXT">
                <label for="contrasena" class="letras labels">Contraseña</label><br><br>
            </div>
            <input type="text" name="contrasena" placeholder="Escribe la contraseña"><br><br>
            <div class="labelTXT">
                <input type="submit" value="INGRESAR" name="btnEntrar" class="btn btn-light">
            </div><br><br><br>
        </form>
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