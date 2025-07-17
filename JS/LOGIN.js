document.getElementById('loginForm').addEventListener('submit', function (event) {
    event.preventDefault(); 

    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value.trim();

  
    if (email === "motoking_2025@hotmail.com" && password === "123456") {
        alert("Inicio de sesión exitoso. ¡Bienvenido a Moto King!");
        
        window.location.href = "../index.html";
    } else {
        alert("Correo o contraseña incorrectos. Por favor, inténtalo de nuevo.");
    }
});


