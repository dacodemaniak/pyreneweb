<?php
/* Smarty version 3.1.29, created on 2018-01-08 14:49:51
  from "/mnt/c/webroot/tresor-pyrene.dev/App/Defaut/Index/_templates/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a5376ffac9254_70344492',
  'file_dependency' => 
  array (
    'a8af42ce4a34020853272a5d40160c48c7f9b08b' => 
    array (
      0 => '/mnt/c/webroot/tresor-pyrene.dev/App/Defaut/Index/_templates/index.tpl',
      1 => 1513602842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5376ffac9254_70344492 ($_smarty_tpl) {
?>



<section id="activites" class="row">
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['index']->value->getActivities()->getTemplateName(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('index'=>$_smarty_tpl->tpl_vars['index']->value->getActivities()), 0, true);
?>

</section>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['index']->value->getspotlight()->getTemplateName(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('index'=>$_smarty_tpl->tpl_vars['index']->value->getspotlight()), 0, true);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['index']->value->getinformation()->getTemplateName(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('index'=>$_smarty_tpl->tpl_vars['index']->value->getinformation()), 0, true);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['index']->value->getabout()->getTemplateName(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('index'=>$_smarty_tpl->tpl_vars['index']->value->getabout()), 0, true);
?>

<?php }
}
