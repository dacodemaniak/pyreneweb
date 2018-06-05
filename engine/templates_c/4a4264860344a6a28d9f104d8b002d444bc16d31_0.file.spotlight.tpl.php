<?php
/* Smarty version 3.1.29, created on 2018-01-08 14:49:51
  from "/mnt/c/webroot/tresor-pyrene.dev/App/Defaut/Index/_templates/spotlight.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a5376ffb4ac25_53064423',
  'file_dependency' => 
  array (
    '4a4264860344a6a28d9f104d8b002d444bc16d31' => 
    array (
      0 => '/mnt/c/webroot/tresor-pyrene.dev/App/Defaut/Index/_templates/spotlight.tpl',
      1 => 1513174379,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5376ffb4ac25_53064423 ($_smarty_tpl) {
?>
<section id="spotlight" class="row inner-section">

  <div class="container">

    <!-- Boucle sur les articles concernés About //-->

    <?php
$_from = $_smarty_tpl->tpl_vars['index']->value->getCollection()->get();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_spotlight_0_saved_item = isset($_smarty_tpl->tpl_vars['spotlight']) ? $_smarty_tpl->tpl_vars['spotlight'] : false;
$__foreach_spotlight_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['spotlight'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['spotlight']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['spotlight']->value) {
$_smarty_tpl->tpl_vars['spotlight']->_loop = true;
$__foreach_spotlight_0_saved_local_item = $_smarty_tpl->tpl_vars['spotlight'];
?>
      <div class="col-lg-<?php echo $_smarty_tpl->tpl_vars['index']->value->getBootstrapCols("lg");?>
 col-md-<?php echo $_smarty_tpl->tpl_vars['index']->value->getBootstrapCols("md");?>
 col-sm-<?php echo $_smarty_tpl->tpl_vars['index']->value->getBootstrapCols("sm");?>
 col-xs-<?php echo $_smarty_tpl->tpl_vars['index']->value->getBootstrapCols("xs");?>
">
        <article>
          <header class="<?php echo $_smarty_tpl->tpl_vars['spotlight']->value->value()->cssClass;?>
">
            <h3 class="text-uppercase"><?php echo $_smarty_tpl->tpl_vars['spotlight']->value->value()->title;?>
</h3>
          </header>

          <img class="img-responsive spotlight" src="./_assets/images/<?php echo $_smarty_tpl->tpl_vars['spotlight']->value->value()->image;?>
.png">
          <p class="spotlight"><?php echo $_smarty_tpl->tpl_vars['spotlight']->value->value()->footer;?>
</p>

        </article>
      </div>
    <?php
$_smarty_tpl->tpl_vars['spotlight'] = $__foreach_spotlight_0_saved_local_item;
}
if ($__foreach_spotlight_0_saved_item) {
$_smarty_tpl->tpl_vars['spotlight'] = $__foreach_spotlight_0_saved_item;
}
if ($__foreach_spotlight_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_spotlight_0_saved_key;
}
?>
  </div>
</section>
<?php }
}
