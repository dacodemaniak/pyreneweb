<?php
/* Smarty version 3.1.29, created on 2017-12-22 11:31:11
  from "/opt/lampp/htdocs/pyrene/App/Page/Contact/_templates/contact.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a3cdeefaff473_41355688',
  'file_dependency' => 
  array (
    '0d8d4a04accb5127f93bb16050076e8cb2bbb459' => 
    array (
      0 => '/opt/lampp/htdocs/pyrene/App/Page/Contact/_templates/contact.tpl',
      1 => 1513938668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3cdeefaff473_41355688 ($_smarty_tpl) {
?>


    <div class="container main">
        <div class="row">
            <div class="col-md-6 col-xl-6 col-sm-12 col-xs-12 contact">
            <!-- Boucle sur les articles concernés Contact //-->
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
            		<h2 class="text-left"><?php echo $_smarty_tpl->tpl_vars['contact']->value->value()->name;?>
</h2>
                    <adresse>
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
                            <?php if ($_smarty_tpl->tpl_vars['key']->value == 'Rue' || $_smarty_tpl->tpl_vars['key']->value == "Code Postal" || $_smarty_tpl->tpl_vars['key']->value == "Ville") {?>
                                <div class="adresse">
                                    <?php echo $_smarty_tpl->tpl_vars['adresse']->value;?>

                                </div>
                            <?php } else { ?>
                                <div class="adresse">
                			        <?php echo $_smarty_tpl->tpl_vars['adresse']->value;?>

                                </div>
                            <?php }?>
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
                    </adresse>
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
            <div class="col-md-6 col-xl-6 col-sm-12 col-xs-12">
                <form class="row" action="">
                    <div class="col-md-6 col-xl-6 col-sm-12 col-xs-12">
                        <textarea class="message form-control" placeholder="votre message..."></textarea>
                    </div>
                    <div class="col-md-6 col-xl-6 col-sm-12 col-xs-12">
                        <input class="form-control" type="text" placeholder="Votre nom" required>
                        <input class="form-control" type="email" placeholder="Votre E-mail" required>
                        <input class="btn btn-default" type="submit" placeholder="Envoyer">
                    </div>
                </form>
            </div>
        </div>
    </div>

    
        <div class="container">
          <iframe
            class="maps"
            src="https://www.google.com/maps/embed/v1/search?key=AIzaSyBUe1KBZUEo7OUMdwK4Doh0_Ui-LBLrtzM&q=6+Avenue+de+la+République,+09400+Tarascon-sur-Ariège&zoom=16" allowfullscreen>
          </iframe>
        </div>
    
<?php }
}
