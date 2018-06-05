<?php
/* Smarty version 3.1.29, created on 2017-12-14 10:44:40
  from "/opt/lampp/htdocs/pyrene/App/Common/Footer/_templates/footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a324808d33d07_32044273',
  'file_dependency' => 
  array (
    '98b15a1170b86e9feb4114ac325d2f8460d29ea4' => 
    array (
      0 => '/opt/lampp/htdocs/pyrene/App/Common/Footer/_templates/footer.tpl',
      1 => 1513244679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a324808d33d07_32044273 ($_smarty_tpl) {
?>

<div id="footer-wrapper" data-region="_main_footer">
	<footer id="main-footer-container" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="container">

		<nav id="main-footer-nav" class="col-lg-offset-2 col-md-offset-2 col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<?php if ($_smarty_tpl->tpl_vars['footer']->value->hasOptions()) {?>
				<h3>Plan du site</h3>
				<ul class="menu top horizontal list-unstyled">
					<?php
$_from = $_smarty_tpl->tpl_vars['footer']->value->options();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_category_0_saved_item = isset($_smarty_tpl->tpl_vars['category']) ? $_smarty_tpl->tpl_vars['category'] : false;
$_smarty_tpl->tpl_vars['category'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['category']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
$__foreach_category_0_saved_local_item = $_smarty_tpl->tpl_vars['category'];
?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['category']->value->toHref();?>
" title="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['category']->value->title);?>
" data-slug="<?php echo $_smarty_tpl->tpl_vars['category']->value->cat_route;?>
" target=<?php echo $_smarty_tpl->tpl_vars['category']->value->target();?>
><?php echo $_smarty_tpl->tpl_vars['category']->value->title;?>
</a></li>
					<?php
$_smarty_tpl->tpl_vars['category'] = $__foreach_category_0_saved_local_item;
}
if ($__foreach_category_0_saved_item) {
$_smarty_tpl->tpl_vars['category'] = $__foreach_category_0_saved_item;
}
?>
				</ul>
			<?php }?>
		</nav>

		<!--  Données de contact -->
		</div>
	</footer>
</div>
<?php }
}
