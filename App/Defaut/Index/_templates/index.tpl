{**
* @name index.tpl Modèle pour la page d'index de l'application
* @author web-Projet.com (contact@web-projet.com) - Fév. 2017
* @package App\Defaut\Index\_templates
* @version 1.0
**}

{** Affichage du slider de présentation de l'activité **}
<section id="activites" class="row">
	{include file=$index->getActivities()->getTemplateName() index=$index->getActivities()}
</section>

{include file=$index->getspotlight()->getTemplateName() index=$index->getspotlight()}

{include file=$index->getinformation()->getTemplateName() index=$index->getinformation()}

{include file=$index->getabout()->getTemplateName() index=$index->getabout()}
