<?php
/* Smarty version 3.1.29, created on 2017-07-28 12:44:58
  from "/mnt/c/webroot/bsp.com/App/Common/Menu/_templates/menu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_597b15aa40e896_75516235',
  'file_dependency' => 
  array (
    '3b2fb9779583dcdd0f875929b847e7f9a0e24772' => 
    array (
      0 => '/mnt/c/webroot/bsp.com/App/Common/Menu/_templates/menu.tpl',
      1 => 1501238687,
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
      'compiled_filepath' => '/mnt/c/webroot/bsp.com/engine/templates_c/3b2fb9779583dcdd0f875929b847e7f9a0e24772_0.file.menu.tpl.php',
      'uid' => '3b2fb9779583dcdd0f875929b847e7f9a0e24772',
      'call_name' => 'smarty_template_function_toUL_695841080597b15a7455e49_55001999',
    ),
  ),
),false)) {
function content_597b15aa40e896_75516235 ($_smarty_tpl) {
?>

<div class="logo col-lg-3 col-md-3 hidden-sm hidden-xs">
	<img src="/_assets/images/identite.png" alt="<?php echo $_smarty_tpl->tpl_vars['site']->value->description;?>
" class="" />
</div>

<h1 class="titre col-lg-9 col-md-9 hidden-sm hidden-xs pull-right">
	<?php echo $_smarty_tpl->tpl_vars['site']->value->slogan;?>

</h1>
			
<?php if ($_smarty_tpl->tpl_vars['menu']->value->hasOptions()) {?>
	<nav class="topnav navbar navbar-default col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="container-fluid">
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
		
			<div class="collapse navbar-collapse" id="main-menu">
				
				<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'toUL', array('items'=>$_smarty_tpl->tpl_vars['menu']->value->options(),'isChildren'=>false), true);?>

			</div>
		</div>
	</nav>
<?php }
}
/* smarty_template_function_toUL_695841080597b15a7455e49_55001999 */
if (!function_exists('smarty_template_function_toUL_695841080597b15a7455e49_55001999')) {
function smarty_template_function_toUL_695841080597b15a7455e49_55001999($_smarty_tpl,$params) {
$saved_tpl_vars = $_smarty_tpl->tpl_vars;
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value);
}?>
					<ul class="<?php if ($_smarty_tpl->tpl_vars['isChildren']->value) {?>dropdown-menu<?php } else { ?>nav navbar-nav<?php }?>">
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
				        		<li class="dropdown">
				        			<a href="#" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['stripTags'][0][0]->stripTags($_smarty_tpl->tpl_vars['item']->value->title);?>
" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				        				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['stripTags'][0][0]->stripTags($_smarty_tpl->tpl_vars['item']->value->menutitle);?>

				        				<span class="caret"></span>
				        			</a>
				            		<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'toUL', array('items'=>$_smarty_tpl->tpl_vars['item']->value->getChildren(),'isChildren'=>true), true);?>

				            	</li>
				        	<?php } else { ?>
				        		<li>
									<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value->toHref();?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['stripTags'][0][0]->stripTags($_smarty_tpl->tpl_vars['item']->value->title);?>
" data-slug="<?php echo $_smarty_tpl->tpl_vars['item']->value->cat_route;?>
" class="<?php if ($_smarty_tpl->tpl_vars['item']->value->isActiveCategory()) {?>active<?php }?>" target="_self">
				        				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['stripTags'][0][0]->stripTags($_smarty_tpl->tpl_vars['item']->value->menutitle);?>

				        			</a>
				        		</li>
				        	<?php }?>
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
/*/ smarty_template_function_toUL_695841080597b15a7455e49_55001999 */
}
