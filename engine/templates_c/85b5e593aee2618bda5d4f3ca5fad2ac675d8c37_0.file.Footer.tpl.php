<?php
/* Smarty version 3.1.30, created on 2018-03-03 11:22:48
  from "//mnt/c/webroot/tresor-pyrene.dev/App/Common/Footer/_templates/Footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9a77787056c3_60524040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85b5e593aee2618bda5d4f3ca5fad2ac675d8c37' => 
    array (
      0 => '//mnt/c/webroot/tresor-pyrene.dev/App/Common/Footer/_templates/Footer.tpl',
      1 => 1520072474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9a77787056c3_60524040 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div id="footerMenu">
	<ul class="listFooter">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['footer']->value->getFooterInfo()->options(), 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?>
			<li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['option']->value->toHref();?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value->menutitle;?>
</a>
			</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ul>
	<ul class="listFooter my-account-menu not-active">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['footer']->value->getMenuCompte()->options(), 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?>
			<li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['option']->value->toHref();?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value->menutitle;?>
</a>
			</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ul>
	<ul class="listFooter">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['footer']->value->getMenuQui()->options(), 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?>
			<li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['option']->value->toHref();?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value->menutitle;?>
</a>
			</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ul>
</div><?php }
}
