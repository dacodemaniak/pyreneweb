<?php
/* Smarty version 3.1.30, created on 2018-02-03 10:02:56
  from "//mnt/c/webroot/tresor-pyrene.dev/App/Defaut/Index/_templates/about.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a757ac0970fa6_10281279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8b57cbfc8b2fe40834193a0d883397791af387f' => 
    array (
      0 => '//mnt/c/webroot/tresor-pyrene.dev/App/Defaut/Index/_templates/about.tpl',
      1 => 1516973852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a757ac0970fa6_10281279 (Smarty_Internal_Template $_smarty_tpl) {
?>
	<div id="about" class="row inner-section">
		<div class="container">

			<!-- Boucle sur les articles concernés About //-->

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['index']->value->getCollection()->get(), 'about', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['about']->value) {
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
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</div>

	</div>
<?php }
}
