<?php
/* Smarty version 3.1.32, created on 2018-08-05 15:50:50
  from '/var/www/html/backoffice/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b67551adf7ad5_66426953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd637e03c498a367e1605114b0e1e5431af7048a8' => 
    array (
      0 => '/var/www/html/backoffice/themes/default/template/content.tpl',
      1 => 1532446063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b67551adf7ad5_66426953 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
