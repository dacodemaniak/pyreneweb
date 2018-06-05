<?php
/* Smarty version 3.1.29, created on 2017-07-28 16:35:35
  from "/mnt/c/webroot/bsp.com/App/Common/Footer/_templates/footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_597b4bb7c396c5_35704577',
  'file_dependency' => 
  array (
    '81936892c7d00bd1c3181d8c28d26d5b773edecf' => 
    array (
      0 => '/mnt/c/webroot/bsp.com/App/Common/Footer/_templates/footer.tpl',
      1 => 1501252096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597b4bb7c396c5_35704577 ($_smarty_tpl) {
?>

<div id="footer-wrapper" data-region="_main_footer">
	<footer id="main-footer-container" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="container">
		<aside class="col-lg-offset-1 col-md-offset-1 col-lg-3 col-md-3 hidden-sm hidden-xs">
			<img src="/_assets/images/identite.png" alt="<?php echo $_smarty_tpl->tpl_vars['site']->value->description;?>
" class="img-responsive" />
		</aside>
		
		<nav id="main-footer-nav" class="col-lg-offset-1 col-md-offset-1 col-lg-3 col-md-3 col-sm-6 col-xs-12">
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
		<address id="footer-address" class="col-lg-offset-1 col-md-offset-1 col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<h3><?php echo $_smarty_tpl->tpl_vars['footer']->value->adresse()->title;?>
</h3>
			<ul itemtype="http://schema.org/Person" class="list-unstyled">
				<li itemprop="name"><?php echo $_smarty_tpl->tpl_vars['footer']->value->adresse()->name;?>
</li>
				<li itemprop="telephone"><?php echo $_smarty_tpl->tpl_vars['footer']->value->adresse()->getTelephone("label");?>
 : <a href="tel:<?php echo $_smarty_tpl->tpl_vars['footer']->value->adresse()->getTelephone("value");?>
"><?php echo $_smarty_tpl->tpl_vars['footer']->value->adresse()->getTelephone("value");?>
</a></li>
				<li itemprop="telephone"><?php echo $_smarty_tpl->tpl_vars['footer']->value->adresse()->getFixe("label");?>
 : <a href="tel:<?php echo $_smarty_tpl->tpl_vars['footer']->value->adresse()->getFixe("value");?>
"><?php echo $_smarty_tpl->tpl_vars['footer']->value->adresse()->getFixe("value");?>
</a></li>
				<li itemprop="email"><?php echo $_smarty_tpl->tpl_vars['footer']->value->adresse()->getMail("label");?>
 : <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['footer']->value->adresse()->getMail("value");?>
"><?php echo $_smarty_tpl->tpl_vars['footer']->value->adresse()->getMail("legende");?>
</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['footer']->value->adresse()->getFacebook("link");?>
" title="<?php echo $_smarty_tpl->tpl_vars['footer']->value->adresse()->getFacebook("label");?>
" target="_new"><img src="/_assets/images/<?php echo $_smarty_tpl->tpl_vars['footer']->value->adresse()->getFacebook("icon");?>
" alt="<?php echo $_smarty_tpl->tpl_vars['site']->value->title;?>
" /></a>
			</ul>
		</address>
		</div>
	</footer>
</div><?php }
}
