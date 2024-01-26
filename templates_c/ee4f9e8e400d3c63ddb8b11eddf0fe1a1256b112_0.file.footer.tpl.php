<?php
/* Smarty version 4.3.4, created on 2024-01-20 14:17:14
  from 'C:\laragon\www\prueba_noticias\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65abd5ea5debf8_17109937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee4f9e8e400d3c63ddb8b11eddf0fe1a1256b112' => 
    array (
      0 => 'C:\\laragon\\www\\prueba_noticias\\templates\\footer.tpl',
      1 => 1705756720,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65abd5ea5debf8_17109937 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\prueba_noticias\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start mt-4">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            Derechos Reservados &copy; <?php echo smarty_modifier_date_format(time(),"%Y");?>

        </div>
    </footer>
    <!-- Google tag (gtag.js) -->
    
        <?php echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=G-E148DMW595"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-E148DMW595');
        <?php echo '</script'; ?>
>
    
    <!-- jQuery (Necesario para Bootstrap's JavaScript plugins) -->
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="src/js/scripts.js"><?php echo '</script'; ?>
>
    <!-- Bootstrap JS and Popper.js -->
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    <?php echo '</script'; ?>
>
    </body>

</html><?php }
}
