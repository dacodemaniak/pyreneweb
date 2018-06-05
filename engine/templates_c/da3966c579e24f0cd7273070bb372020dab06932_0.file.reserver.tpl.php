<?php
/* Smarty version 3.1.29, created on 2017-03-22 10:58:15
  from "/mnt/c/webroot/bsp.com/App/Defaut/Index/_templates/reserver.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58d24ab7a31796_53675160',
  'file_dependency' => 
  array (
    'da3966c579e24f0cd7273070bb372020dab06932' => 
    array (
      0 => '/mnt/c/webroot/bsp.com/App/Defaut/Index/_templates/reserver.tpl',
      1 => 1488579224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./aResa.tpl' => 1,
  ),
),false)) {
function content_58d24ab7a31796_53675160 ($_smarty_tpl) {
?>

<div class="container">
	<?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'counter', 0);?>
	<div class="row">
		<div class="col-sm-12 tour-date">
			<i class="glyphicon glyphicon-calendar"></i> <?php echo $_smarty_tpl->tpl_vars['index']->value->getReservation()->getShortStartDate();?>

		</div> 
		<?php
$_from = $_smarty_tpl->tpl_vars['index']->value->getReservation()->getTuiles();
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
			<?php if ($_smarty_tpl->tpl_vars['counter']->value > 3) {?>
				<?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'counter', 0);?>
				</div>	
				<div class="row">
					<div class="col-sm-12 tour-date">
						<i class="glyphicon glyphicon-calendar"></i> <?php echo $_smarty_tpl->tpl_vars['item']->value->value()->tourDate()->format("d-m-Y");?>

					</div>
			<?php }?>
			<section class="tuile col-lg-3 col-md-3 col-sm-6 col-xs-12 <?php if ($_smarty_tpl->tpl_vars['item']->value->value()->pastedTour()) {?> pasted<?php } else {
if ($_smarty_tpl->tpl_vars['item']->value->value()->getNearEndStatus()) {?> near-end<?php }
}?>">
				<div class="inner">
					<header>
						<h3>
							<span class=""><?php echo $_smarty_tpl->tpl_vars['item']->value->value()->tourDate()->format("H:i");?>
</span>
						</h3>
					</header>
		
					<form id="resa_<?php echo $_smarty_tpl->tpl_vars['item']->value->value()->tourDate()->format("dmYHi");?>
" class="form-horizontal">
						<p>Il reste : <span class="badge available_<?php echo $_smarty_tpl->tpl_vars['item']->value->value()->tourDate()->format("dmYHi");?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->value()->dispos();?>
</span> places disponibles</p>
						<div class="form-group">
							<div class="col-sm-6 col-xs-12">
								<label for="places_<?php echo $_smarty_tpl->tpl_vars['item']->value->value()->tourDate()->format("dmYHi");?>
">
									Nombre de places :
								</label>
								<input type="number" value="1" id="places_<?php echo $_smarty_tpl->tpl_vars['item']->value->value()->tourDate()->format("dmYHi");?>
" name="places_<?php echo $_smarty_tpl->tpl_vars['item']->value->value()->tourDate()->format("dmYHi");?>
" placeholder="1" class="form-control wished-places" min="1" max="<?php echo $_smarty_tpl->tpl_vars['item']->value->value()->dispos();?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value->value()->pastedTour()) {?> disabled readonly<?php }?>/>
							</div>
							<div class="col-sm-6 col-xs-12">
								<button type="button" name="valide_<?php echo $_smarty_tpl->tpl_vars['item']->value->value()->tourDate()->format("dmYHi");?>
" class="btn btn-success btn-resa" <?php if ($_smarty_tpl->tpl_vars['item']->value->value()->pastedTour()) {?> disabled<?php }?>>
									<?php if ($_smarty_tpl->tpl_vars['item']->value->value()->pastedTour()) {?> Trop tard !!!<?php } else { ?> Réservez<?php }?>
								</button>
							</div>
						</div>
					</form>
				</div>
			</section>
			<?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_Variable($_smarty_tpl->tpl_vars['counter']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'counter', 0);?>
		<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
	</div>
</div>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./aResa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
