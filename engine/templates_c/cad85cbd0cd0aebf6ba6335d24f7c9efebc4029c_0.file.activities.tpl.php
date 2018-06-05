<?php
/* Smarty version 3.1.29, created on 2017-12-15 10:09:10
  from "/opt/lampp/htdocs/pyrene/App/Page/Index/_templates/activities.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a339136416fd6_97276867',
  'file_dependency' => 
  array (
    'cad85cbd0cd0aebf6ba6335d24f7c9efebc4029c' => 
    array (
      0 => '/opt/lampp/htdocs/pyrene/App/Page/Index/_templates/activities.tpl',
      1 => 1513328856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a339136416fd6_97276867 ($_smarty_tpl) {
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

			</div>
		<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_local_item;
}
if ($__foreach_item_1_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_item;
}
?>
	</div>
	<!-- Controleur du slider -->
	<a class="left carousel-control" href="#activities" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#activities" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>
<?php }
}
