<?php
/* Smarty version 3.1.30, created on 2018-02-02 10:37:59
  from "//mnt/c/webroot/tresor-pyrene.dev/App/Page/Panier/_templates/panier.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a74317772b737_50710631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '733ae4aa4e3970775a3df7874c19f40b49962b4f' => 
    array (
      0 => '//mnt/c/webroot/tresor-pyrene.dev/App/Page/Panier/_templates/panier.tpl',
      1 => 1513864603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a74317772b737_50710631 (Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="container ">
        <!-- Boucle sur les articles concernés panier //-->
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['index']->value->getCollection()->get(), 'panier', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['panier']->value) {
?>
            <h2 class="text-left"><?php echo $_smarty_tpl->tpl_vars['panier']->value->value()->name;?>
</h2>        

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
<?php }
}
