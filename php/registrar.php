<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Moto King</title>
    <link rel="stylesheet" href="../../css/style.css">
    <script src="../../JS/CARRITO.js" defer></script> <!--Incluir carrito.js -->
    <script src="../../JS/LOGIN.js"></script><!--Incluir login.js -->
</head>
<body>

<form action="../PHP/registro.php" method="POST" class="formulario-registro" id="registro_for">
    <h2 class="info_form">Registro de Usuario</h2>
    <table class="tabla-registro">
        <tr>
            <td><label for="nombre">👤 Nombre de Usuario:</label></td>
            <td><input type="text" id="nombre" name="nombre" required></td>
        </tr>
        <tr>
            <td><label for="correo">📧 Correo Electrónico:</label></td>
            <td><input type="email" id="correo" name="correo" required></td>
        </tr>
        <tr>
            <td><label for="telefono">📞 Teléfono:</label></td>
            <td><input type="tel" id="telefono" name="telefono" required></td>
        </tr>
        <tr>
            <td><label for="contra">🔒 Contraseña:</label></td>
            <td><input type="password" id="contra" name="contra" required></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
                <input type="submit" value="Registrarse" class="btn-registro">
            </td>
        </tr>
    </table>
</form>


<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script type="text/javascript" src="../JS/funciones.js"></script>

</body>
</html>
