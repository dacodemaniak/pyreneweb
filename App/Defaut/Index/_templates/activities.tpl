{**
* @name activities.tpl : Affichage du slider d'activités
* @param $index : Toutes les activités
**}

{** Affichage de la liste des items **}


<div id="activities" class="carousel slide" data-ride="carousel" data-interval="6000">
	<!-- Indicateurs nécessaires pour l'affichage des images -->
	<ol class="carousel-indicators">
		{foreach $index->getCollection() as $item}
			<li {if $index->getCollection()->getIndice() == 0} class="active"{/if} data-target="#activities" data-slide-to="{$index->getCollection()->getIndice()}"></li>
		{/foreach}
	</ol>

	<!-- Conteneur des slides eux-même //-->
	<div class="carousel-inner" role="listbox">
		{foreach $index->getCollection() as $item}
			<div class="item {if $index->getCollection()->getIndice() == 0} active{/if}">
				<img src="./_assets/images/slider/{$item->image}" alt="{$item->pagetitle}" />

			</div>
		{/foreach}
	</div>
	<!-- Controleur du slider -->
	<a class="left carousel-control" href="#activities" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#activities" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>
