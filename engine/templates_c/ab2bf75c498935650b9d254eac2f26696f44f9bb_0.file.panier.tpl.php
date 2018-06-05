<?php
/* Smarty version 3.1.29, created on 2017-12-22 11:22:59
  from "/opt/lampp/htdocs/pyrene/App/Page/Panier/_templates/panier.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a3cdd030a2a95_24692040',
  'file_dependency' => 
  array (
    'ab2bf75c498935650b9d254eac2f26696f44f9bb' => 
    array (
      0 => '/opt/lampp/htdocs/pyrene/App/Page/Panier/_templates/panier.tpl',
      1 => 1513864603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3cdd030a2a95_24692040 ($_smarty_tpl) {
?>


    <div class="container ">
        <!-- Boucle sur les articles concernés panier //-->
        <?php
$_from = $_smarty_tpl->tpl_vars['index']->value->getCollection()->get();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_panier_0_saved_item = isset($_smarty_tpl->tpl_vars['panier']) ? $_smarty_tpl->tpl_vars['panier'] : false;
$__foreach_panier_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['panier'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['panier']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['panier']->value) {
$_smarty_tpl->tpl_vars['panier']->_loop = true;
$__foreach_panier_0_saved_local_item = $_smarty_tpl->tpl_vars['panier'];
?>
            <h2 class="text-left"><?php echo $_smarty_tpl->tpl_vars['panier']->value->value()->name;?>
</h2>        

        <?php
$_smarty_tpl->tpl_vars['panier'] = $__foreach_panier_0_saved_local_item;
}
if ($__foreach_panier_0_saved_item) {
$_smarty_tpl->tpl_vars['panier'] = $__foreach_panier_0_saved_item;
}
if ($__foreach_panier_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_panier_0_saved_key;
}
?>
    </div>
<?php }
}
