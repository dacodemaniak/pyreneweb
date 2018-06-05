<section id="spotlight" class="row inner-section">

  <div class="container">

    <!-- Boucle sur les articles concernés About //-->

    {foreach from=$index->getCollection()->get() key=key item=spotlight}
      <div class="col-lg-{$index->getBootstrapCols("lg")} col-md-{$index->getBootstrapCols("md")} col-sm-{$index->getBootstrapCols("sm")} col-xs-{$index->getBootstrapCols("xs")}">
        <article>
          <header class="{$spotlight->value()->cssClass}">
            <h3 class="text-uppercase">{$spotlight->value()->title}</h3>
          </header>

          <img id="imgSpotlight" class="img-responsive spotlight" src="./_assets/images/{$spotlight->value()->image}.png">
          <p class="spotlight">{$spotlight->value()->footer}</p>

        </article>
      </div>
    {/foreach}
  </div>
</section>
