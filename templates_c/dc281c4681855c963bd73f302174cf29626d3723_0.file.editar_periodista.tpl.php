<?php
/* Smarty version 4.3.4, created on 2024-01-19 16:44:37
  from 'C:\laragon\www\prueba_noticias\templates\admin\editar_periodista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65aaa6f54f1048_43611712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc281c4681855c963bd73f302174cf29626d3723' => 
    array (
      0 => 'C:\\laragon\\www\\prueba_noticias\\templates\\admin\\editar_periodista.tpl',
      1 => 1705644744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_65aaa6f54f1048_43611712 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container mt-4 vh-100">
    <h1><?php if ($_smarty_tpl->tpl_vars['periodista']->value['id_periodista']) {?>Editar<?php } else { ?>Crear<?php }?> Periodista</h1>

    <form action="admin.php?action=<?php if ($_smarty_tpl->tpl_vars['periodista']->value['id_periodista']) {?>update_periodista<?php } else { ?>store_periodista<?php }?>"
        method="post">
        <input type="hidden" name="id_periodista" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['periodista']->value['id_periodista'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['periodista']->value['nombre'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"
                required autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido"
                value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['periodista']->value['apellido'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" required autocomplete="off">
        </div>
        <button type="submit" class="btn btn-primary"><?php if ($_smarty_tpl->tpl_vars['periodista']->value['id_periodista']) {?>Actualizar<?php } else { ?>Crear<?php }?></button>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
