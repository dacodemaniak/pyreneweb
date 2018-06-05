<?php
/* Smarty version 3.1.30, created on 2018-02-02 10:37:56
  from "//mnt/c/webroot/tresor-pyrene.dev/App/Page/Panier/_templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a743174402ba7_24521524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ce23ca79e9fd468ddb3e02400b94f906aa4c6a2' => 
    array (
      0 => '//mnt/c/webroot/tresor-pyrene.dev/App/Page/Panier/_templates/index.tpl',
      1 => 1513863099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a743174402ba7_24521524 (Smarty_Internal_Template $_smarty_tpl) {
?>



<section id="panier" class="row inner-section">
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['index']->value->getPanier()->getTemplateName(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('index'=>$_smarty_tpl->tpl_vars['index']->value->getPanier()), 0, true);
?>


</section>
<?php }
}
