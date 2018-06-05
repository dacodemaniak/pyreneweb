<?php
/* Smarty version 3.1.29, created on 2018-01-12 11:44:59
  from "/mnt/c/webroot/tresor-pyrene.dev/App/Common/Menu/_templates/AccountMenu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a5891ab725cd6_35380779',
  'file_dependency' => 
  array (
    'fb8f9e27f6ae352a106408fee8f008b6472210e5' => 
    array (
      0 => '/mnt/c/webroot/tresor-pyrene.dev/App/Common/Menu/_templates/AccountMenu.tpl',
      1 => 1515594423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5891ab725cd6_35380779 ($_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['menu']->value->hasOptions()) {?>
	<div class="col-lg-6 col-md-10 hidden-sm hidden-xs menu-center">
		<ul class="nav nav-pills nav-justified typo-type-1">
			<?php
$_from = $_smarty_tpl->tpl_vars['menu']->value->options();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_option_0_saved_item = isset($_smarty_tpl->tpl_vars['option']) ? $_smarty_tpl->tpl_vars['option'] : false;
$_smarty_tpl->tpl_vars['option'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['option']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
$__foreach_option_0_saved_local_item = $_smarty_tpl->tpl_vars['option'];
?>
				<li id="optionMenu">
					<p>
						<i class="<?php echo $_smarty_tpl->tpl_vars['option']->value->icon;?>
" aria-hidden="true"></i>
						 
						<?php if ($_smarty_tpl->tpl_vars['option']->value->menutitle == "Mon panier") {?>
							<a id=basket href="<?php echo $_smarty_tpl->tpl_vars['option']->value->toHref();?>
" ><?php echo $_smarty_tpl->tpl_vars['option']->value->menutitle;?>
 <span class="quantite" data-content="0">(0)</span></a>							
						<?php } else { ?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['option']->value->toHref();?>
" ><?php echo $_smarty_tpl->tpl_vars['option']->value->menutitle;?>
</a>
						<?php }?>
					</p>
				</li>
			<?php
$_smarty_tpl->tpl_vars['option'] = $__foreach_option_0_saved_local_item;
}
if ($__foreach_option_0_saved_item) {
$_smarty_tpl->tpl_vars['option'] = $__foreach_option_0_saved_item;
}
?>
			<li id="optionMenu">
				<a href="/">       
					<i class="fa fa-home primary-color-text" aria-hidden="true" ></i>
				</a>
			</li>
			<li>
				<!-- bouton test <button class="addToBasket">Ajouter l'article</button> //-->
				
			</li>
		</ul>
	</div>
<?php }
}
}
