{**
*	AccountMenu.tpl : Menu Compte
*	TODO : - Ajouter les liens vers les routes correspondantes
*	@update 2018-02-07 Gestion panier et compte en Ajax et REST
**}
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
</div>