<?php
/* Smarty version 3.1.29, created on 2017-07-28 15:58:51
  from "/mnt/c/webroot/bsp.com/App/Defaut/Index/_templates/activities.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_597b431b82d7a3_25987938',
  'file_dependency' => 
  array (
    '30f336e621e55c7b00d16d35fb320bf3a888bc5d' => 
    array (
      0 => '/mnt/c/webroot/bsp.com/App/Defaut/Index/_templates/activities.tpl',
      1 => 1501250320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597b431b82d7a3_25987938 ($_smarty_tpl) {
?>



<div id="activities" class="carousel slide" data-ride="carousel" data-interval="6000">
	<!-- Indicateurs nécessaires pour l'affichage des images -->
	<ol class="carousel-indicators">
		<?php
$_from = $_smarty_tpl->tpl_vars['index']->value->getCollection();
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
			<li <?php if ($_smarty_tpl->tpl_vars['index']->value->getCollection()->getIndice() == 0) {?> class="active"<?php }?> data-target="#activities" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['index']->value->getCollection()->getIndice();?>
"></li>
		<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
	</ol>
	
	<!-- Conteneur des slides eux-même //-->
	<div class="carousel-inner" role="listbox">
		<?php
$_from = $_smarty_tpl->tpl_vars['index']->value->getCollection();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_1_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_1_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
			<div class="item <?php if ($_smarty_tpl->tpl_vars['index']->value->getCollection()->getIndice() == 0) {?> active<?php }?>">
				<img src="./_assets/images/slider/<?php echo $_smarty_tpl->tpl_vars['item']->value->image;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->pagetitle;?>
" />
				<div class="carousel-caption animated fadeInUpBig">
					<?php echo $_smarty_tpl->tpl_vars['item']->value->abstract;?>

					<a href="#" class="btn btn-default more" role="button" title="<?php echo $_smarty_tpl->tpl_vars['item']->value->pagetitle;?>
 - En savoir plus">Découvrez notre offre <i class="glyphicon glyphicon-share-alt"></i></a>
				</div>
			</div>
		<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_local_item;
}
if ($__foreach_item_1_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_item;
}
?>
	</div>
</div>
<?php }
}
