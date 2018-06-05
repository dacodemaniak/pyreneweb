<?php
/* Smarty version 3.1.29, created on 2017-12-21 15:00:21
  from "/opt/lampp/htdocs/pyrene/App/Common/Menu/_templates/menu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a3bbe7547fa86_17658234',
  'file_dependency' => 
  array (
    '3be2152c0c796637a566edc3d963a680391a95c4' => 
    array (
      0 => '/opt/lampp/htdocs/pyrene/App/Common/Menu/_templates/menu.tpl',
      1 => 1513864817,
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
      'compiled_filepath' => '/opt/lampp/htdocs/pyrene/engine/templates_c/3be2152c0c796637a566edc3d963a680391a95c4_0.file.menu.tpl.php',
      'uid' => '3be2152c0c796637a566edc3d963a680391a95c4',
      'call_name' => 'smarty_template_function_toUL_17875717355a3bbe753b1028_69621408',
    ),
  ),
),false)) {
function content_5a3bbe7547fa86_17658234 ($_smarty_tpl) {
?>

<div class="container">
	 <div class="logo col-lg-2 col-md-2 hidden-sm hidden-xs">
		<img class="img-responsive" src="/_assets/images/logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['site']->value->description;?>
" class="" />
	</div>

	 <div class="col-lg-4 col-md-4 hidden-sm hidden-xs">
		<form class="navbar-form navbar-left" role="search">
		  <div class="form-group">
		    <input type="text" class="form-control">
		  </div>
		  <button type="submit" class="btn btn-default">ok</button>
		</form>
	</div>

	<div class="col-lg-6 col-md-6 hidden-sm hidden-xs menu-center">
		<ul class="nav nav-pills nav-justified typo-type-1">
			<li>
				<p><i class="glyphicon glyphicon-user" aria-hidden="true"></i> mon compte </p>
			</li>
			<li>
				<p><i class="fa fa-shopping-basket" aria-hidden="true"></i> mon panier</p>
			</li>
			<li>
				<p><i class="fa fa-at" aria-hidden="true"></i> contact</p>
			</li>
			<li>
				<i class="fa fa-home primary-color-text" aria-hidden="true"></i>
			</li>
		</ul>
	</div>
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
/* smarty_template_function_toUL_17875717355a3bbe753b1028_69621408 */
if (!function_exists('smarty_template_function_toUL_17875717355a3bbe753b1028_69621408')) {
function smarty_template_function_toUL_17875717355a3bbe753b1028_69621408($_smarty_tpl,$params) {
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
/*/ smarty_template_function_toUL_17875717355a3bbe753b1028_69621408 */
}
