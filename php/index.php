<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/estilos.css"> 
    <link rel="stylesheet" href="../CSS/style.css">

</head>
<body>
<?php
include("sesion.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>MOTO KING - Venta Repuestos y motocicletas</title>
    <link rel="stylesheet" href="CSS/style.css">
    <script src="../JS/carrito.js"></script>
    <script src="confirmar_compra.php"></script>

</head>
<body>
    <!-- barra de apartados -->
    <header>    
        <nav>
            <ul> 
                <!-- enlaces entre apartados -->
                <li><a href="index.php"><I><strong>INICIO</strong></I></a></li>
                <li><a href="../clienteV/repuestos.php"><I><strong>REPUESTOS</strong></I></a></li> 
                <li><a href="../clienteV/motos.php"><I><strong>MOTOCICLETAS</strong></I></a></li>
                <li><a href="../clienteV/serviciotaller.php"><I><strong>TALLER</strong></I></a></li>
                <li><a href="../clienteV/comunicacion.php"><I><strong>CONTACTO</strong></I></a></li>
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
    
    <!-- seccion de promociones -->
    <h2>PROMOCIONES DEL MES</h2>
<div class="carrusel-container"> <!--  boton mover izquierda carrusel-->
  <button class="carrusel-btn izquierda" onclick="moverCarrusel(-1)">&#10094;</button>
 <!-- contenido -->
  <div class="carrusel">
    <div class="tar-prod">
      <a href="pages/productos/motos honda/HONDA NAVI.html"> <!--enlazamos con la descripcion -->
        <img src="imagenes promociones/navi.avif" alt="Producto destacado 1">
        <h3>Motocicleta Honda Navi</h3>
        <p>Cuando hablamos de la Honda Navi ,creemos que la seguridad que te brinda superará tus expectativas, además nuestro principal compromiso es tu seguridad y el sistema de suspensión está diseñado para cumplir a cabalidad, por eso incorpora Suspensión Telescópica en la parte Delantera y un Monoamortiguador en la parte Posterior con lo cual brinda el equilibrio, soporte y estabilidad perfecto, maximizando la confianza y la experiencia en el manejo.</p>
        <p><strong>S/.6,538</strong></p>
      </a>
      <button onclick="agregarAlCarrito('HONDA NAVI', 6538)">Agregar al Carrito</button>
    </div>

    <div class="tar-prod">
      <a href="pages/productos/motos bajaj/RS 200.html"> <!--enlazamos con la descripcion -->
        <img src="imagenes promociones/rs200.avif" alt="Producto destacado 3">
        <h3>Motocicleta Bajaj RS200</h3>
        <p>Si buscas escarapelar el cuerpo con adrenalina, esta debe ser una firme candidata para tu garaje. Es una moto con cromosomas netamente deportivos, musculosa, corpulenta, atrevida, impetuosa, de alto desempeño.</p>
        <p><strong>S/ 16,099</strong></p>
      </a>
      <button onclick="agregarAlCarrito('RS 200', 16099)">Agregar al Carrito</button>
    </div>

    <div class="tar-prod">
      <a href="pages/productos/motos ssenda/DURO 250 TK.html"> <!--enlazamos con la descripcion -->
        <img src="imagenes promociones/tk 250.avif" alt="Producto destacado 3">
        <h3>Motocicleta ssenda Duro 250 tk</h3>
        <p>La Ssenda Duro 250 TK es una motocicleta doble propósito de 250 cc diseñada para rendir tanto en ciudad como en terrenos off-road, gracias a su motor potente, suspensión reforzada y equipamiento completo que garantiza comodidad, estabilidad y seguridad en todo tipo de caminos.</p>
        <p><strong>S/ 8,125</strong></p>
      </a>
      <button onclick="agregarAlCarrito('DURO 250 TK', 8125)">Agregar al Carrito</button>
    </div>

    <div class="tar-prod">
      <a href="pages/productos/motos ssenda/SS300 X7.html"> <!--enlazamos con la descripcion -->
        <img src="imagenes promociones/X7.jpg" alt="Producto destacado 3">
        <h3>Motocicleta ssenda SS300 X7</h3>
        <p>Siguiendo la línea de sus motos deportivas la marca Ssenda trae a las pistas la nueva SS300-X7 EFI una máquina hecha para correr, equipada con un motor de 300 cc, una caja de 6 velocidades, inyección electrónica y embrague con quickshifter o "cambios rápidos" transportando al piloto a un circuito de carreras por donde quiera que decida conducir.</p>
        <p><strong>S/ 9,890</strong></p>
      </a>
      <button onclick="agregarAlCarrito('SS300 X7', 9890)">Agregar al Carrito</button>
    </div>

    <div class="tar-prod">
      <a href="pages/productos/motos honda/CB 190R 2.0 ABS.html"> <!--enlazamos con la descripcion -->
        <img src="imagenes promociones/CB190.webp" alt="Producto destacado 3">
        <h3>Motocicleta Honda CB190R 2.0 </h3>
        <p>La Honda CB190R 2.0 es una motocicleta deportiva de 184.4 cc que ofrece un rendimiento equilibrado y un diseño atractivo. Destaca por su motor de 4 tiempos SOHC de 16.4 HP y 15.5 Nm de torque, su sistema de frenos ABS, y su diseño moderno con iluminación LED.</p>
        <p><strong>S/ 11,597</strong></p>
      </a>
      <button onclick="agregarAlCarrito('CB190R 2.0', 11597)">Agregar al Carrito</button>
    </div>
    <!-- Duplicamos las tarjetas (esto permite el bucle infinito) -->
    <div class="tar-prod">
      <a href="pages/productos/motos honda/HONDA NAVI.html"> <!--enlazamos con la descripcion -->
        <img src="imagenes promociones/navi.avif" alt="Producto destacado 1">
        <h3>Motocicleta Honda Navi</h3>
        <p>Cuando hablamos de la Honda Navi ,creemos que la seguridad que te brinda superará tus expectativas, además nuestro principal compromiso es tu seguridad y el sistema de suspensión está diseñado para cumplir a cabalidad, por eso incorpora Suspensión Telescópica en la parte Delantera y un Monoamortiguador en la parte Posterior con lo cual brinda el equilibrio, soporte y estabilidad perfecto, maximizando la confianza y la experiencia en el manejo.</p>
        <p><strong>S/.6,538</strong></p>
      </a>
      <button onclick="agregarAlCarrito('HONDA NAVI', 6538)">Agregar al Carrito</button>
    </div>

    <div class="tar-prod">
      <a href="pages/productos/motos bajaj/RS 200.html"> <!--enlazamos con la descripcion -->
        <img src="imagenes promociones/rs200.avif" alt="Producto destacado 3">
        <h3>Motocicleta Bajaj RS200</h3>
        <p>Si buscas escarapelar el cuerpo con adrenalina, esta debe ser una firme candidata para tu garaje. Es una moto con cromosomas netamente deportivos, musculosa, corpulenta, atrevida, impetuosa, de alto desempeño.</p>
        <p><strong>S/ 16,099</strong></p>
      </a>
      <button onclick="agregarAlCarrito('RS 200', 16099)">Agregar al Carrito</button>
    </div>

    <div class="tar-prod">
      <a href="pages/productos/motos ssenda/DURO 250 TK.html"> <!--enlazamos con la descripcion -->
        <img src="imagenes promociones/tk 250.avif" alt="Producto destacado 3">
        <h3>Motocicleta ssenda Duro 250 tk</h3>
        <p>La Ssenda Duro 250 TK es una motocicleta doble propósito de 250 cc diseñada para rendir tanto en ciudad como en terrenos off-road, gracias a su motor potente, suspensión reforzada y equipamiento completo que garantiza comodidad, estabilidad y seguridad en todo tipo de caminos.</p>
        <p><strong>S/ 8,125</strong></p>
      </a>
      <button onclick="agregarAlCarrito('DURO 250 TK', 8125)">Agregar al Carrito</button>
    </div>

    <div class="tar-prod">
      <a href="pages/productos/motos ssenda/SS300 X7.html"> <!--enlazamos con la descripcion -->
        <img src="imagenes promociones/X7.jpeg" alt="Producto destacado 3">
        <h3>Motocicleta ssenda SS300 X7</h3>
        <p>Siguiendo la línea de sus motos deportivas la marca Ssenda trae a las pistas la nueva SS300-X7 EFI una máquina hecha para correr, equipada con un motor de 300 cc, una caja de 6 velocidades, inyección electrónica y embrague con quickshifter o "cambios rápidos" transportando al piloto a un circuito de carreras por donde quiera que decida conducir.</p>
        <p><strong>S/ 9,890</strong></p>
      </a>
      <button onclick="agregarAlCarrito('SS300 X7', 9890)">Agregar al Carrito</button>
    </div>

    <div class="tar-prod">
      <a href="pages/productos/motos honda/CB 190R 2.0 ABS.html"> <!--enlazamos con la descripcion -->
        <img src="imagenes promociones/CB190.webp" alt="Producto destacado 3">
        <h3>Motocicleta Honda CB190R 2.0 </h3>
        <p>La Honda CB190R 2.0 es una motocicleta deportiva de 184.4 cc que ofrece un rendimiento equilibrado y un diseño atractivo. Destaca por su motor de 4 tiempos SOHC de 16.4 HP y 15.5 Nm de torque, su sistema de frenos ABS, y su diseño moderno con iluminación LED.</p>
        <p><strong>S/ 11,597</strong></p>
      </a>
      <button onclick="agregarAlCarrito('CB190R 2.0', 11597)">Agregar al Carrito</button>
    </div>
  </div>
  <!--  boton mover dereccha carrusel-->
 <button class="carrusel-btn derecha" onclick="moverCarrusel(1)">&#10095;</button>
</div>
<script src="../JS/CARRUSEL.js"></script>

<h2>Consejos de Mantenimiento para Motos</h2>
<div class="video-tip-section">

  <div class="video-tip-container">
    <div class="video-tip-text">
      <h2>1. Cambio de aceite del motor</h2>
      <p>
        Aprende paso a paso cómo realizar el cambio de aceite de manera correcta y segura. 
        Este video te explica qué tipo de aceite es el más adecuado para diferentes tipos de motores, 
        la frecuencia recomendada para el cambio según el uso de tu moto, y cómo desechar el aceite usado de forma responsable. 
        Mantener el aceite limpio y en buen nivel es fundamental para evitar el desgaste prematuro de las piezas internas del motor, 
        mejorar la lubricación, y asegurar un rendimiento óptimo y mayor vida útil para tu motocicleta.
      </p>
    </div>
    <div class="video-tip-embed">
      <iframe src="https://www.youtube.com/embed/4iFS2RiYt60" allowfullscreen></iframe>
    </div>
  </div>

  <div class="video-tip-container">
    <div class="video-tip-text">
      <h2>2. Mantenimiento básico</h2>
      <p>
        Conoce las tareas esenciales que todo motociclista debe realizar regularmente para mantener su moto en perfectas condiciones. 
        Desde la revisión y ajuste de la cadena para evitar que se afloje o se desgaste, hasta la inspección de las luces, frenos y niveles de líquidos, 
        este video te enseña cómo identificar señales de desgaste o problemas a tiempo. 
        El mantenimiento básico no solo previene averías costosas, sino que también mejora la seguridad y la experiencia de conducción.
      </p>
    </div>
    <div class="video-tip-embed">
      <iframe src="https://www.youtube.com/embed/WCz6ATa_p8g" allowfullscreen></iframe>
    </div>
  </div>

  <div class="video-tip-container">
    <div class="video-tip-text">
      <h2>3. Cuidados para motos nuevas</h2>
      <p>
        Si acabas de comprar una moto nueva, este video es indispensable para ti. 
        Aquí aprenderás sobre el proceso de rodaje adecuado para que el motor y los componentes funcionen correctamente desde el inicio, 
        las revisiones que debes hacer en los primeros kilómetros, y consejos para evitar malos hábitos que puedan dañar la moto prematuramente. 
        Además, se detallan cuidados sobre el sistema de frenos, la batería y el sistema eléctrico, asegurando que tu moto mantenga su rendimiento y valor.
      </p>
    </div>
    <div class="video-tip-embed">
      <iframe src="https://www.youtube.com/embed/dkVAbJB6zQI" allowfullscreen></iframe>
    </div>
  </div>

  <div class="video-tip-container">
    <div class="video-tip-text">
      <h2>4. Trucos para alargar la vida útil</h2>
      <p>
        Descubre una serie de trucos prácticos y sencillos que puedes aplicar diariamente para prolongar la vida útil de tu moto. 
        Desde cómo cuidar la batería para evitar fallos eléctricos, hasta la importancia de mantener las suspensiones en buen estado para una conducción segura. 
        También se habla sobre la limpieza adecuada de la moto para prevenir corrosión y daños en la pintura, 
        y consejos para almacenar la moto correctamente si no la usas por un tiempo. Todo lo que necesitas para que tu moto te acompañe por muchos años.
      </p>
    </div>
    <div class="video-tip-embed">
      <iframe src="https://www.youtube.com/embed/4UlvpE8X2mk" allowfullscreen></iframe>
    </div>
  </div>

</div>

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
                <br>
                <br>
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

