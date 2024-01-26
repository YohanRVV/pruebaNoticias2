<?php
/* Smarty version 4.3.4, created on 2024-01-19 16:44:35
  from 'C:\laragon\www\prueba_noticias\templates\admin\periodistas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65aaa6f3a66220_48204468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd61fb70ee237627b2c10fec2b0bd9a3902f6fe03' => 
    array (
      0 => 'C:\\laragon\\www\\prueba_noticias\\templates\\admin\\periodistas.tpl',
      1 => 1705608816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_65aaa6f3a66220_48204468 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['periodistas']->value, 'periodista');
$_smarty_tpl->tpl_vars['periodista']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['periodista']->value) {
$_smarty_tpl->tpl_vars['periodista']->do_else = false;
?>
                    <tr>
                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['periodista']->value['nombre'];?>
</td>
                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['periodista']->value['apellido'];?>
</td>
                        <td class="text-center">
                            <a href="admin.php?action=edit_periodista&id=<?php echo $_smarty_tpl->tpl_vars['periodista']->value['id_periodista'];?>
"
                                class="btn btn-primary">Editar</a>
                            <a href="admin.php?action=delete_periodista&id=<?php echo $_smarty_tpl->tpl_vars['periodista']->value['id_periodista'];?>
"
                                onclick="return confirm('¿Estás seguro?')" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
    <!-- Botón "Crear Periodista" fuera de la tabla -->
    <div class="text-center">
        <a href="admin.php?action=create_periodista" class="btn btn-success">Crear Periodista</a>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
