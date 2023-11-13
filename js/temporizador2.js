// Definir la duración del temporizador en segundos
var duracion = 75; // 1.15 minutos

// Función para actualizar el temporizador en la página
function actualizarTemporizador() {
    var minutos = Math.floor(duracion / 60);
    var segundos = duracion % 60;

    // Asegurarse de que los minutos y segundos tengan 2 dígitos
    if (minutos < 10) minutos = "0" + minutos;
    if (segundos < 10) segundos = "0" + segundos;

    document.getElementById("countdown").textContent = "Tiempo restante: " + minutos + ":" + segundos;
}

// Función para redirigir al usuario a otra página
function redirigir() {
    clearInterval(temporizadorInterval); // Detener el temporizador
    window.location.href = "Lamina2.html"; // Cambia "otra_pagina.html" a la URL de la página a la que deseas redirigir.
}

// Iniciar el temporizador
var temporizadorInterval = setInterval(function() {
    duracion--; // Reducir el tiempo en 1 segundo
    actualizarTemporizador(); // Actualizar la visualización del temporizador en la página

    if (duracion === 0) {
        redirigir(); // Redirigir cuando el temporizador llegue a cero
    }
}, 1000); // Ejecutar la función cada segundo

actualizarTemporizador(); // Mostrar el temporizador inicial
