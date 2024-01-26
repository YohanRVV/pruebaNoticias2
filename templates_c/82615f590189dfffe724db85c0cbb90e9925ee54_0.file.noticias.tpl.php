<?php
/* Smarty version 4.3.4, created on 2024-01-19 16:44:32
  from 'C:\laragon\www\prueba_noticias\templates\admin\noticias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65aaa6f046de45_68994773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82615f590189dfffe724db85c0cbb90e9925ee54' => 
    array (
      0 => 'C:\\laragon\\www\\prueba_noticias\\templates\\admin\\noticias.tpl',
      1 => 1705608804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_65aaa6f046de45_68994773 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['noticias']->value, 'noticia');
$_smarty_tpl->tpl_vars['noticia']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['noticia']->value) {
$_smarty_tpl->tpl_vars['noticia']->do_else = false;
?>
                    <tr>
                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['noticia']->value['titulo'];?>
</td>
                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['noticia']->value['periodista_nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['noticia']->value['periodista_apellido'];?>
</td>
                        <td class="text-center">
                            <a href="admin.php?action=edit_noticia&id=<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_noticia'];?>
"
                                class="btn btn-primary">Editar</a>
                            <a href="admin.php?action=delete_noticia&id=<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_noticia'];?>
"
                                onclick="return confirm('¿Estás seguro de querer eliminar esta noticia?');"
                                class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>

    <div class="text-center">
        <a href="admin.php?action=create_noticia" class="btn btn-success">Crear Noticia</a>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
