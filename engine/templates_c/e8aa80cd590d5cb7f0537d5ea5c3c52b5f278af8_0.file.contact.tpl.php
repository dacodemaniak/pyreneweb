<?php
/* Smarty version 3.1.29, created on 2017-08-28 16:30:00
  from "/mnt/c/webroot/bsp.com/App/Defaut/Index/_templates/contact.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59a428e8678cb6_44286182',
  'file_dependency' => 
  array (
    'e8aa80cd590d5cb7f0537d5ea5c3c52b5f278af8' => 
    array (
      0 => '/mnt/c/webroot/bsp.com/App/Defaut/Index/_templates/contact.tpl',
      1 => 1503930592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a428e8678cb6_44286182 ($_smarty_tpl) {
?>


	<section id="contact" class="row inner-section">
		<header>
			<h2>B&SP <span>Team</span></h2>
		</header>
		
		<div class="container">

			<!-- Affichage du trombinoscope //-->
			<figure class="trombinoscope col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<img src="./_assets/images/<?php echo $_smarty_tpl->tpl_vars['index']->value->get()->image;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['index']->value->get()->title;?>
" class="img-responsive">
				<figcaption>
					<h3><?php echo $_smarty_tpl->tpl_vars['index']->value->get()->title;?>
</h3>
					<h4><?php echo $_smarty_tpl->tpl_vars['index']->value->get()->subtitle;?>
</h4>
					<p>
						<a href="<?php echo $_smarty_tpl->tpl_vars['index']->value->get()->getLinkedin("link");?>
" target="_new" title="Profil <?php echo $_smarty_tpl->tpl_vars['index']->value->get()->getLinkedin("label");?>
">
							<img src="./_assets/images/<?php echo $_smarty_tpl->tpl_vars['index']->value->get()->getLinkedin("icon");?>
" alt="Profil <?php echo $_smarty_tpl->tpl_vars['index']->value->get()->getLinkedin("label");?>
 de <?php echo $_smarty_tpl->tpl_vars['index']->value->get()->title;?>
">
						</a>
						<a href="<?php echo $_smarty_tpl->tpl_vars['index']->value->get()->getViadeo("link");?>
" target="_new" title="Profil <?php echo $_smarty_tpl->tpl_vars['index']->value->get()->getViadeo("label");?>
">
							<img src="./_assets/images/<?php echo $_smarty_tpl->tpl_vars['index']->value->get()->getViadeo("icon");?>
" alt="Profil <?php echo $_smarty_tpl->tpl_vars['index']->value->get()->getViadeo("label");?>
 de <?php echo $_smarty_tpl->tpl_vars['index']->value->get()->title;?>
">
						</a>
					</p>
				</figcaption>
			</figure>
			
		</div>
		
	</section><?php }
}
