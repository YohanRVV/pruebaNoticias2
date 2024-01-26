<?php
/* Smarty version 4.3.4, created on 2024-01-26 15:41:42
  from 'C:\laragon\www\prueba_noticias\templates\admin\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65b3d2b6c26918_77057689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86d0a359cc04645bf64bf42d46abecc6301e2dd3' => 
    array (
      0 => 'C:\\laragon\\www\\prueba_noticias\\templates\\admin\\home.tpl',
      1 => 1706283698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_65b3d2b6c26918_77057689 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container mt-4">
    <div class="mb-3">
        <label for="periodistaSelect" class="form-label">Seleccione un Periodista:</label>
        <select id="periodistaSelect" class="form-select" onchange="filtrarNoticiasPorPeriodista()">
            <option value="">Todos los periodistas</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['periodistas']->value, 'periodista');
$_smarty_tpl->tpl_vars['periodista']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['periodista']->value) {
$_smarty_tpl->tpl_vars['periodista']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['periodista']->value['id_periodista'];?>
"><?php echo $_smarty_tpl->tpl_vars['periodista']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['periodista']->value['apellido'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
