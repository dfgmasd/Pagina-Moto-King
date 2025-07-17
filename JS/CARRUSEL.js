let indice = 0;
const tarjetasVisibles = 3; // Número de tarjetas visibles al mismo tiempo
let totalTarjetas;

function moverCarrusel(direccion) {
  const carrusel = document.querySelector('.carrusel');
  const tarjetas = document.querySelectorAll('.tar-prod');
  totalTarjetas = tarjetas.length;

  // Cambiar el índice de las tarjetas visibles según la dirección
  indice += direccion;

  // Si llegamos al final, volvemos al inicio (efecto de carrusel infinito)
  if (indice < 0) {
    indice = totalTarjetas / 2 - tarjetasVisibles;
    carrusel.style.transition = 'none'; // Desactivar transición al hacer el salto
    carrusel.style.transform = `translateX(-${indice * (100 / tarjetasVisibles)}%)`; // Ajustar posición al inicio
    setTimeout(() => {
      carrusel.style.transition = 'transform 0.5s ease-in-out'; // Activar transición después del salto
    }, 50);
  } else if (indice >= totalTarjetas / 2) {
    indice = 0;
    carrusel.style.transition = 'none';
    carrusel.style.transform = `translateX(0%)`; // Regresar al principio
    setTimeout(() => {
      carrusel.style.transition = 'transform 0.5s ease-in-out';
    }, 50);
  }

  // Desplazar el carrusel
  const desplazamiento = -(indice * (100 / tarjetasVisibles));
  carrusel.style.transform = `translateX(${desplazamiento}%)`;
}