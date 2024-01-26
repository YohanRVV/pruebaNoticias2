{include file='header.tpl'}

<div class="container mt-4 vh-100">
    <h1>{if $noticia.id_noticia}Editar{else}Crear{/if} Noticia</h1>

    <form action="admin.php?action={if $noticia.id_noticia}update_noticia{else}store_noticia{/if}" method="post"
        enctype="multipart/form-data">
        <input type="hidden" name="id_noticia" value="{$noticia.id_noticia|default:''}">
        <div class="mb-3">
            <label for="titulo" class="form-label">Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="{$noticia.titulo|default:''}"
                required autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="contenido" class="form-label">Contenido:</label>
            <textarea class="form-control" id="contenido" name="contenido" rows="5" required
                autocomplete="off">{$noticia.contenido|default:''}</textarea>
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen:</label>
            <input type="file" class="form-control" id="imagen" name="imagen">
        </div>
        <div class="mb-3">
            <label for="id_periodista" class="form-label">Periodista:</label>
            <select class="form-select" id="id_periodista" name="id_periodista" required>
                {foreach from=$periodistas item=periodista}
                    <option value="{$periodista.id_periodista}"
                        {if $periodista.id_periodista == $noticia.id_periodista}selected{/if}>{$periodista.nombre}
                        {$periodista.apellido}</option>
                {/foreach}
            </select>
        </div>
        <button type="submit" class="btn btn-primary">{if $noticia.id_noticia}Actualizar{else}Crear{/if}</button>
    </form>
</div>

{include file='footer.tpl'}