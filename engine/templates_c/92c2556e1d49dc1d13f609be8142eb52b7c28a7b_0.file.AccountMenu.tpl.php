<?php
/* Smarty version 3.1.30, created on 2018-03-03 04:52:02
  from "//mnt/c/webroot/tresor-pyrene.dev/App/Common/Menu/_templates/AccountMenu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9a1be20380b9_90392625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92c2556e1d49dc1d13f609be8142eb52b7c28a7b' => 
    array (
      0 => '//mnt/c/webroot/tresor-pyrene.dev/App/Common/Menu/_templates/AccountMenu.tpl',
      1 => 1519905413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9a1be20380b9_90392625 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="col-lg-6 col-md-10 hidden-sm hidden-xs menu-center" id="customer-menu">
	<ul class="nav nav-pills nav-justified typo-type-1">
		<!-- Identification ou menu Utilisateur -->
		<li customer id="customer-menu"></li>
		
		<!-- Panier -->
		<li basket id="customer-basket"></li>
		
		<!-- Contact -->
		<li id="to-contact">	 
			<a href="/contact" ><i class="fa fa-at" aria-hidden="true"></i> Contact</a>
		</li>	
		<!-- Retour à l'accueil -->
		<li id="to-home">
			<a href="/" title="Retour à l'accueil des Trésors de Pyrène">       
				<i class="fa fa-home primary-color-text" aria-hidden="true" ></i>
			</a>
		</li>
	</ul>
</div><?php }
}
