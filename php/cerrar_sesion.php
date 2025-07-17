<?php

session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gracias por su visita</title>
    <script>
        alert("Gracias por su visita");
        window.location.href = "../index.html";
    </script>
</head>
<body>
</body>
</html>