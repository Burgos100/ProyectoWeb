function crearRecuadro(area, figuraTexto) {
    // Verificar si el área ya ha sido clicada
    if (area.getAttribute("data-clicada") === "true") {
        return; // Salir de la función si ya ha sido clicada
    }

    const coords = area.getAttribute("coords");

    const data = {
        lamina: document.querySelector(".imagen2").getAttribute("data-lamina"),
        respuesta: figuraTexto
    };

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "../Prueba_4_T3/guardar_respuestas_1.php", true);
    xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log("Respuesta del servidor:", xhr.responseText);
            // Marcar el área como clicada para evitar clics adicionales
            area.setAttribute("data-clicada", "true");

            // Generar un recuadro a la derecha
            generarRecuadroDerecho(figuraTexto);
        }
    };

    xhr.send(JSON.stringify(data));
}

function generarRecuadroDerecho(figuraTexto) {
    // Obtener o crear el contenedor lateral derecho
    let lateralDerecho = document.querySelector(".lateralDerecho");

    if (!lateralDerecho) {
        // Si el lateral derecho no existe, créalo
        lateralDerecho = document.createElement("div");
        lateralDerecho.className = "lateralDerecho";
        document.body.appendChild(lateralDerecho);
    }

    // Crear un nuevo recuadro para mostrar el texto
    const figuraTextoElemento = document.createElement("div");
    figuraTextoElemento.className = "textoRecuadro";
    figuraTextoElemento.innerHTML = figuraTexto || "Figura Desconocida"; // Usar el texto proporcionado o un valor predeterminado

    // Agregar el nuevo recuadro al lateral derecho
    lateralDerecho.appendChild(figuraTextoElemento);
}
function siguientePagina() {
    window.location.href = "../Final.html";
}