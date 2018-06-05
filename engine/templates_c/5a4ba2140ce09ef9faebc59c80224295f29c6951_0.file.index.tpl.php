<?php
/* Smarty version 3.1.30, created on 2018-02-03 10:13:45
  from "//mnt/c/webroot/tresor-pyrene.dev/App/Defaut/Index/_templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a757d4976f008_18031598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a4ba2140ce09ef9faebc59c80224295f29c6951' => 
    array (
      0 => '//mnt/c/webroot/tresor-pyrene.dev/App/Defaut/Index/_templates/index.tpl',
      1 => 1517649183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a757d4976f008_18031598 (Smarty_Internal_Template $_smarty_tpl) {
?>



<section id="activites" class="row">
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['index']->value->getActivities()->getTemplateName(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('index'=>$_smarty_tpl->tpl_vars['index']->value->getActivities()), 0, true);
?>

</section>

<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['index']->value->getspotlight()->getTemplateName(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('index'=>$_smarty_tpl->tpl_vars['index']->value->getspotlight()), 0, true);
?>


<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['index']->value->getinformation()->getTemplateName(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('index'=>$_smarty_tpl->tpl_vars['index']->value->getinformation()), 0, true);
?>


<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['index']->value->getabout()->getTemplateName(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('index'=>$_smarty_tpl->tpl_vars['index']->value->getabout()), 0, true);
?>

<?php }
}
