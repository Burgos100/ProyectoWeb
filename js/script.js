function crearCirculo(area) {
    const coords = area.getAttribute("coords").split(",");
    const left = parseInt(coords[0]);
    const top = parseInt(coords[1]);
    const radius = parseInt(coords[2]);

<<<<<<< Updated upstream
    const circle = document.createElement("div");
    circle.className = "circle";
    circle.style.left = left + "px";
    circle.style.top = top + "px";
    circle.style.width = radius * 2 + "px";
    circle.style.height = radius * 2 + "px";

    document.querySelector(".recuadro").appendChild(circle);
}
=======
function crearCirculo(area, figuraTexto) {
    const coords = area.getAttribute("coords");

    // Verificar si el área ya ha sido clicada
    if (!areasClicadas.includes(coords)) {
        // Incrementar el contador de figuras
        contadorFiguras++;

        // Agregar el área a la lista de áreas clicadas
        areasClicadas.push(coords);

        // Obtener o crear el contenedor lateral izquierdo
        let lateralIzquierdo = document.querySelector(".lateralDerecho");

        if (!lateralIzquierdo) {
            // Si el lateral izquierdo no existe, créalo
            lateralIzquierdo = document.createElement("div");
            lateralIzquierdo.className = "lateralDerecho";
            document.body.appendChild(lateralIzquierdo);
        }

        // Crear un nuevo recuadro para mostrar el texto
        const figuraTextoElemento = document.createElement("div");
        figuraTextoElemento.className = "textoRecuadro";
        figuraTextoElemento.innerHTML = figuraTexto || "Figura Desconocida"; // Usar el texto proporcionado o un valor predeterminado

        // Agregar el nuevo recuadro al lateral izquierdo
        lateralIzquierdo.appendChild(figuraTextoElemento);
    }
}
>>>>>>> Stashed changes
