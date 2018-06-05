	<div id="about" class="row inner-section">
		<div class="container">

			<!-- Boucle sur les articles concernés About //-->

			{foreach from=$index->getCollection()->get() key=key item=about}
				<div class="desktop hidden-sm hidden-xs">
					<img class="img1 img-responsive" src="./_assets/images/section/3/feuille2.svg">
					<p>{$about->value()->accroche}</p>
					<img class="img2 " src="./_assets/images/section/3/feuille1.svg">
				</div>
				<div class="hidden-md hidden-lg mobile">
					<img class=" img-responsive" src="./_assets/images/section/3/feuille2.svg">
					<p>{$about->value()->accroche}</p>
				</div>
			{/foreach}
		</div>

	</div>
