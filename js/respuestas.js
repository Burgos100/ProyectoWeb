    fetch("usuario.txt")
        .then(response => response.text())
        .then(contenido => {
            // Mostrar el contenido en el elemento con id "contenidoRespuestas"
            document.getElementById("contenidoRespuestas").innerText = contenido;
        })
        .catch(error => {
            alert("Hubo un error al cargar las respuestas. Asegúrate de que el archivo 'usuario.txt' exista.");
            console.error(error);
        });
