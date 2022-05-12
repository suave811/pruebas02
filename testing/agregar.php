<?php

include('conexion.php');


if ($mysqli->connect_errno) {
    printf("Conexión fallida: %s\n", $mysqli->connect_error);
    exit();
}


$nombre = $_POST['data[email]'];
console.log($nombre);

$insertar = "INSERT INTO pruevadb  VALUES ($nombre)";

$query = mysqli_query($mysqli, $insertar );


if($query){

    echo "<script> alert('correcto') </script>;";
    header("location:login.php");

}

