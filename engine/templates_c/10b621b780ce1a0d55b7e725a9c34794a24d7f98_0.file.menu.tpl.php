<?php
/* Smarty version 3.1.29, created on 2018-01-12 11:44:58
  from "/mnt/c/webroot/tresor-pyrene.dev/App/Common/Menu/_templates/menu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a5891aad85491_35760943',
  'file_dependency' => 
  array (
    '10b621b780ce1a0d55b7e725a9c34794a24d7f98' => 
    array (
      0 => '/mnt/c/webroot/tresor-pyrene.dev/App/Common/Menu/_templates/menu.tpl',
      1 => 1515596201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
  'tpl_function' => 
  array (
    'toUL' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => '/mnt/c/webroot/tresor-pyrene.dev/engine/templates_c/10b621b780ce1a0d55b7e725a9c34794a24d7f98_0.file.menu.tpl.php',
      'uid' => '10b621b780ce1a0d55b7e725a9c34794a24d7f98',
      'call_name' => 'smarty_template_function_toUL_12335652445a5891a7523002_34499679',
    ),
  ),
),false)) {
function content_5a5891aad85491_35760943 ($_smarty_tpl) {
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
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value->getAccountMenu()->getTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('menu'=>$_smarty_tpl->tpl_vars['menu']->value->getAccountMenu()), 0, true);
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
				
				<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'toUL', array('items'=>$_smarty_tpl->tpl_vars['menu']->value->options(),'isChildren'=>false), true);?>

			</div>
		</div>
	</nav>
<?php }
}
/* smarty_template_function_toUL_12335652445a5891a7523002_34499679 */
if (!function_exists('smarty_template_function_toUL_12335652445a5891a7523002_34499679')) {
function smarty_template_function_toUL_12335652445a5891a7523002_34499679($_smarty_tpl,$params) {
$saved_tpl_vars = $_smarty_tpl->tpl_vars;
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value);
}?>
					<ul class="<?php if ($_smarty_tpl->tpl_vars['isChildren']->value) {?>dropdown-menu<?php } else { ?>nav navbar-nav<?php }?>" id="menu">
					<?php $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'var', 0);?>
					
				    	<?php
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
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
				            		<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'toUL', array('items'=>$_smarty_tpl->tpl_vars['item']->value->getChildren(),'isChildren'=>true), true);?>

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
				        	<?php $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable($_smarty_tpl->tpl_vars['var']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'var', 0);?>
				    	<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
					</ul>
				<?php foreach (Smarty::$global_tpl_vars as $key => $value){
if (!isset($_smarty_tpl->tpl_vars[$key]) || $_smarty_tpl->tpl_vars[$key] === $value) $saved_tpl_vars[$key] = $value;
}
$_smarty_tpl->tpl_vars = $saved_tpl_vars;
}
}
/*/ smarty_template_function_toUL_12335652445a5891a7523002_34499679 */
}
