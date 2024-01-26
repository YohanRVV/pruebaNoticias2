function cargarNoticias(idPeriodista) {
    const apiUrl = idPeriodista ? `api.php?action=get_noticias&id_periodista=${idPeriodista}` : `api.php?action=get_noticias`;

    fetch(apiUrl)
        .then(response => response.json())
        .then(noticias => {
            const contenedorNoticias = document.getElementById('contenedor-noticias');
            contenedorNoticias.innerHTML = '';  // Limpiar el contenedor de noticias

            noticias.forEach(noticia => {
                const noticiaDiv = document.createElement('div');
                noticiaDiv.className = 'noticia';
                noticiaDiv.innerHTML = `
                    <div class="col-md-10 mx-auto">
                        <div class="card mb-4">
                            <img src="src/images/${noticia.imagen}" alt="${noticia.titulo} Imagen" class="card-img-top">
                            <div class="card-body">
                                <h2 class="card-title text-center">${noticia.titulo}</h2>
                                <hr>
                                <p class="card-text">${noticia.contenido}</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <span><strong>Fecha de Publicación:</strong> ${noticia.fecha_publicacion_sin_hora}</span>
                                <span><strong>Periodista:</strong> ${noticia.periodista_nombre} ${noticia.periodista_apellido}</span>
                            </div>
                        </div>
                    </div>
                `;
                contenedorNoticias.appendChild(noticiaDiv);
            });
        })
        .catch(error => console.error('Error al cargar las noticias:', error));
}

function filtrarNoticiasPorPeriodista() {
    var idPeriodistaSeleccionado = document.getElementById('periodistaSelect').value;
    cargarNoticias(idPeriodistaSeleccionado);
}

window.onload = () => cargarNoticias();
