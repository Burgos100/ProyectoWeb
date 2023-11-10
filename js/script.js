let contadorFiguras = 0;
let areasClicadas = [];

function crearCirculo(area, figuraTexto) {
    const coords = area.getAttribute("coords");

    // Verificar si el área ya ha sido clicada
    if (!areasClicadas.includes(coords)) {
        // Incrementar el contador de figuras
        contadorFiguras++;

        // Agregar el área a la lista de áreas clicadas
        areasClicadas.push(coords);

        // Obtener o crear el contenedor lateral izquierdo
        let lateralDerecho = document.querySelector(".lateralDerecho");

        if (!lateralDerecho) {
            // Si el lateral izquierdo no existe, créalo
            lateralDerecho = document.createElement("div");
            lateralDerecho.className = "lateralDerecho";
            document.body.appendChild(lateralDerecho);
        }

        // Crear un nuevo recuadro para mostrar el texto
        const figuraTextoElemento = document.createElement("div");
        figuraTextoElemento.className = "textoRecuadro";
        figuraTextoElemento.innerHTML = figuraTexto || "Figura Desconocida"; // Usar el texto proporcionado o un valor predeterminado

        // Agregar el nuevo recuadro al lateral izquierdo
        lateralDerecho.appendChild(figuraTextoElemento);
    }
}

