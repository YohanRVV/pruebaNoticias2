{include file='header.tpl'}

<div class="container mt-4 vh-100">
    <h1 class="text-center mb-5">Noticias</h1>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">Título</th>
                    <th class="text-center">Periodista</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$noticias item=noticia}
                    <tr>
                        <td class="text-center">{$noticia.titulo}</td>
                        <td class="text-center">{$noticia.periodista_nombre} {$noticia.periodista_apellido}</td>
                        <td class="text-center">
                            <a href="admin.php?action=edit_noticia&id={$noticia.id_noticia}"
                                class="btn btn-primary">Editar</a>
                            <a href="admin.php?action=delete_noticia&id={$noticia.id_noticia}"
                                onclick="return confirm('¿Estás seguro de querer eliminar esta noticia?');"
                                class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>

    <div class="text-center">
        <a href="admin.php?action=create_noticia" class="btn btn-success">Crear Noticia</a>
    </div>
</div>

{include file='footer.tpl'}