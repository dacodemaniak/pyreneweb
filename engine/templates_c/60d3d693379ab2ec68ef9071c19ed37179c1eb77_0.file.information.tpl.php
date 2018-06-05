<?php
/* Smarty version 3.1.30, created on 2018-01-12 14:17:23
  from "//mnt/c/webroot/tresor-pyrene.dev/App/Defaut/Index/_templates/information.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a58b563bbe1a8_84934820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60d3d693379ab2ec68ef9071c19ed37179c1eb77' => 
    array (
      0 => '//mnt/c/webroot/tresor-pyrene.dev/App/Defaut/Index/_templates/information.tpl',
      1 => 1513178830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a58b563bbe1a8_84934820 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="information" class="row inner-section">

  <div class="container">

    <!-- Boucle sur les articles concernés About //-->

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['index']->value->getCollection()->get(), 'information', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['information']->value) {
?>
      <div class="col-lg-<?php echo $_smarty_tpl->tpl_vars['index']->value->getBootstrapCols("lg");?>
 col-md-<?php echo $_smarty_tpl->tpl_vars['index']->value->getBootstrapCols("md");?>
 col-sm-<?php echo $_smarty_tpl->tpl_vars['index']->value->getBootstrapCols("sm");?>
 col-xs-<?php echo $_smarty_tpl->tpl_vars['index']->value->getBootstrapCols("xs");?>
 <?php echo $_smarty_tpl->tpl_vars['information']->value->value()->cssClass;?>
">
        <div >
          <i class="<?php echo $_smarty_tpl->tpl_vars['information']->value->value()->icon;?>
"></i>
          <p><?php echo $_smarty_tpl->tpl_vars['information']->value->value()->accroche;?>
</p>
        </div>
      </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </div>
</section>
<?php }
}
