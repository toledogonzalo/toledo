<?php
/* Smarty version 3.1.32, created on 2018-08-05 15:50:48
  from '/var/www/html/backoffice/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b675518230477_42600220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd674251befdc86c6624e882d15c7276f7b73d177' => 
    array (
      0 => '/var/www/html/backoffice/themes/new-theme/template/content.tpl',
      1 => 1532446063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b675518230477_42600220 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
