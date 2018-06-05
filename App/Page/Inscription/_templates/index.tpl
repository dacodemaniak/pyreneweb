{**
* @name index.tpl Modèle pour la page d'index de l'application
* @author web-Projet.com (contact@web-projet.com) - Fév. 2017
* @package App\Defaut\Index\_templates
* @version 1.0
**}
<div id="signin-login" class="row">
	<div id="DejaInscrit" class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<form method="post" id="login">
			<legend>
				<h2>Déja inscrit</h2>
			</legend>

			<div class="form-group row">
				<div class="col-md-9 col-md-offset-3">
					<input 
						type="text" 
						name="identifiant" 
						id="identifiant" 
						value="" 
						class="form-control required" 
						data-error="L'identifiant est obligatoire"
						autocomplete="off"
						placeholder="Identifiant (email)"
					>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-md-9 col-md-offset-3">
					<input 
						type="password" 
						name="passField" 
						id="passField" 
						value="" 
						class="form-control required" 
						data-error="Le mot de passe est obligatoire"
						autocomplete="off"
					>
				</div>
			</div>
			
			<fieldset>							
				<button id="loginBtn" name="loginBtn" class="btn btn-outline-secondary center-block" disabled>Connexion</button>
			</fieldset>
			
			<a href="#">Mot de passe oublié ?</a>
		</form>
	</div>
	
	<div id="NvInscrit" class="col-lg-6 col-md-6 hidden-sm hidden-xs">
		<form method="post" class="" id="signin">
			<fieldset>
				<legend>
					<h2>Nouveau Client</h2>
				</legend>
				
				<div class="form-group row">
					<label class="label required col-md-3" for="nom">
						Votre nom :
					</label>
					<div class="col-md-9">
						<input 
							type="text" 
							name="nom" 
							id="nom" value="" 
							class="form-control required" 
							data-error="Votre nom est obligatoire"
							autocomplete="off"
							data-property="nom"
						>
					</div>
				</div>

				<div class="form-group row">
					<label class="label col-md-3" for="prenom">
						Votre prénom :
					</label>
					<div class="col-md-9">
						<input type="text" 
							name="prenom" 
							id="prenom" 
							value="" 
							class="form-control" 
							autocomplete="off"
							data-property="prenom"
						>
					</div>
				</div>

				<div class="form-group row">
					<label class="label required col-md-3" for="email">
						Votre email :
					</label>
					<div class="col-md-9">
						<input 
							type="email" 
							name="email" 
							id="email" 
							value="" 
							class="form-control required" 
							data-error="Votre e-mail est obligatoire"
							autocomplete="off"
							data-mapping="login"
						>
					</div>
				</div>
				
				<div class="form-group row">
					<label class="label required col-md-3" for="confirm-email">
						Confirmation :
					</label>
					<div class="col-md-9">
						<input 
							type="email" 
							name="confirm-email" 
							id="confirm-email" 
							value="" 
							class="form-control required nomatch" 
							data-error="La confirmation de votre e-mail est obligatoire"
							data-nomatch="La confirmation de votre e-mail est incorrecte"
							autocomplete="off"
						>
					</div>
				</div>

				<div class="form-group row">
					<label class="label required col-md-3" for="telephone">
						Votre téléphone :
					</label>
					<div class="col-md-9">
						<input 
							type="text" 
							name="telephone" 
							id="telephone" 
							value="" 
							class="form-control required" 
							data-error="Votre téléphone est obligatoire"
							autocomplete="off"
							data-property="telephone"
						>
					</div>
				</div>
																				
			</fieldset>
			
			<fieldset>
				<legend>
					<h2>Votre accès</h2>
				</legend>
				
				<div class="form-group row">
					<label class="label required col-md-3" for="passphrase">
						Votre mot de passe :
					</label>
					<div class="col-md-9">
						<input 
							type="password" 
							name="passphrase" 
							id="passphrase" 
							value="" 
							class="form-control required" 
							data-error="Le choix d'un mot de passe est obligatoire"
							data-mapping="password"
						>
					</div>
				</div>

				<div class="form-group row">
					<label class="label required col-md-3" for="confirm-passphrase">
						Confirmation :
					</label>
					<div class="col-md-9">
						<input 
							type="password" 
							name="confirm-passphrase" 
							id="confirm-passphrase" 
							value="" 
							class="form-control required nomatch" 
							data-error="La confirmation du mot de passe est obligatoire"
							data-nomatch="La confirmation du mot de passe est incorrecte"
						>
					</div>
				</div>
			</fieldset>
								
			<fieldset>
				<button id="signinBtn" type="submit" class="btn btn-outline-secondary center-block" disabled>Inscrivez-vous</button>
			</fieldset>
		</form>
		<!-- Insertion des mentions relatives à l'inscription -->
		{include $inscription->getArticle()->getTemplateName() index=$inscription->getArticle()}
	</div>
</div>