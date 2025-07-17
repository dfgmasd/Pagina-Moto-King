<!DOCTYPE html>
<html>
<head>
    <title>MOTO KING - Venta Repuestos y motocicletas</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../JS/CARRITO.js" defer></script> <!--Incluir carrito.js -->
</head>
<?php       
include("../php/sesion.php");
?>
<body>
    <!-- barra de apartados -->
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
    <br>
    <!-- dividimos marcas de motos -->
    <h2><I><STRong>MARCAS DE MOTOS</STRong></I></h2>
    <br>
    <h3 class="subtitulo">MARCA HONDA</h3>
    <div class="container">
        <p class="original">
    <section class="destacados">
            <div class="tar-prod">
                <a href="motos honda/CB 100.html"> <!--enlazamos con la descripcion -->
                <img src="imagen motos/honda/cb100.jpg" alt="Producto destacado 3">
                <h3>HONDA CB100</h3>
                <p>La Honda CB100 es una moto de 100cc con un motor de 4 tiempos, 1 cilindro, refrigerado por aire. Tiene una potencia de 6.9 HP a 7,500 RPM y un torque de 7.5 Nm a 4,500 RPM. La transmisión es mecánica de 4 velocidades. El tanque de combustible tiene una capacidad de 9 litros. </p>
                <p id="price">S/ 5,810</p>
                </a>
                <button onclick="agregarAlCarrito('HONDA CB100', 5810)">Agregar al Carrito</button>
            </div>

            <div class="tar-prod">
                <a href="motos honda/CB 125 TWISTER.html"> <!--enlazamos con la descripcion -->
                <img src="imagen motos/honda/cb125 twister.avif" alt="Producto destacado 3">
                <h3>HONDA CB125 TWISTER </h3>
                <p>La Honda CB125F Twister es una moto urbana diseñada para la movilidad en la ciudad, conocida por su eficiencia, bajo consumo y diseño deportivo. La moto cuenta con un motor de 124.8 cc, 4 tiempos, que genera 8.4HP @ 7,500 RPM y 10.2 NM @ 6,000 RPM. El diseño de la CB125F Twister, incluyendo luces LED, busca ofrecer una experiencia de conducción cómoda y segura. </p>
                <p id="price">S/.7,068</p>
                </a>
                <button onclick="agregarAlCarrito('HONDA CB125 TWISTER', 7068)">Agregar al Carrito</button>
            </div>
        
            <div class="tar-prod">
                <a href="motos honda/CB 190R 2.0 ABS.html"> <!--enlazamos con la descripcion -->
                <img src="imagen motos/honda/CB190.webp" alt="Producto destacado 3">
                <h3>HONDA CB190R 2.0 </h3>
                <p>La Honda CB190R 2.0 es una motocicleta deportiva de 184.4 cc que ofrece un rendimiento equilibrado y un diseño atractivo. Destaca por su motor de 4 tiempos SOHC de 16.4 HP y 15.5 Nm de torque, su sistema de frenos ABS, y su diseño moderno con iluminación LED. </p>
                <p id="price">S/ 11,597</p>
                </a>
                <button onclick="agregarAlCarrito('HONDA CB190R 2.0', 11597)">Agregar al Carrito</button>
            </div>
            
    </div>
    </section>  
    <h3 class="subtitulo">MARCA BAJAJ</h3>
    <section class="destacados">
            <div class="tar-prod">
                <a href="motos bajaj/PULSAR 125 LS.html"> <!--enlazamos con la descripcion -->
                <img src="motos bajaj/imagenes motos/bajaj/LS125.webp" alt="Producto destacado 3">
                <h3>BAJAJ PULSAR LS125</h3>
                <p> Es una motocicleta urbana de 125 cc, diseñada para ofrecer agilidad y eficiencia en el tráfico citadino. Con un diseño deportivo y características modernas, se posiciona como una opción atractiva para quienes buscan una moto práctica y económica</p>
                <p id="price">S/ 7,630</p>
                </a>
                <button onclick="agregarAlCarrito('PULSAR LS125', 7630)">Agregar al Carrito</button>
            </div>

            <div class="tar-prod">
                <a href="motos bajaj/PULSAR 180 NEON.html"> <!--enlazamos con la descripcion -->
                <img src="motos bajaj/imagenes motos/bajaj/pulsar 180 neon.jpg" alt="Producto destacado 3">
                <h3>BAJAJ PULSAR 180 neon</h3>
                <p>La Bajaj Pulsar 180 Neon FI es una motocicleta que ofrece una combinación de potencia, eficiencia y estilo. Su sistema de inyección electrónica mejora el rendimiento de combustible, mientras que sus frenos de disco y suspensión con gas Nitrox proporcionan seguridad y comodidad en la conducción. Con una autonomía superior a los 600 km, es ideal para quienes buscan una moto versátil para uso urbano y viajes largos.</p>
                <p id="price">S/ 9,819</p>
                </a>
                <button onclick="agregarAlCarrito('PULSAR 180 NEON', 9819)">Agregar al Carrito</button>
            </div>

            <div class="tar-prod">
                <a href="motos bajaj/PULSAR NS160.html"> <!--enlazamos con la descripcion -->
                <img src="motos bajaj/imagenes motos/bajaj/pulsar ns160.png" alt="Producto destacado 3">
                <h3>BAJAJ PULSAR NS160</h3>
                <p>La NS 160 es una motocicleta que combina potencia, tecnología y estilo en un paquete accesible. Con características como frenos ABS, suspensión avanzada y un diseño deportivo, es una opción atractiva para motociclistas que buscan rendimiento y seguridad.</p>
                <p id="price">S/ 11,900</p>
                </a>
                <button onclick="agregarAlCarrito('PULSAR NS160', 11900)">Agregar al Carrito</button>
            </div>

    </section>
    <h3 class="subtitulo">MARCA SSENDA </h3>
    <section class="destacados">
            <div class="tar-prod">
                <a href="motos ssenda/GOL 125.html"> <!--enlazamos con la descripcion -->
                <img src="motos ssenda/imagenes motos/gol 125.jpeg" alt="Producto destacado 3">
                <h3>SSENDA GOL 125</h3>
                <p>La Ssenda Gol 125 presenta un diseño moderno y compacto, con líneas deportivas que resaltan su carácter urbano. Su asiento a 760 mm del suelo facilita el acceso y la comodidad durante la conducción.</p>
                <p id="price">S/ 4,590</p>
                </a>
                <button onclick="agregarAlCarrito('GOL 125', 4590)">Agregar al Carrito</button>
            </div>

            <div class="tar-prod">
                <a href="motos ssenda/VIPER 200 NKS.html"> <!--enlazamos con la descripcion -->
                <img src="motos ssenda/imagenes motos/VIPER NKS.jpeg" alt="Producto destacado 3">
                <h3>SSENDA VIPER 200 NKS</h3>
                <p>La nueva VIPER 200NKS incorpora un robusto motor OHC de 200 cc. refrigerado por aire, especialmente diseñado para entregarte altas revoluciones sin sacrificar altas dosis de combustible.</p>
                <p id="price">S/ 6,990</p>
                </a>
                <button onclick="agregarAlCarrito('VIPER 200NKS', 6990)">Agregar al Carrito</button>
            </div>

            <div class="tar-prod">
                <a href="motos ssenda/DURO 250 TK.html"> <!--enlazamos con la descripcion -->
                <img src="motos ssenda/imagenes motos/TK 250.avif" alt="Producto destacado 3">
                <h3>SSENDA TEKEN 250</h3>
                <p>La Ssenda Duro 250 TK es una motocicleta doble propósito de 250 cc diseñada para rendir tanto en ciudad como en terrenos off-road, gracias a su motor potente, suspensión reforzada y equipamiento completo que garantiza comodidad, estabilidad y seguridad en todo tipo de caminos.</p>
                <p id="price">S/ 8,125</p>
                </a>
                <button onclick="agregarAlCarrito('DURO 250 TK', 8125)">Agregar al Carrito</button>
            </div>

    </section>
    <h3 class="subtitulo">MARCA NEXUS </h3>
    <section class="destacados">
            <div class="tar-prod">
                <a href="motos nexus/NEXUS 150T4.html"> <!--enlazamos con la descripcion -->
                <img src="motos nexus/imagenes motos/150 T4.jpeg" alt="Producto destacado 3">
                <h3>NEXUS 150 T4</h3>
                <p>La Nexus 150T4 incorpora un motor a cadenilla de 150cc capaz de producir 8.3 caballos de potencia, el encendido de este monocilindrico lo eliges tú. Ya sea eléctrico o a patada la 150T4 no te dejará a medio camino</p>
                <p id="price">S/ 5,083 </p>
                </a>
                <button onclick="agregarAlCarrito('NEXUS 150 T4', 5083)">Agregar al Carrito</button>
            </div>

            <div class="tar-prod">
                <a href="motos nexus/TRITON 200.html"> <!--enlazamos con la descripcion -->
                <img src="motos nexus/imagenes motos/triton 200.png" alt="Producto destacado 3">
                <h3>NEXUS TRITON 200</h3>
                <p>La Nexus Triton 200 es una motocicleta doble propósito de 200 cc, diseñada para ofrecer una conducción versátil tanto en ciudad como en terrenos irregulares. Con un motor de 16 caballos de fuerza, esta moto combina potencia y economía, siendo ideal para quienes buscan una opción accesible y funcional.</p>
                <p id="price">S/ 5,065</p>
                </a>
                <button onclick="agregarAlCarrito('TRITON 200', 5065)">Agregar al Carrito</button>
            </div>

            <div class="tar-prod">
                <a href="motos nexus/ADV 250.html"> <!--enlazamos con la descripcion -->
                <img src="motos nexus/imagenes motos/adv250.png" alt="Producto destacado 3">
                <h3>NEXUS ADV 250</h3>
                <p>Su motor monocilíndrico de 250 centímetros cúbicos entrega una potencia de 18 caballos de fuerza. Al contar con un block estriado, este se refrigera con las corrientes de aire que se generan durante la conducción, manteniéndose en la temperatura correcta de funcionamiento en todo momento</p>
                <p id="price">S/ 6,215</p>
                </a>
                <button onclick="agregarAlCarrito('NEXUS ADV 250', 6215)">Agregar al Carrito</button>
            </div>
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
