<?php
$servidor = "localhost";
$usuario = "username";
$contraseña = "";

// Crear conexión 
$conectar = new mysqli($servidor, $usuario, $contraseña);

// Revisar conexión
if ($conectar->connect_error) {
    die("La conexión fallo: " . $conn->connect_error);
} 
echo "Conectado exitosamente";
?>