// Obtener referencias a elementos HTML por su ID
const sidebar = document.getElementById('sidebar');
const increaseFontSizeButton = document.getElementById('increaseFontSizeButton');
const decreaseFontSizeButton = document.getElementById('decreaseFontSizeButton');
const playAudioButton = document.getElementById('playAudioButton');
const resetButton = document.getElementById('resetButton');
const audioPlayer = document.getElementById('audioPlayer');

// Agregar un evento de clic al botón de alternar (toggle) para abrir/cerrar el menú
toggleButton.addEventListener('click', () => {
    sidebar.classList.toggle('open'); // Alternar la clase 'open' en la barra lateral
}); 
// Agregar un evento de clic al botón de reproducción de audio
playAudioButton.addEventListener('click', () => {
    if (audioPlayer.paused) {
        audioPlayer.play();
    } else {
        audioPlayer.pause();
    }
});

// Agregar un evento de clic al botón de aumento de tamaño de fuente
increaseFontSizeButton.addEventListener('click', () => {
    // Obtener el tamaño de fuente actual, aumentarlo y aplicarlo al cuerpo del documento
    const currentSize = window.getComputedStyle(document.body, null).getPropertyValue('font-size');
    const newSize = parseFloat(currentSize) * 1.2;
    document.body.style.fontSize = newSize + 'px';
});

// Agregar un evento de clic al botón de reducción de tamaño de fuente
decreaseFontSizeButton.addEventListener('click', () => {
    // Obtener el tamaño de fuente actual, reducirlo y aplicarlo al cuerpo del documento
    const currentSize = window.getComputedStyle(document.body, null).getPropertyValue('font-size');
    const newSize = parseFloat(currentSize) / 1.2;
    document.body.style.fontSize = newSize + 'px';
});

// Agregar un evento de clic al botón de reinicio
resetButton.addEventListener('click', () => {
    location.reload(true); // Recargar la página forzando la recarga desde el servidor
});


