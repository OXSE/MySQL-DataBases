<?php
$enlace = mysqli_connect("localhost", "root", "");
if (!$enlace) {
    die('No pudo conectarse: ' . mysqli_error());
}

// Crear base de datos
$sql = "CREATE DATABASE despensa";
if ($enlace->query($sql) == TRUE) {
    echo "¡Base de datos despensa creada exitosamente!";
} else {
    echo "Error al crear base de datos: " . $enlace->error;
}
?>
