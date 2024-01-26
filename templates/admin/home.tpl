{include file='header.tpl'}

<div class="container mt-4">
    <div class="mb-3">
        <label for="periodistaSelect" class="form-label">Seleccione un Periodista:</label>
        <select id="periodistaSelect" class="form-select" onchange="filtrarNoticiasPorPeriodista()">
            <option value="">Todos los periodistas</option>
            {foreach from=$periodistas item=periodista}
                <option value="{$periodista.id_periodista}">{$periodista.nombre} {$periodista.apellido}</option>
            {/foreach}
        </select>
    </div>

    <!-- Contenedor donde se cargarán las noticias -->
    <div id="contenedor-noticias"></div>

</div>

<div class="video-container mt-5">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/B8VcOl4U_HQ?si=VW5SBZdWCgjml0qb"
        title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen></iframe>
</div>

{include file='footer.tpl'}
