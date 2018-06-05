{**
* @name panier.tpl Affichage du panier Business&Strategy Partners
* @author web-Projet.com (panier@web-projet.com) Août 2017
* @package Defaut\Index
* @version 1.0
**}

    <div class="container ">
        <!-- Boucle sur les articles concernés panier //-->
        {foreach from=$index->getCollection()->get() key=key item=panier}
            <h2 class="text-left">{$panier->value()->name}</h2>        

        {/foreach}
    </div>
