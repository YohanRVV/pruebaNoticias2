{include file='header.tpl'}

<div class="container mt-4 vh-100">
    <h1>{if $periodista.id_periodista}Editar{else}Crear{/if} Periodista</h1>

    <form action="admin.php?action={if $periodista.id_periodista}update_periodista{else}store_periodista{/if}"
        method="post">
        <input type="hidden" name="id_periodista" value="{$periodista.id_periodista|default:''}">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{$periodista.nombre|default:''}"
                required autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido"
                value="{$periodista.apellido|default:''}" required autocomplete="off">
        </div>
        <button type="submit" class="btn btn-primary">{if $periodista.id_periodista}Actualizar{else}Crear{/if}</button>
    </form>
</div>

{include file='footer.tpl'}