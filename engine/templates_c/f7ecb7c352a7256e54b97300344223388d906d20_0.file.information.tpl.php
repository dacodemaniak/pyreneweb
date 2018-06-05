<?php
/* Smarty version 3.1.29, created on 2018-01-08 14:49:51
  from "/mnt/c/webroot/tresor-pyrene.dev/App/Defaut/Index/_templates/information.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a5376ffb8afe7_87041667',
  'file_dependency' => 
  array (
    'f7ecb7c352a7256e54b97300344223388d906d20' => 
    array (
      0 => '/mnt/c/webroot/tresor-pyrene.dev/App/Defaut/Index/_templates/information.tpl',
      1 => 1513178830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5376ffb8afe7_87041667 ($_smarty_tpl) {
?>
<section id="information" class="row inner-section">

  <div class="container">

    <!-- Boucle sur les articles concernés About //-->

    <?php
$_from = $_smarty_tpl->tpl_vars['index']->value->getCollection()->get();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_information_0_saved_item = isset($_smarty_tpl->tpl_vars['information']) ? $_smarty_tpl->tpl_vars['information'] : false;
$__foreach_information_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['information'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['information']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['information']->value) {
$_smarty_tpl->tpl_vars['information']->_loop = true;
$__foreach_information_0_saved_local_item = $_smarty_tpl->tpl_vars['information'];
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
$_smarty_tpl->tpl_vars['information'] = $__foreach_information_0_saved_local_item;
}
if ($__foreach_information_0_saved_item) {
$_smarty_tpl->tpl_vars['information'] = $__foreach_information_0_saved_item;
}
if ($__foreach_information_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_information_0_saved_key;
}
?>
  </div>
</section>
<?php }
}
