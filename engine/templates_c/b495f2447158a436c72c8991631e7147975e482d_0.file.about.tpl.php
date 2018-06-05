<?php
/* Smarty version 3.1.29, created on 2018-01-12 11:44:59
  from "/mnt/c/webroot/tresor-pyrene.dev/App/Defaut/Index/_templates/about.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a5891abd2a3e3_54412691',
  'file_dependency' => 
  array (
    'b495f2447158a436c72c8991631e7147975e482d' => 
    array (
      0 => '/mnt/c/webroot/tresor-pyrene.dev/App/Defaut/Index/_templates/about.tpl',
      1 => 1515422189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5891abd2a3e3_54412691 ($_smarty_tpl) {
?>
	<div id="about" class="row inner-section">
		<div class="container">

			<!-- Boucle sur les articles concernés About //-->

			<?php
$_from = $_smarty_tpl->tpl_vars['index']->value->getCollection()->get();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_about_0_saved_item = isset($_smarty_tpl->tpl_vars['about']) ? $_smarty_tpl->tpl_vars['about'] : false;
$__foreach_about_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['about'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['about']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['about']->value) {
$_smarty_tpl->tpl_vars['about']->_loop = true;
$__foreach_about_0_saved_local_item = $_smarty_tpl->tpl_vars['about'];
?>
				<div class="desktop hidden-sm hidden-xs">
					<img class="img1 img-responsive" src="./_assets/images/section/3/feuille2.svg">
					<p><?php echo $_smarty_tpl->tpl_vars['about']->value->value()->accroche;?>
</p>
					<img class="img2 " src="./_assets/images/section/3/feuille1.svg">
				</div>
				<div class="hidden-md hidden-lg mobile">
					<img class=" img-responsive" src="./_assets/images/section/3/feuille2.svg">
					<p><?php echo $_smarty_tpl->tpl_vars['about']->value->value()->accroche;?>
</p>
				</div>
			<?php
$_smarty_tpl->tpl_vars['about'] = $__foreach_about_0_saved_local_item;
}
if ($__foreach_about_0_saved_item) {
$_smarty_tpl->tpl_vars['about'] = $__foreach_about_0_saved_item;
}
if ($__foreach_about_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_about_0_saved_key;
}
?>
		</div>

	</div>
<?php }
}
