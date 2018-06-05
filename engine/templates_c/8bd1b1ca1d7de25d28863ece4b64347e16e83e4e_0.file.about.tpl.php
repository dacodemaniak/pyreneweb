<?php
/* Smarty version 3.1.29, created on 2017-12-15 10:09:10
  from "/opt/lampp/htdocs/pyrene/App/Page/Index/_templates/about.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a339136434c31_99160857',
  'file_dependency' => 
  array (
    '8bd1b1ca1d7de25d28863ece4b64347e16e83e4e' => 
    array (
      0 => '/opt/lampp/htdocs/pyrene/App/Page/Index/_templates/about.tpl',
      1 => 1513328856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a339136434c31_99160857 ($_smarty_tpl) {
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
