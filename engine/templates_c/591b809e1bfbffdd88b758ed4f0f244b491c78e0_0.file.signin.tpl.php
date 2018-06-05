<?php
/* Smarty version 3.1.30, created on 2018-02-22 20:20:22
  from "//mnt/c/webroot/tresor-pyrene.dev/App/Page/Inscription/_templates/signin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a8f17f64ac928_44559530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '591b809e1bfbffdd88b758ed4f0f244b491c78e0' => 
    array (
      0 => '//mnt/c/webroot/tresor-pyrene.dev/App/Page/Inscription/_templates/signin.tpl',
      1 => 1519327185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8f17f64ac928_44559530 (Smarty_Internal_Template $_smarty_tpl) {
?>

<article class="article">
	<header>
		<h3><?php echo $_smarty_tpl->tpl_vars['index']->value->getActiveRecord()->title;?>
</h3>
		<h4><?php echo $_smarty_tpl->tpl_vars['index']->value->getActiveRecord()->subtitle;?>
</h4>
	</header>
	<?php echo $_smarty_tpl->tpl_vars['index']->value->getActiveRecord()->accroche;?>

</article><?php }
}
