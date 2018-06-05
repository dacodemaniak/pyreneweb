{**
* @name menu.tpl Vue pour l'affichage du menu principal de l'application
* @author web-Projet.com (contact@web-projet.com) - Fév. 2017
* @designer web-Projet.com
* @version 1.0
* @see \App\Common\Menu\menu.class.php
**}
<div class="container">
	 <div class="logo col-lg-2 col-md-2 hidden-sm hidden-xs" id="logoHeader">
		<img onclick="homePage()" class="img-responsive" src="/_assets/images/logo.png" alt="{$site->description}" class="" />
	</div>

	 <div class="col-lg-3 col-md-4 hidden-sm hidden-xs">
		<form class="navbar-form navbar-left" role="search">
		  <div class="form-group">
		    <input type="text" class="form-control" id="searchBar">
		  </div>
		  <button type="submit" class="btn btn-default" id="boutonSearch">ok</button>
		</form>
	</div>
	
	<!-- Sous-menu : options Mon Compte, Panier, Contact //-->
	{include $menu->getAccountMenu()->getTemplate() menu=$menu->getAccountMenu()}
	
</div>
{if $menu->hasOptions()}
	<nav class="topnav navbar navbar-default col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div>
			<!-- En-tête du menu //-->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
	        		<span class="sr-only">Afficher / Masquer</span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	      		</button>
	      		<!-- <a class="navbar-brand hidden-sm hidden-xs"><img src="/_assets/images/identite.png" alt="{$site->description}" class="" /></a> -->
			</div>

			<div class="collapse navbar-collapse " id="main-menu">
				{function name=toUL}
					<ul class="{if $isChildren}dropdown-menu{else}nav navbar-nav{/if}" id="menu">
					{assign var=var value=0}
					
				    	{foreach $items as $item}
				        	{if $item->hasChildren()}
				        		<li class="dropdown" data-children="ss_menu-{$var}">
				        			<a href="#" title="{$item->title|stripTags}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				        				{$item->menutitle|stripTags}
				        				<span class="caret"></span>
				        			</a>
				        			<ul id="ss_menu-{$var}" class="sous-menu">
							            <li class="sub-nav-item"><a href="#">Petits machins</a></li>
							            <li class="sub-nav-item"><a href="#">Gros machins</a></li>
							        </ul>
				            		{call name=toUL items=$item->getChildren() isChildren=true}
				            	</li>
				        	{else}
				        		<li data-children="ss_menu-{$var}">
									<a href="{$item->toHref()}" title="{$item->title|stripTags}" data-slug="{$item->cat_route}" class="{if $item->isActiveCategory()}active{/if}" target="_self">
				        				{$item->menutitle|stripTags}
				        			</a>
				        			<ul id="ss_menu-{$var}" class="sous-menu">
							            <li class="sub-nav-item"><a href="#">Petits machins</a></li>
							            <li class="sub-nav-item"><a href="#">Gros machins</a></li>
							        </ul>
				        		</li>
				        	{/if}
				        	{assign var=var value=$var+1}
				    	{/foreach}
					</ul>
				{/function}
				{call name=toUL items=$menu->options() isChildren=false}
			</div>
		</div>
	</nav>
{/if}
