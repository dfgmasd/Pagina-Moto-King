<?php
include('c.php');

$usuario = $_POST['nombre']; 
$correo = $_POST['correo']; 
$telefono= $_POST['telefono']; 
$pass = $_POST['contra'];
$verficacion = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");

$r = mysqli_num_rows($verficacion);

if ($r > 0) { 
    echo '
        <script>
        alert("El nombre de usuario ya fue registrado"); 
        location.href = "../pages/productos/loginking.html";
        </script>
    ';
    exit;
}

$insertar = mysqli_query($conexion, "INSERT INTO usuarios (usuario, contraseña, correo, telefono, rol) 
VALUES ('$usuario', '$pass', '$correo', '$telefono', 'cliente' )" );


if ($insertar) {
    echo '
        <script>
        alert("Registro exitoso"); 
        location.href = "../pages/productos/loginking.html";
        </script>
    ';
}

mysqli_close($conexion);

?>