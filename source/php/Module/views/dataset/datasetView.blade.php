
<div class="o-grid">
  <div class="o-grid-6@md">
    <article id="article" class="c-article c-article--readable-width s-article u-clearfix">
     
     @typography([
          "variant" => "h1",
          "element" => "span",
      ])
        @{{text}}
      @endtypography
    
      @typography([
          "element" => "p",
          "classList" => ['entryscapeLead']
      ])
        @{{text content="${dcterms:description}"}}
      @endtypography

    </article>


    @{{#distributionList clickExpand="inherit:clickExpand"}}
    @{{/distributionList}}
  </div>

  <div class="o-grid-6@md">
    @card()
      <div class="c-card__body"> 
        @typography([
          "variant" => "h3",
          "element" => "h2",
          "classList" => ['c-card__heading']
        ])
          {{ $lang->metadataHeader }}
        @endtypography
        @{{viewMetadata template="dcat:OnlyDataset" filterpredicates="inherit:filterPredicates"}}
      </div>
    @endcard
  </div>

</div>