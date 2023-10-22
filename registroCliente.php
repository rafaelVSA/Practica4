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
    <title>Clientes</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
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

    <h2 class="letras titulo">Registro de Clientes</h2><br>
    <div id="formulario">
        <form id="formulario" method="POST"> 
            <div class="labels">

                <label for="nombre" class="letras">Nombre</label> <br>
            </div>
            <input type="text" name="nombre" id="nombre" onkeypress="return soloLetras(event)" required placeholder="Escribe el nombre"> <br><br>
            <div class="labels">

                <label for="apellido" class="letras">Apellido</label><br>
            </div>
            <input type="text" name="apellido" id="apellido" onkeypress="return soloLetras(event)" required placeholder="Escribe el apellido"><br><br>
            <script>
                        function soloLetras(e){
                            key = e.keyCode || e.which
                            tecla = String.fromCharCode(key).toString()
                            letras = "qwertyuiopasdfghjklñzxcvbnmQWERTYUIOPASDFGHJKLÑZXCVBNMáéíóúÁÉÍÚÓüÜ"
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

                <label for="cedula" class="letras">Cédula</label><br>
            </div>
            <input type="text" name="cedula" id="cedula" onkeypress="return soloNumeros(event)" required placeholder="Escribe la cédula"><br><br>
            <div class="labels">

                <label for="telefono" class="letras">Teléfono</label><br>
            </div>
            <input type="text" name="telefono" id="telefono" min="10" max="11" onkeypress="return soloNumeros(event)" required placeholder="Escribe el teléfono"><br>
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

                <label for="sexo" class="letras">Sexo</label><br>
            </div>

            <div class="labels">
                <select name="sexo" id="sexo">
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select><br><br>
            </div>
           
            <div class="labels">

                <label for="direccion" class="letras">Dirección</label><br>
            </div>
            <textarea name="direccion" id="direccion" cols="23" rows="4" required placeholder="Escribe la dirección del cliente"></textarea><br>
            <div class="labels">

                <input type="submit" value="Enviar" id="enviar-btn" name="Enviar" class="btn btn-light"><br><br>
            </div>
            
        </form> 
        <div class="labels">

            <a href="opciones.php"><button class="btn btn-info">Volver</button></a><br>
        </div>
    </div>
    <br>
    <div id="resultado"></div>

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
        document.getElementById('enviar-btn').addEventListener('click', function(){
            var nombre=document.getElementById('nombre').value;
            var apellido=document.getElementById('apellido').value;
            var cedula=document.getElementById('cedula').value;
            var telefono=document.getElementById('telefono').value;
            var sexo=document.getElementById('sexo').value;
            var direccion=document.getElementById('direccion').value;

            var datos = {
                "nombre": nombre,
                "apellido": apellido,
                "cedula":cedula,
                "telefono":telefono,
                "sexo":sexo,
                "direccion":direccion
                };

            $.ajax({
                url: "datosCliente.php",
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