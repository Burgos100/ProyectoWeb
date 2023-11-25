function iniciarTemporizador(tiempoLimite, paginaDestino) {
    var tiempoRestante = tiempoLimite;
  
    function actualizarTiempo() {
      var minutos = Math.floor(tiempoRestante / 60);
      var segundos = tiempoRestante % 60;
  
      // Formatear el tiempo como MM:SS
      var tiempoFormateado = minutos + ":" + (segundos < 10 ? "0" : "") + segundos;
  
      // Mostrar el tiempo en un elemento con el ID "tiempoRecuadro"
      document.getElementById("tiempoRecuadro").innerText = tiempoFormateado;
    }
  
    var temporizador = setInterval(function () {
      tiempoRestante--;
  
      // Actualizar el tiempo restante
      actualizarTiempo();
  
      if (tiempoRestante <= 0) {
        clearInterval(temporizador);
        window.location.href = paginaDestino;
      }
    }, 1000);
  
    // Crear un elemento div para mostrar el tiempo restante
    var tiempoDiv = document.createElement("div");
    tiempoDiv.id = "tiempoRecuadro";
    document.body.appendChild(tiempoDiv);
  
    // Inicializar la visualización del tiempo
    actualizarTiempo();
  }