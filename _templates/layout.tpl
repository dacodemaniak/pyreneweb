{**
*	@name layout.tpl Gabarit général de l'application
*	@project business-strategy-partners.com
*	@designer web-Projet.com
*	@date Mars 2017
**}

{if $app->framework()->request()->getRoute()->renderMode() == "page"}
<!doctype html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta charset="utf-8" />
		<link href="/favicon.ico" rel="icon" type="image/x-icon" />
		<title>{$site->title}</title>

		<meta name="description" content="{$site->description}" />
		<meta name="keywords" content="{$site->keywords}" />

		<!-- Insertion des CSS //-->
		{if $app->framework()->assets()->css() neq null}
			{foreach from=$app->framework()->assets()->css() item=css}
				<link href="{$css->get()}" rel="stylesheet" />
			{/foreach}
		{/if}
	</head>

	<body>

		<div >

			{* Menu principal de l'application *}
			<div id="main-menu-wrapper" class="row">
				{foreach from=$response->regionMapper() key=region item=templates}
					{if $region eq "_main_menu"}
						{foreach from=$templates item=template}
							{include $template}
						{/foreach}
					{/if}
				{/foreach}
			</div>


			<main id="main-content" class="row main">
				{foreach from=$response->regionMapper() key=region item=templates}
					{if $region eq "_main"}
						{foreach from=$templates item=template}
							{include file=$template}
						{/foreach}
					{/if}
				{/foreach}
{/if}
{if $app->framework()->request()->getRoute()->renderMode() == "page"}
			</main>

			{** Pied de page **}
			{foreach from=$response->regionMapper() key=region item=templates}
				{if $region eq "_main_footer"}
					{foreach from=$templates item=template}
						{include $template}
					{/foreach}
				{/if}
			{/foreach}

		</div>

		<!-- Insertion des ressources javascript //-->
		{if $app->framework()->request()->getRoute()->renderMode() == "page"}
			{if $app->framework()->assets()->javascript() neq null}
				{foreach from=$app->framework()->assets()->javascript() item=javascript}
					<script src="{$javascript->get()}" charset="{$javascript->charset()}"></script>
				{/foreach}
			{/if}
		{/if}
	</body>
</html>
{/if}
