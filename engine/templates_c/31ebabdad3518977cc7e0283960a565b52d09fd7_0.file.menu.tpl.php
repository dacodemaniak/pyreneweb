<?php
/* Smarty version 3.1.30, created on 2018-01-12 14:15:15
  from "//mnt/c/webroot/tresor-pyrene.dev/App/Common/Menu/_templates/menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a58b4e307e451_86072517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31ebabdad3518977cc7e0283960a565b52d09fd7' => 
    array (
      0 => '//mnt/c/webroot/tresor-pyrene.dev/App/Common/Menu/_templates/menu.tpl',
      1 => 1515596201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a58b4e307e451_86072517 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'toUL' => 
  array (
    'compiled_filepath' => '/mnt/c/webroot/tresor-pyrene.dev/engine/templates_c/31ebabdad3518977cc7e0283960a565b52d09fd7_0.file.menu.tpl.php',
    'uid' => '31ebabdad3518977cc7e0283960a565b52d09fd7',
    'call_name' => 'smarty_template_function_toUL_7686664665a58b4da797d45_70532043',
  ),
));
?>

<div class="container">
	 <div class="logo col-lg-2 col-md-2 hidden-sm hidden-xs" id="logoHeader">
		<img onclick="homePage()" class="img-responsive" src="/_assets/images/logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['site']->value->description;?>
" class="" />
	</div>

	 <div class="col-lg-3 col-md-4 hidden-sm hidden-xs">
		<form class="navbar-form navbar-left" role="search">
		  <div class="form-group">
		    <input type="text" class="form-control" id="searchBar">
		  </div>
		  <button type="submit" class="btn btn-default" id="boutonSearch">ok</button>
		</form>
	</div>
	
	<!-- Sous-menu : options Mon Compte, Panier, Contact //-->
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['menu']->value->getAccountMenu()->getTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('menu'=>$_smarty_tpl->tpl_vars['menu']->value->getAccountMenu()), 0, true);
?>

	
</div>
<?php if ($_smarty_tpl->tpl_vars['menu']->value->hasOptions()) {?>
	<nav class="topnav navbar navbar-default col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div>
			<!-- En-tête du menu //-->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
	        		<span class="sr-only">Afficher / Masquer</span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	      		</button>
	      		<!-- <a class="navbar-brand hidden-sm hidden-xs"><img src="/_assets/images/identite.png" alt="<?php echo $_smarty_tpl->tpl_vars['site']->value->description;?>
" class="" /></a> -->
			</div>

			<div class="collapse navbar-collapse " id="main-menu">
				
				<?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'toUL', array('items'=>$_smarty_tpl->tpl_vars['menu']->value->options(),'isChildren'=>false), true);?>

			</div>
		</div>
	</nav>
<?php }
}
/* smarty_template_function_toUL_7686664665a58b4da797d45_70532043 */
if (!function_exists('smarty_template_function_toUL_7686664665a58b4da797d45_70532043')) {
function smarty_template_function_toUL_7686664665a58b4da797d45_70532043($_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>
					<ul class="<?php if ($_smarty_tpl->tpl_vars['isChildren']->value) {?>dropdown-menu<?php } else { ?>nav navbar-nav<?php }?>" id="menu">
					<?php $_smarty_tpl->_assignInScope('var', 0);
?>
					
				    	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
				        	<?php if ($_smarty_tpl->tpl_vars['item']->value->hasChildren()) {?>
				        		<li class="dropdown" data-children="ss_menu-<?php echo $_smarty_tpl->tpl_vars['var']->value;?>
">
				        			<a href="#" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['stripTags'][0][0]->stripTags($_smarty_tpl->tpl_vars['item']->value->title);?>
" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				        				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['stripTags'][0][0]->stripTags($_smarty_tpl->tpl_vars['item']->value->menutitle);?>

				        				<span class="caret"></span>
				        			</a>
				        			<ul id="ss_menu-<?php echo $_smarty_tpl->tpl_vars['var']->value;?>
" class="sous-menu">
							            <li class="sub-nav-item"><a href="#">Petits machins</a></li>
							            <li class="sub-nav-item"><a href="#">Gros machins</a></li>
							        </ul>
				            		<?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'toUL', array('items'=>$_smarty_tpl->tpl_vars['item']->value->getChildren(),'isChildren'=>true), true);?>

				            	</li>
				        	<?php } else { ?>
				        		<li data-children="ss_menu-<?php echo $_smarty_tpl->tpl_vars['var']->value;?>
">
									<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value->toHref();?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['stripTags'][0][0]->stripTags($_smarty_tpl->tpl_vars['item']->value->title);?>
" data-slug="<?php echo $_smarty_tpl->tpl_vars['item']->value->cat_route;?>
" class="<?php if ($_smarty_tpl->tpl_vars['item']->value->isActiveCategory()) {?>active<?php }?>" target="_self">
				        				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['stripTags'][0][0]->stripTags($_smarty_tpl->tpl_vars['item']->value->menutitle);?>

				        			</a>
				        			<ul id="ss_menu-<?php echo $_smarty_tpl->tpl_vars['var']->value;?>
" class="sous-menu">
							            <li class="sub-nav-item"><a href="#">Petits machins</a></li>
							            <li class="sub-nav-item"><a href="#">Gros machins</a></li>
							        </ul>
				        		</li>
				        	<?php }?>
				        	<?php $_smarty_tpl->_assignInScope('var', $_smarty_tpl->tpl_vars['var']->value+1);
?>
				    	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</ul>
				<?php
}}
/*/ smarty_template_function_toUL_7686664665a58b4da797d45_70532043 */
}
