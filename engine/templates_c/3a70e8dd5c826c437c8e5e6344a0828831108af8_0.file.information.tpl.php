<?php
/* Smarty version 3.1.29, created on 2017-12-15 10:09:10
  from "/opt/lampp/htdocs/pyrene/App/Page/Index/_templates/information.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a3391364307d8_08977679',
  'file_dependency' => 
  array (
    '3a70e8dd5c826c437c8e5e6344a0828831108af8' => 
    array (
      0 => '/opt/lampp/htdocs/pyrene/App/Page/Index/_templates/information.tpl',
      1 => 1513328856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3391364307d8_08977679 ($_smarty_tpl) {
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
