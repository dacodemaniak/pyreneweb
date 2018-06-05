<section id="information" class="row inner-section">

  <div class="container">

    <!-- Boucle sur les articles concernés About //-->

    {foreach from=$index->getCollection()->get() key=key item=information}
      <div class="col-lg-{$index->getBootstrapCols("lg")} col-md-{$index->getBootstrapCols("md")} col-sm-{$index->getBootstrapCols("sm")} col-xs-{$index->getBootstrapCols("xs")} {$information->value()->cssClass}">
        <div >
          <i class="{$information->value()->icon}"></i>
          <p>{$information->value()->accroche}</p>
        </div>
      </div>
    {/foreach}
  </div>
</section>
