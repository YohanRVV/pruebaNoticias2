<?php
/* Smarty version 4.3.4, created on 2024-01-19 16:50:58
  from 'C:\laragon\www\prueba_noticias\templates\admin\editar_noticia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65aaa872bd5147_97762266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e48c290653c35ff5bab7b09730c796fdcf6400fd' => 
    array (
      0 => 'C:\\laragon\\www\\prueba_noticias\\templates\\admin\\editar_noticia.tpl',
      1 => 1705644729,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_65aaa872bd5147_97762266 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container mt-4 vh-100">
    <h1><?php if ($_smarty_tpl->tpl_vars['noticia']->value['id_noticia']) {?>Editar<?php } else { ?>Crear<?php }?> Noticia</h1>

    <form action="admin.php?action=<?php if ($_smarty_tpl->tpl_vars['noticia']->value['id_noticia']) {?>update_noticia<?php } else { ?>store_noticia<?php }?>" method="post"
        enctype="multipart/form-data">
        <input type="hidden" name="id_noticia" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['noticia']->value['id_noticia'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
        <div class="mb-3">
            <label for="titulo" class="form-label">Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['noticia']->value['titulo'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"
                required autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="contenido" class="form-label">Contenido:</label>
            <textarea class="form-control" id="contenido" name="contenido" rows="5" required
                autocomplete="off"><?php echo (($tmp = $_smarty_tpl->tpl_vars['noticia']->value['contenido'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</textarea>
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen:</label>
            <input type="file" class="form-control" id="imagen" name="imagen">
        </div>
        <div class="mb-3">
            <label for="id_periodista" class="form-label">Periodista:</label>
            <select class="form-select" id="id_periodista" name="id_periodista" required>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['periodistas']->value, 'periodista');
$_smarty_tpl->tpl_vars['periodista']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['periodista']->value) {
$_smarty_tpl->tpl_vars['periodista']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['periodista']->value['id_periodista'];?>
"
                        <?php if ($_smarty_tpl->tpl_vars['periodista']->value['id_periodista'] == $_smarty_tpl->tpl_vars['noticia']->value['id_periodista']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['periodista']->value['nombre'];?>

                        <?php echo $_smarty_tpl->tpl_vars['periodista']->value['apellido'];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary"><?php if ($_smarty_tpl->tpl_vars['noticia']->value['id_noticia']) {?>Actualizar<?php } else { ?>Crear<?php }?></button>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
