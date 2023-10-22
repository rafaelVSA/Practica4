<!-- 
    Programacion Web
    Seccion: N-1013
    Rafael V. Sanchez A.
    30.393.016

-->

<?php

    define("host",'localhost');
    define("user",'root'); 
    define("pass",'');       
    define("db",'practica4'); 

    $connect= mysqli_connect(host,user,pass,db);
    if(!$connect){
        echo "error: ".mysqli_error();
    }
    else{
        echo "conectado";
    }
?>