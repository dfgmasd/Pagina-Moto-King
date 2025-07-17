<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>MOTO KING - Citas Taller</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../../css/taller.css">
    <script src="../JS/CARRITO.js" defer></script>
    <script src="../js/taller.js" defer></script>
</head>
<body>
<?php       
include("../php/sesion.php");
?>
    <header>
        <nav>
            <!-- enlaces entre apartados -->
            <ul>
                <li><a href="../php/index.php"><i><strong>INICIO</strong></i></a></li>
                <li><a href="repuestos.php"><i><strong>REPUESTOS</strong></i></a></li>
                <li><a href="motos.php"><i><strong>MOTOCICLETAS</strong></i></a></li>
                <li><a href="serviciotaller.php"><i><strong>TALLER</strong></i></a></li>
                <li><a href="comunicacion.php"><i><strong>CONTACTO</strong></i></a></li>
            </ul>
        </nav>

         <!-- Carrito de compras -->
    <div id="carrito-container">
        <button onclick="toggleCarrito()"><I>🛒 Carrito</I> (<span id="carrito-count">0</span>)</button>
        <div id="carrito-dropdown" style="display: none;">
        <ul id="carrito-items"></ul>
        <p id="total">Total: S/.0</p>
        <button onclick="vaciarCarrito()">Vaciar Carrito</button>
        <button onclick="confirmarCompra()">Confirmar Compra</button>
          
    <!-- Modelo para recibo -->
    <div id="recibo-modal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background-color:rgba(0,0,0,0.5); z-index:9999;">
      <div style="background:white; margin:5% auto; padding:20px; border-radius:10px; width:90%; max-width:700px; position:relative;">
          <span onclick="cerrarModal()" style="position:absolute; top:10px; right:20px; cursor:pointer; font-weight:bold; font-size:20px;">&times;</span>
          <div id="contenido-recibo"></div>
      </div>
  </div>
    </header>

    <section class="form-cita">
        <h2>Agendar Cita para el Taller</h2>
        <form id="formTaller"> <!-- tabla de registro para citas -->
            <label for="nombre">Nombre del cliente:</label>
            <input type="text" id="nombre" required>

            <label for="telefono">Teléfono de contacto:</label>
            <input type="tel" id="telefono" required>

            <label for="fecha">Fecha de la cita:</label>
            <input type="date" id="fecha" required>

            <label for="hora">Hora:</label>
            <input type="time" id="hora" required>

            <label for="servicio">Tipo de servicio:</label>
            <select id="servicio" required>
                <option value="">-- Seleccionar --</option>
                <option value="Mantenimiento general">Mantenimiento general</option>
                <option value="Cambio de aceite">Cambio de aceite</option>
                <option value="Revisión técnica">Revisión técnica</option>
                <option value="Reparación mecánica">Reparación mecánica</option>
            </select>
            <!-- boton guardar -->
            <br><br>
            <button type="submit">Guardar Cita</button> 
        </form>
    </section>
     <!-- seccion de citas registradas -->
    <section>
        <h2 style="text-align:center;">Citas Registradas</h2>
        <table id="tablaCitas">
            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Teléfono</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Servicio</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <!-- Las citas aparecerán aquí -->
            </tbody>
        </table>
    </section>
    <!-- boton: ENVIAR MENSAJE Y EMERGENCIA -->

<!-- diseño del footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>MOTO KING</h3>
                <p>Tu moto, tu estilo, tu camino</p>
            </div>
            <div class="footer-section">
                <h3>CONTACTO</h3>
                <p>📍 Ica, Perú</p>
                <p>📞 934-746-375</p>
                <p>✉️ info-motoking@hotmail.com</p>
            </div>
            <div class="footer-section">
                <h3>SIGUENOS</h3>
                <div class="social-links">
                    <a href="#">Facebook</a>
                    <a href="#">Instagram</a>
                    <a href="#">Twitter</a>
                </div>
            </div>
        </div>
        <br>
        <br>
        <marquee>&copy; 2025 MOTO KING. Todos los derechos reservados.</marquee>
    </footer>
</body>
</html>