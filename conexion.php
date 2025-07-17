<?php
$host = "localhost";
$user = "root";        // Usuario por defecto en XAMPP
$pass = "";            // Contraseña por defecto vacía
$db = "mi_tienda";     // Asegúrate que esta base exista en phpMyAdmin

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>