<?php
/* Smarty version 3.1.29, created on 2017-08-03 14:10:55
  from "/mnt/c/webroot/bsp.com/App/Defaut/Index/_templates/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_598312cf6658e5_56200976',
  'file_dependency' => 
  array (
    '90df3e9cdb6fddc990653b5126cb216c1164ae21' => 
    array (
      0 => '/mnt/c/webroot/bsp.com/App/Defaut/Index/_templates/index.tpl',
      1 => 1501762059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598312cf6658e5_56200976 ($_smarty_tpl) {
?>



<section id="activites" class="row">
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['index']->value->getActivities()->getTemplateName(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('index'=>$_smarty_tpl->tpl_vars['index']->value->getActivities()), 0, true);
?>

</section>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['index']->value->getAbout()->getTemplateName(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('index'=>$_smarty_tpl->tpl_vars['index']->value->getAbout()), 0, true);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['index']->value->getContact()->getTemplateName(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('index'=>$_smarty_tpl->tpl_vars['index']->value->getContact()), 0, true);
?>

<?php }
}
