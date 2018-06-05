<?php
/* Smarty version 3.1.29, created on 2018-01-12 11:53:29
  from "/mnt/c/webroot/tresor-pyrene.dev/App/Page/Inscription/_templates/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a5893a9d8d119_25137099',
  'file_dependency' => 
  array (
    'e0ebd7f2f8edaa68696df141facade32081c87de' => 
    array (
      0 => '/mnt/c/webroot/tresor-pyrene.dev/App/Page/Inscription/_templates/index.tpl',
      1 => 1515753643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5893a9d8d119_25137099 ($_smarty_tpl) {
?>


<div id="inscripMain">
	<div id="DejaInscrit">
		<form method="post" action="?login">
			<h2>Déja inscrit</h2>
			<br>
			<label id="inscripMainLabel">Identifiant(Email) :</label><input id="inscriptMainInput" type="text" required><br>
			<label id="inscripMainLabel">Mot de passe :</label><input id="inscriptMainInput" type="text" required><br>
			<button id="boutonCo" class="btn btn-outline-secondary">Connection</button><br>
			<a href="#">Mot de passe oublié ?</a><br>
		</form>
	</div>
	<div id="NvInscrit">
		<form method="post" action="?signin">
			<h2>Nouveau Client</h2><br>
			<label id="inscripMainLabel">Votre nom :</label><input id="inscriptMainInput" type="text" required><br>
			<label id="inscripMainLabel">prenom :</label><input id="inscriptMainInput" type="text" required><br>
			<label id="inscripMainLabel">Email :</label><input id="inscriptMainInput" type="text" required> <br>
			<label id="inscripMainLabel">Confirmation :</label><input id="inscriptMainInput" type="text" required><br>
			<label id="inscripMainLabel">Télephone :</label><input id="inscriptMainInput" type="text"><br>
			<label id="inscripMainLabel">Mot de passe :</label><input id="inscriptMainInput" type="text"required><br>
			<label id="inscripMainLabel">Confirmation :</label><input id="inscriptMainInput" type="text"required><br>
			<button id="boutonInscrip" class="btn btn-outline-secondary">Inscrivez-vous</button><br>
		</form>
		<p>Texte des mentions obligatoires</p>
	</div>
</div><?php }
}
