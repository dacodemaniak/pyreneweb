<?php
/* Smarty version 3.1.29, created on 2017-12-11 16:51:35
  from "/opt/lampp/htdocs/pyrene/_templates/Components/imageTag.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a2ea98755af82_12387494',
  'file_dependency' => 
  array (
    '693f4ada8b29236001e92215846a4b6a69b10136' => 
    array (
      0 => '/opt/lampp/htdocs/pyrene/_templates/Components/imageTag.tpl',
      1 => 1476539574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2ea98755af82_12387494 ($_smarty_tpl) {
?>


<img src="<?php echo $_smarty_tpl->tpl_vars['component']->value->src();?>
" id="<?php echo $_smarty_tpl->tpl_vars['component']->value->id();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['component']->value->alt();?>
" class="<?php echo $_smarty_tpl->tpl_vars['component']->value->cssClass();?>
" <?php echo $_smarty_tpl->tpl_vars['component']->value->attributes();?>
/><?php }
}
