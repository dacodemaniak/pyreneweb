<?php
/* Smarty version 3.1.29, created on 2017-12-18 14:14:28
  from "/opt/lampp/htdocs/pyrene/App/Defaut/Index/_templates/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a37bf34a99f05_71872408',
  'file_dependency' => 
  array (
    '2a11d7856bc2104e8dabc629746313b3bdbda595' => 
    array (
      0 => '/opt/lampp/htdocs/pyrene/App/Defaut/Index/_templates/index.tpl',
      1 => 1513602842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a37bf34a99f05_71872408 ($_smarty_tpl) {
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
