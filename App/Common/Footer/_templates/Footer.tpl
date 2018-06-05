{**
* @name index.tpl Vue pour l'affichage du menu principal de l'application
* @author web-Projet.com (contact@web-projet.com) - Fév. 2017
* @designer web-Projet.com
* @version 1.0
* @see \App\Common\Footer\footerController.class.php
**}

<div id="footerMenu">
	<ul class="listFooter">
		{foreach $footer->getFooterInfo()->options() as $option}
			<li>
				<a href="{$option->toHref()}">{$option->menutitle}</a>
			</li>
		{/foreach}
	</ul>
	<ul class="listFooter my-account-menu not-active">
		{foreach $footer->getMenuCompte()->options() as $option}
			<li>
				<a href="{$option->toHref()}">{$option->menutitle}</a>
			</li>
		{/foreach}
	</ul>
	<ul class="listFooter">
		{foreach $footer->getMenuQui()->options() as $option}
			<li>
				<a href="{$option->toHref()}">{$option->menutitle}</a>
			</li>
		{/foreach}
	</ul>
</div>