<?php
    // Conectar al servidor de bases de datos
    $conexion = new mysqli("localhost", "root", "", "puntodeventa");
    $conexion->set_charset("utf8");

    /* Verificar si la conexión es exitosa
   // if (!$conexion) {
   //     die("Conexión fallida: " . mysqli_connect_error());
    }
    echo "Conexión exitosa";

    // Cerrar la conexión
   / mysqli_close($conexion);*/
?>