<?php
/* Smarty version 3.1.29, created on 2017-03-22 10:58:15
  from "/mnt/c/webroot/bsp.com/_templates/Components/imageTag.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58d24ab7560315_73157542',
  'file_dependency' => 
  array (
    '3d8de948e2d4f8ca4a9737f8b1fa110f53e353e0' => 
    array (
      0 => '/mnt/c/webroot/bsp.com/_templates/Components/imageTag.tpl',
      1 => 1476543172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d24ab7560315_73157542 ($_smarty_tpl) {
?>


<img src="<?php echo $_smarty_tpl->tpl_vars['component']->value->src();?>
" id="<?php echo $_smarty_tpl->tpl_vars['component']->value->id();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['component']->value->alt();?>
" class="<?php echo $_smarty_tpl->tpl_vars['component']->value->cssClass();?>
" <?php echo $_smarty_tpl->tpl_vars['component']->value->attributes();?>
/><?php }
}
