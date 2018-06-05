<?php
/* Smarty version 3.1.30, created on 2018-02-03 10:02:55
  from "//mnt/c/webroot/tresor-pyrene.dev/App/Defaut/Index/_templates/spotlight.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a757abfe515c0_68213701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a21a4f2a79ff65952612f8556fe2a9974be4a276' => 
    array (
      0 => '//mnt/c/webroot/tresor-pyrene.dev/App/Defaut/Index/_templates/spotlight.tpl',
      1 => 1516973844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a757abfe515c0_68213701 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="spotlight" class="row inner-section">

  <div class="container">

    <!-- Boucle sur les articles concernés About //-->

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['index']->value->getCollection()->get(), 'spotlight', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['spotlight']->value) {
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

          <img id="imgSpotlight" class="img-responsive spotlight" src="./_assets/images/<?php echo $_smarty_tpl->tpl_vars['spotlight']->value->value()->image;?>
.png">
          <p class="spotlight"><?php echo $_smarty_tpl->tpl_vars['spotlight']->value->value()->footer;?>
</p>

        </article>
      </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </div>
</section>
<?php }
}
