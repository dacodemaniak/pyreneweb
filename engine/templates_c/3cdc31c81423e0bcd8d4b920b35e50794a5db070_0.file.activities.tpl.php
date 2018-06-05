<?php
/* Smarty version 3.1.30, created on 2018-01-12 14:17:18
  from "//mnt/c/webroot/tresor-pyrene.dev/App/Defaut/Index/_templates/activities.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a58b55eb74ed5_56711202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cdc31c81423e0bcd8d4b920b35e50794a5db070' => 
    array (
      0 => '//mnt/c/webroot/tresor-pyrene.dev/App/Defaut/Index/_templates/activities.tpl',
      1 => 1513249665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a58b55eb74ed5_56711202 (Smarty_Internal_Template $_smarty_tpl) {
?>





<div id="activities" class="carousel slide" data-ride="carousel" data-interval="6000">
	<!-- Indicateurs nécessaires pour l'affichage des images -->
	<ol class="carousel-indicators">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['index']->value->getCollection(), 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
			<li <?php if ($_smarty_tpl->tpl_vars['index']->value->getCollection()->getIndice() == 0) {?> class="active"<?php }?> data-target="#activities" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['index']->value->getCollection()->getIndice();?>
"></li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ol>

	<!-- Conteneur des slides eux-même //-->
	<div class="carousel-inner" role="listbox">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['index']->value->getCollection(), 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
			<div class="item <?php if ($_smarty_tpl->tpl_vars['index']->value->getCollection()->getIndice() == 0) {?> active<?php }?>">
				<img src="./_assets/images/slider/<?php echo $_smarty_tpl->tpl_vars['item']->value->image;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->pagetitle;?>
" />

			</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
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
