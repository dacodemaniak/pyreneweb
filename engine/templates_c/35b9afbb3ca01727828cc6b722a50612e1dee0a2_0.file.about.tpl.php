<?php
/* Smarty version 3.1.29, created on 2017-07-31 18:07:40
  from "/mnt/c/webroot/bsp.com/App/Defaut/Index/_templates/about.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_597f55cc0c2c63_50386590',
  'file_dependency' => 
  array (
    '35b9afbb3ca01727828cc6b722a50612e1dee0a2' => 
    array (
      0 => '/mnt/c/webroot/bsp.com/App/Defaut/Index/_templates/about.tpl',
      1 => 1501517246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597f55cc0c2c63_50386590 ($_smarty_tpl) {
?>
	<section id="about" class="row inner-section">
		<header>
			<h2><span>Business</span> & Strategy Partners</h2>
		</header>
		
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
				<div class="col-lg-<?php echo $_smarty_tpl->tpl_vars['index']->value->getBootstrapCols("lg");?>
 col-md-<?php echo $_smarty_tpl->tpl_vars['index']->value->getBootstrapCols("md");?>
 col-sm-<?php echo $_smarty_tpl->tpl_vars['index']->value->getBootstrapCols("sm");?>
 col-xs-<?php echo $_smarty_tpl->tpl_vars['index']->value->getBootstrapCols("xs");?>
">
					<article>
						<header class="<?php echo $_smarty_tpl->tpl_vars['about']->value->value()->cssClass;?>
">
							<h3><i class="glyphicon glyphicon-<?php echo $_smarty_tpl->tpl_vars['about']->value->value()->icon;?>
"></i> <?php echo $_smarty_tpl->tpl_vars['about']->value->value()->subtitle;?>
</h3>
						</header>
					
						<p><?php echo $_smarty_tpl->tpl_vars['about']->value->value()->accroche;?>
</p>
					
					</article>
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
		<footer>
			<a class="btn btn-default btn-lg see-more" role="button" href="/about" title="<?php echo $_smarty_tpl->tpl_vars['site']->value->title;?>
" data-slug="About">
				A propos de nous...
			</a>
		</footer>
	</section><?php }
}
