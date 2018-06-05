<?php
/* Smarty version 3.1.29, created on 2017-12-21 14:33:07
  from "/opt/lampp/htdocs/pyrene/App/Page/Panier/_templates/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a3bb813bfd3b7_00860439',
  'file_dependency' => 
  array (
    'afbd968527858293c35552740551e4af03ba682a' => 
    array (
      0 => '/opt/lampp/htdocs/pyrene/App/Page/Panier/_templates/index.tpl',
      1 => 1513863099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3bb813bfd3b7_00860439 ($_smarty_tpl) {
?>



<section id="panier" class="row inner-section">
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['index']->value->getPanier()->getTemplateName(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('index'=>$_smarty_tpl->tpl_vars['index']->value->getPanier()), 0, true);
?>


</section>
<?php }
}
