<?php
include("c.php");

$correo = $_POST['correo'];
$contra = $_POST['pass'];

// IMPORTANTE: Evita inyecciones SQL (revisaremos esto después)
$resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' AND contraseña = '$contra'");

if ($fila = mysqli_fetch_assoc($resultado)) {
    session_start();
    $_SESSION['cliente'] = $fila['usuario']; // Guardamos el nombre del cliente
    header("location: ../php/usuario.php");
} else {
    echo '
    <script> 
        alert("El correo o la contraseña son inválidos");
        location.href = "../pages/productos/loginking.html";
    </script>
    ';
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>



