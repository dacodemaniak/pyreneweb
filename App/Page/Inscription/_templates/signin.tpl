{**
* @name signin.tpl Contenu de l'enregistrement actif signin
* @author IDea Factory (dev-team@ideafactory.fr) - Fév. 2018
* @version 0.1.0
**}
<article class="article">
	<header>
		<h3>{$index->getActiveRecord()->title}</h3>
		<h4>{$index->getActiveRecord()->subtitle}</h4>
	</header>
	{$index->getActiveRecord()->accroche}
</article>