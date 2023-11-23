const miAudio = document.getElementById('miAudio');
const botonReproducir = document.getElementById('botonReproducir');

botonReproducir.addEventListener('click', function() {
    if (miAudio.paused) {
        miAudio.play(); // Reproducir el audio si está pausado
        botonReproducir.textContent = 'Pausar Audio';
    } else {
        miAudio.pause(); // Pausar el audio si está reproduciéndose
        botonReproducir.textContent = 'Reproducir Audio';
    }
});
