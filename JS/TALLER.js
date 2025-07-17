document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("formTaller");
    const tabla = document.getElementById("tablaCitas").getElementsByTagName("tbody")[0];

    let citas = JSON.parse(localStorage.getItem("citas")) || [];

    function renderizarCitas() {
        tabla.innerHTML = "";

        citas.forEach((cita, index) => {
            const fila = tabla.insertRow();
            fila.insertCell(0).innerText = cita.nombre;
            fila.insertCell(1).innerText = cita.telefono;
            fila.insertCell(2).innerText = cita.fecha;
            fila.insertCell(3).innerText = formatearHoraAMPM(cita.hora);
            fila.insertCell(4).innerText = cita.servicio;

            const celdaEliminar = fila.insertCell(5);
            const btnEliminar = document.createElement("button");
            btnEliminar.innerText = "❌";
            btnEliminar.className = "boton-eliminar";
            btnEliminar.onclick = () => {
                citas.splice(index, 1);
                localStorage.setItem("citas", JSON.stringify(citas));
                renderizarCitas();
            };
            celdaEliminar.appendChild(btnEliminar);
        });
    }

    function formatearHoraAMPM(hora24) {
        const [h, m] = hora24.split(":");
        const hora = parseInt(h, 10);
        const minutos = m.padStart(2, "0");
        const ampm = hora >= 12 ? "PM" : "AM";
        const hora12 = hora % 12 === 0 ? 12 : hora % 12;
        return `${hora12}:${minutos} ${ampm}`;
    }

    form.addEventListener("submit", function(e) {
        e.preventDefault();

        const nuevaCita = {
            nombre: document.getElementById("nombre").value.trim(),
            telefono: document.getElementById("telefono").value.trim(),
            fecha: document.getElementById("fecha").value,
            hora: document.getElementById("hora").value,
            servicio: document.getElementById("servicio").value
        };

        // Validar rango horario permitido (08:00 a 20:00)
        const [hora, minuto] = nuevaCita.hora.split(":").map(Number);
        const horaDecimal = hora + minuto / 60;
        if (horaDecimal < 8 || horaDecimal > 20) {
            alert("⚠️ Solo se permiten citas entre las 08:00 AM y las 08:00 PM.");
            return;
        }

        // Validar si ya hay cita en la misma fecha y hora
        const horaOcupada = citas.some(cita =>
            cita.fecha === nuevaCita.fecha && cita.hora === nuevaCita.hora
        );
        if (horaOcupada) {
            alert("⚠️ Ya existe una cita registrada para esa fecha y hora. Elige otra.");
            return;
        }

        citas.push(nuevaCita);
        localStorage.setItem("citas", JSON.stringify(citas));
        renderizarCitas();
        form.reset();
    });
    // Mostrar citas guardadas al cargar
    renderizarCitas();
});
