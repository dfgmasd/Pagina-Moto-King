<!DOCTYPE html>
<html>
<head>
    <title>Contacto - Moto King</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../JS/CARRITO.js" defer></script> <!--Incluir carrito.js -->
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
    <!-- panel de contacto -->
    <section>
        <h2>Contacto</h2>
        <p>Si tienes alguna consulta, puedes ponerte en contacto con nosotros a traves de nuestro correo: <strong>info-motoking@hotmail.com</strong></p>
        <p>O dejarnos un mensaje, con gusto te atenderemos en breves</p>
        <br>
        <!-- tabla de contacto -->
        <form action="https://formsubmit.co/frantzzegarra@gmail.com" method="POST">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>

                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" required></textarea>
                <!-- boton enviar mensaje  -->
                <button type="submit">Enviar</button>

                <div id="mensajeConfirmacion" style="display:none; color:green; font-weight:bold; margin-top:10px;">
                ✅ ¡Mensaje enviado con éxito!
                </div>
                
                <input type="hidden" name="_captcha" value="false">
                <input type="hidden" name="_formsubmit.co" value="false">
        </form>
            <script>
        document.getElementById('formularioContacto').addEventListener('submit', function(event) {
            event.preventDefault(); // Evita el envío automático

        // Enviar formulario con fetch
        const form = this;
        const data = new FormData(form);

        fetch(form.action, {
            method: "POST",
            body: data,
            headers: {
                'Accept': 'application/json'
            }
        }).then(response => {
            if (response.ok) {
                // Mostrar mensaje
                document.getElementById('mensajeConfirmacion').style.display = 'block';
                // Limpiar formulario
                form.reset();
                // Ocultar mensaje después de 4 segundos
                setTimeout(() => {
                    document.getElementById('mensajeConfirmacion').style.display = 'none';
                }, 4000);
            } else {
                alert("Hubo un error al enviar el formulario. Intenta nuevamente.");
            }
        });
    });
</script>
        <br>
        <p>Visitano en nuestra tienda física en:</p>
        <br>
        <!-- direccion del google maps -->
        <address>
            <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d21751.27070567659!2d-75.73512156982606!3d-14.084540079388328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2spe!4v1725684156785!5m2!1ses-419!2spe"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </address>
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
