function crearCirculo(area) {
    const coords = area.getAttribute("coords").split(",");
    const left = parseInt(coords[0]);
    const top = parseInt(coords[1]);
    const radius = parseInt(coords[2]);

    const circle = document.createElement("div");
    circle.className = "circle";
    circle.style.left = left + "px";
    circle.style.top = top + "px";
    circle.style.width = radius * 2 + "px";
    circle.style.height = radius * 2 + "px";

    document.querySelector(".recuadro").appendChild(circle);
}