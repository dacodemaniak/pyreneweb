<?php
/* Smarty version 3.1.29, created on 2017-12-18 14:07:27
  from "/opt/lampp/htdocs/pyrene/App/Defaut/Index/_templates/contact.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a37bd8f9f04d6_03768759',
  'file_dependency' => 
  array (
    'a49c477d14dea16fcd7564a48ff668c7ecd0a2f3' => 
    array (
      0 => '/opt/lampp/htdocs/pyrene/App/Defaut/Index/_templates/contact.tpl',
      1 => 1513602446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a37bd8f9f04d6_03768759 ($_smarty_tpl) {
?>

<section id="information" class="row inner-section">

  <div class="container">

    <!-- Boucle sur les articles concernés About //-->

    <?php
$_from = $_smarty_tpl->tpl_vars['index']->value->getCollection()->get();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_contact_0_saved_item = isset($_smarty_tpl->tpl_vars['contact']) ? $_smarty_tpl->tpl_vars['contact'] : false;
$__foreach_contact_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['contact'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['contact']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->_loop = true;
$__foreach_contact_0_saved_local_item = $_smarty_tpl->tpl_vars['contact'];
?>
      <div>
        <div >
			<p><?php echo $_smarty_tpl->tpl_vars['contact']->value->value()->name;?>
</p>
			<?php
$_from = $_smarty_tpl->tpl_vars['contact']->value->value()->adresse;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_adresse_1_saved_item = isset($_smarty_tpl->tpl_vars['adresse']) ? $_smarty_tpl->tpl_vars['adresse'] : false;
$__foreach_adresse_1_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['adresse'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['adresse']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['adresse']->value) {
$_smarty_tpl->tpl_vars['adresse']->_loop = true;
$__foreach_adresse_1_saved_local_item = $_smarty_tpl->tpl_vars['adresse'];
?>
					<p><?php echo $_smarty_tpl->tpl_vars['adresse']->value;?>
</p>
			<?php
$_smarty_tpl->tpl_vars['adresse'] = $__foreach_adresse_1_saved_local_item;
}
if ($__foreach_adresse_1_saved_item) {
$_smarty_tpl->tpl_vars['adresse'] = $__foreach_adresse_1_saved_item;
}
if ($__foreach_adresse_1_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_adresse_1_saved_key;
}
?>
        </div>
      </div>
    <?php
$_smarty_tpl->tpl_vars['contact'] = $__foreach_contact_0_saved_local_item;
}
if ($__foreach_contact_0_saved_item) {
$_smarty_tpl->tpl_vars['contact'] = $__foreach_contact_0_saved_item;
}
if ($__foreach_contact_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_contact_0_saved_key;
}
?>
  </div>
</section>
<?php }
}
