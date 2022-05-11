<?php
// mysqli
$mysqli = new mysqli("", "root", "", "colegioDB");
$resultado = $mysqli->query("SELECT * FROM apoderados");
$fila = $resultado->fetch_assoc();



