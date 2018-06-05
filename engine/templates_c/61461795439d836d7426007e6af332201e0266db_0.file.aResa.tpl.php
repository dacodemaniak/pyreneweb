<?php
/* Smarty version 3.1.29, created on 2017-03-22 10:58:15
  from "/mnt/c/webroot/bsp.com/App/Defaut/Index/_templates/aResa.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58d24ab7c88d65_57883839',
  'file_dependency' => 
  array (
    '61461795439d836d7426007e6af332201e0266db' => 
    array (
      0 => '/mnt/c/webroot/bsp.com/App/Defaut/Index/_templates/aResa.tpl',
      1 => 1488606534,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d24ab7c88d65_57883839 ($_smarty_tpl) {
?>

<div id="dialog-form" title="Finalisez votre commande">
	<form name="" id="detail-resa" class="form-horizontal" method="post" />
		<fieldset>
			<div class="form-group">
				<label for="civilite" class="col-sm-4">Civilité :</label>
				<select name="civilite" id="civilite" size="1" class="text ui-widget-content ui-corner-all">
					<option value="1">Madame</option>
					<option value="2">Mademoiselle</option>
					<option value="3" selected>Monsieur</option>
				</select>
			</div>
			<div class="form-group">
				<label for="nom" class="required-field col-sm-4">Nom:</label>
				<input type="text" name="nom" id="nom" placeholder="Votre nom" size="30" maxlength="75" class="text ui-widget-content ui-corner-all" />
			</div>
			<div class="form-group">
				<label for="prenom" class="col-sm-4">Prénom :</label>
				<input type="text" name="prenom" id="prenom" placeholder="Votre prénom" size="30" maxlength="75" class="text ui-widget-content ui-corner-all" />
			</div>
			<div class="form-group">
				<label for="mail" class="required-field col-sm-4">Adresse e-mail :</label>
				<input type="email" name="mail" id="mail" placeholder="Votre e-mail" size="30" maxlength="75" class="text ui-widget-content ui-corner-all" />
			</div>
			<div class="form-group">
				<label for="telephone" class="required-field col-sm-4">Téléphone :</label>
				<input type="text" name="telephone" id="telephone" placeholder="99-99-99-99-99" size="30" maxlength="75" class="text ui-widget-content ui-corner-all" />
			</div>
		</fieldset>

		<div class="payment-detail">
			<p>
				Montant pour <span class="badge"></span> personnes : <span class="amount"></span>
			</p>
		</div>
	</form>
</div><?php }
}
