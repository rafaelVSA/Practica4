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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Compra</title>
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
            margin-top: 3%;
        }
        #formulario{
            display:table;
            margin:auto;
        }
        .labels{
            display:table;
            margin:auto;
        }
    </style>
</head>
<body>

    <h2 class="letras titulo">Registro de Compra de Botellones</h2><br>
    <div id="formulario">
        <form method=""> 

            <div class="labels">
                <label for="clientes" class="letras">Clientes Registrados</label><br>
            </div>
            <div class="labels">
                <select name="clientes" id="clientes">
                    <?php $resultado = mysqli_query($connect, $clientes);
                    
                    while($row=mysqli_fetch_assoc($resultado))  { ?>
                    <option value="<?php echo $row["cedula"]; ?>"> <?php echo $row["nombre"] . " / " . $row["cedula"]; ?> </option> 
                    <?php } mysqli_free_result($resultado) ?>
                </select><br><br>
            </div>

            <div class="labels">
                <label for="cantidad" class="letras">Cantidad</label> <br>
            </div>
            <input type="number" name="cantidad" id="cantidad" min="1" onkeypress="return soloNumeros(event)" placeholder="Cantidad de botellones" required> <br><br>

            <script>
                        function soloNumeros(e){
                            key = e.keyCode || e.which
                            tecla = String.fromCharCode(key).toString()
                            letras = "1234567890"
                            especiales = [8,13]
                            tecla_especial=false
                            for(var i in especiales){
                                if(key == especiales[i]){
                                    tecla_especial=true
                                    break
                                }
                            }

                            if(letras.indexOf(tecla) == -1 && !tecla_especial){
                                return false
                            }
                        }
            </script>

            <div class="labels">

                <label for="precio_unitario" class="letras">Precio Unitario</label><br> 
            </div>
            <input type="number" step="0.01" id="precio_unitario" name="precio_unitario" placeholder="Precio por c/u" min="0" required><br><br>
            <div class="labels">

                <label for="fecha" class="letras">Fecha</label><br>
            </div>
            <div class="labels">

                <input type="date" name="fecha" id="fecha" required><br><br>
            </div>
            <div class="labels">

                <label for="hora" class="letras">Hora</label><br>
            </div>
            <div class="labels">

                <input type="time" name="hora" id="hora" required><br><br>
            </div>
            <div class="labels">

                <label for="ubicacion" class="letras">Ubicación</label><br>
            </div>
            <div class="labels">

                <select name="ubicacion" id="ubicacion">
                    <option value="Barquisimeto">Barquisimeto</option>
                    <option value="Caracas">Caracas</option>
                    <option value="Lecheria">Lecheria</option>
                    <option value="Maracaibo/norte">Maracaibo Norte</option>
                    <option value="Maracaibo/este">Maracaibo Este</option>
                    <option value="Maracay">Maracay</option>
                </select><br><br>
            </div>
            <div class="labels">
                <input type="submit" value="Enviar" id="Enviar" name="btnEnviar" class="btn btn-light"><br>
            </div>
        </form>  
        <div class="labels">
            <a href="opciones.php"><button class="btn btn-info">Volver</button></a><br><br>
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

<script>
        document.getElementById('Enviar').addEventListener('click', function(){
            var clientes=document.getElementById('clientes').value;
            var cantidad=document.getElementById('cantidad').value;
            var precio_unitario=document.getElementById('precio_unitario').value;
            var fecha=document.getElementById('fecha').value;
            var hora=document.getElementById('hora').value;
            var ubicacion=document.getElementById('ubicacion').value;

            var datos = {
                "clientes":clientes,
                "cantidad": cantidad,
                "precio_unitario": precio_unitario,
                "fecha": fecha,
                "hora":hora,
                "ubicacion":ubicacion
                };

            $.ajax({
                url: "datosCompra.php",
                type: 'POST',
                data: datos,
                beforeSend: function() {
                    $("#resultado").html("Procesando, espere por favor...");
                },
                success: function(response) {
                    $("#resultado").html("Resultado: " + response);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                    $("#resultado").html("Error...");
                }
            });

        })
   
    </script>

</html>