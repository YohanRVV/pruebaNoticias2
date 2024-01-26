{include file='header.tpl'}

<div class="container mt-4 vh-100">
    <h1 class="text-center mb-5">Periodistas</h1>
    <!-- Agrega la clase "table-responsive" para hacer la tabla responsiva en dispositivos pequeños -->
    <div class="table-responsive">
        <!-- Agrega la clase "table-bordered" para el borde alrededor de la tabla -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Apellido</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$periodistas item=periodista}
                    <tr>
                        <td class="text-center">{$periodista.nombre}</td>
                        <td class="text-center">{$periodista.apellido}</td>
                        <td class="text-center">
                            <a href="admin.php?action=edit_periodista&id={$periodista.id_periodista}"
                                class="btn btn-primary">Editar</a>
                            <a href="admin.php?action=delete_periodista&id={$periodista.id_periodista}"
                                onclick="return confirm('¿Estás seguro?')" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
    <!-- Botón "Crear Periodista" fuera de la tabla -->
    <div class="text-center">
        <a href="admin.php?action=create_periodista" class="btn btn-success">Crear Periodista</a>
    </div>
</div>

{include file='footer.tpl'}