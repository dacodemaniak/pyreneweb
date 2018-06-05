{**
* @name index.tpl Modèle pour la page d'index de l'application
* @author web-Projet.com (contact@web-projet.com) - Fév. 2017
* @package App\Defaut\Index\_templates
* @version 1.0
**}


<section id="contact" class="row inner-section">
    {include file=$index->getcontact()->getTemplateName() index=$index->getcontact()}

</section>
