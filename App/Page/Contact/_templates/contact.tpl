{**
* @name contact.tpl Affichage du contact Business&Strategy Partners
* @author web-Projet.com (contact@web-projet.com) Août 2017
* @package Defaut\Index
* @version 1.0
**}

    <div class="container main">
        {foreach from=$index->getCollection()->get() key=key item=contact}
        <h2 class="text-left">{$contact->value()->name}</h2>
        <div class="row">
            <div class="col-md-6 col-xl-6 col-sm-12 col-xs-12 contact">
            <!-- Boucle sur les articles concernés Contact //-->

                    <adresse>
                		{foreach from=$contact->value()->adresse key=key item=adresse}
                            {if $key == 'Rue' or $key =="Code Postal" or $key == "Ville"}
                                <div class="adresse">
                                    {$adresse}
                                </div>
                            {else}
                                <div class="adresse">
                			        {$adresse}
                                </div>
                            {/if}
                		{/foreach}
                    </adresse>
            </div>
            <div class="col-md-6 col-xl-6 col-sm-12 col-xs-12">
                <form class="row" action="">
                    <div class="col-md-6 col-xl-6 col-sm-12 col-xs-12">
                        <textarea class="message form-control" placeholder="votre message..."></textarea>
                    </div>
                    <div class="col-md-6 col-xl-6 col-sm-12 col-xs-12">
                        <input class="form-control" type="text" placeholder="Votre nom" required>
                        <input class="form-control" type="email" placeholder="Votre E-mail" required>
                        <input class="btn btn-default" type="submit" placeholder="Envoyer">
                    </div>
                </form>
            </div>
        </div>
        {/foreach}
    </div>

    {literal}
        <div class="container">
          <iframe
            class="maps"
            src="https://www.google.com/maps/embed/v1/search?key=AIzaSyBUe1KBZUEo7OUMdwK4Doh0_Ui-LBLrtzM&q=6+Avenue+de+la+République,+09400+Tarascon-sur-Ariège&zoom=16" allowfullscreen>
          </iframe>
        </div>
    {/literal}
