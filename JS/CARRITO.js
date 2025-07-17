// Variables globales
let carrito = JSON.parse(localStorage.getItem('carrito')) || [
    { nombre: "HONDA NAVI", precio: 6538, cantidad: 1 },
    { nombre: "RS 200", precio: 16099, cantidad: 1 },
    { nombre: "HONDA NAVI", precio: 6538, cantidad: 1 },
    { nombre: "RS 200", precio: 16099, cantidad: 1 },
    { nombre: "Amortiguador doble resorte Volda", precio: 8000, cantidad: 1 },
]; // Usamos un arreglo para almacenar los productos

// Función para actualizar la visualización del carrito
function actualizarCarrito() {
    const carritoElement = document.getElementById('carrito-items');
    const totalElement = document.getElementById('total');
    const carritoCount = document.getElementById('carrito-count');

    carritoElement.innerHTML = ''; // Limpiar los productos del carrito
    let total = 0;

    // Recorremos el arreglo carrito
    carrito.forEach((producto, index,) => {
    const li = document.createElement('li');
    li.className = 'producto-card';
    li.innerHTML = `
    <div class="producto-info">
        <span class="nombre">${producto.nombre}</span>
        <span class="precio">S/.${producto.precio.toFixed(2)}</span>
    </div>
    <div class="cantidad-control">
        <label for="cantidad-${index}">Cantidad</label>
        <input id="cantidad-${index}" type="number" min="1" value="${producto.cantidad}" onchange="actualizarCantidad(${index}, this.value)" />
    </div>
    <button onclick="eliminarDelCarrito(${index})">Eliminar</button>
    `;
        carritoElement.appendChild(li);
        total += producto.precio * producto.cantidad;
    });

    totalElement.textContent = `Total: S/.${total.toFixed(2)}`;
    carritoCount.textContent = carrito.reduce((sum, p) => sum + p.cantidad, 0); // Total de unidades

    // Guardar carrito actualizado en localStorage
    localStorage.setItem('carrito', JSON.stringify(carrito));
}

// Cambiar cantidad con botones + y -
function cambiarCantidad(index, delta) {
    carrito[index].cantidad += delta;
    if (carrito[index].cantidad <= 0) {
        carrito.splice(index, 1);
    }
    actualizarCarrito();
}

// Cambiar cantidad desde input numérico
function actualizarCantidad(index, nuevaCantidad) {
    const cantidad = parseInt(nuevaCantidad);
    if (cantidad > 0) {
        carrito[index].cantidad = cantidad;
    } else {
        carrito.splice(index, 1);
    }
    actualizarCarrito();
}

// Mostrar un mensaje rápido cuando se agrega un producto
function mostrarMensajeRapido(mensaje) {
    const mensajeElement = document.createElement('div');
    mensajeElement.textContent = mensaje;
    mensajeElement.style.position = 'fixed';
    mensajeElement.style.bottom = '20px';
    mensajeElement.style.right = '20px';
    mensajeElement.style.backgroundColor = '#4CAF50';
    mensajeElement.style.color = 'white';
    mensajeElement.style.padding = '10px 20px';
    mensajeElement.style.borderRadius = '5px';
    mensajeElement.style.boxShadow = '0 2px 5px rgba(0, 0, 0, 0.2)';
    mensajeElement.style.zIndex = '1000';
    mensajeElement.style.fontSize = '14px';

    document.body.appendChild(mensajeElement);

    // Eliminar el mensaje después de 3 segundos
    setTimeout(() => {
        document.body.removeChild(mensajeElement);
    }, 3000);
}

// Agregar un producto al carrito
function agregarAlCarrito(nombreProducto, precio) {
    // Buscar si el producto ya está en el carrito
    const productoExistente = carrito.find(producto => producto.nombre === nombreProducto);

    if (productoExistente) {
        // Si el producto existe, solo incrementamos la cantidad
        productoExistente.cantidad += 1;
    } else {
        // Si el producto no existe, lo agregamos como nuevo
        carrito.push({ nombre: nombreProducto, precio: precio, cantidad: 1 });
    }

    actualizarCarrito(); // Actualizar la vista del carrito
    mostrarMensajeRapido(`${nombreProducto} fue agregado al carrito.`);
}

// Eliminar un producto por su índice
function eliminarDelCarrito(index) {
    carrito.splice(index, 1); // Eliminar el producto del arreglo
    actualizarCarrito(); // Actualizar la vista del carrito
}

// Vaciar el carrito
function vaciarCarrito(mostrarMensaje = true) {
    carrito = []; // Vaciar el arreglo carrito
    actualizarCarrito(); // Actualizar la vista del carrito

    // Mostrar mensaje solo si mostrarMensaje es verdadero
    if (mostrarMensaje) {
        alert("El carrito ha sido vaciado.");
    }
}

// Confirmar la compra y generar recibo en modal
function confirmarCompra() {
    if (carrito.length === 0) {
        alert("El carrito está vacío. Agrega productos antes de confirmar la compra.");
        return;
    }

    let total = 0;
    let listaProductos = "";

    carrito.forEach(producto => {
        total += producto.precio * producto.cantidad;
        listaProductos += `
            <tr>
                <td>${producto.nombre}</td>
                <td>${producto.cantidad}</td>
                <td>S/.${producto.precio.toFixed(2)}</td>
                <td>S/.${(producto.precio * producto.cantidad).toFixed(2)}</td>
            </tr>`;
    });

    const contenido = `
        <h2>🧾 Moto King - Recibo de Compra</h2>
        <p><strong>Fecha:</strong> ${new Date().toLocaleString()}</p>
        <table border="1" cellpadding="10" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>${listaProductos}</tbody>
        </table>
        <h3 style="text-align: right;">Total: S/.${total.toFixed(2)}</h3>
        <button onclick="descargarRecibo()">📥 Descargar PDF</button>
    `;

    const modal = document.getElementById('recibo-modal');
    const contenidoModal = document.getElementById('contenido-recibo');
    contenidoModal.innerHTML = contenido;
    modal.style.display = 'block';

    vaciarCarrito(false);
}

// Descargar recibo como PDF utilizando ventana de impresión
function descargarRecibo() {
    const contenido = document.getElementById('contenido-recibo');
    const ventana = window.open('', '_blank');
    ventana.document.write(`
        <html>
        <head><title>Recibo Moto King</title></head>
        <body>${contenido.innerHTML}</body>
        </html>
    `);
    ventana.document.close();
    ventana.focus();
    ventana.print();
    ventana.close();
}

// Cerrar el modal del recibo
function cerrarModal() {
    document.getElementById('recibo-modal').style.display = 'none';
}

// Mostrar/ocultar el carrito
function toggleCarrito() {
    const carritoDropdown = document.getElementById('carrito-dropdown');
    carritoDropdown.style.display =
        carritoDropdown.style.display === 'none' ? 'block' : 'none';
}

// Cargar el carrito al inicio de cada página
document.addEventListener("DOMContentLoaded", actualizarCarrito);

//recien agregado para la DB
function confirmarCompra() {
    if (carrito.length === 0) {
        alert("El carrito está vacío");
        return;
    }

    fetch("../confirmar_compra.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ items: carrito })
    })
    
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert("Compra registrada con éxito");
            vaciarCarrito();
        } else {
            alert("Hubo un error al registrar la compra");
        }
    })
    .catch(error => {
        console.error("Error al enviar datos:", error);
        alert("Error al conectar con el servidor");
    });
}
