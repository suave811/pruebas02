<?php

include('conexion.php');

if ($mysqli->connect_errno) {
    printf("Conexión fallida: %s\n", $mysqli->connect_error);
    exit();
}

$consulta = "SELECT * FROM apoderados";


if ($resultado = $mysqli->query($consulta)) {

    /* obtener un array asociativo */
    while ($fila = $resultado->fetch_assoc()) {
       
       if($fila["Nombre"] == $_POST['usuario']){
        
       
        header("location:inicio.php");
       }


    }


    /* liberar el conjunto de resultados */
    $resultado->free();
}

/* cerrar la conexión */
$mysqli->close();