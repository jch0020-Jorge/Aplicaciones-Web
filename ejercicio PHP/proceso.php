<?php
    $nombre= $_GET['nombre'];
    $apellidos= $_GET['apellidos'];
    $edad= $_GET['edad'];

function comprobarEdad($nombre, $apellidos, $edad) {
        if ($edad >= 18) {
            echo "Hola $nombre $apellidos, tienes $edad años y eres mayor de edad";
        } else {
            echo "Hola $nombre $apellidos, tienes $edad años y eres menor de edad";  
        }
}



comprobarEdad($nombre, $apellidos, $edad);
?>