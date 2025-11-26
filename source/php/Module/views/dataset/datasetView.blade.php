<style>
.c-article.c-article--readable-width {
  display: none; 
}
</style>

<div class="o-grid">
  <div class="o-grid-6@md">
    <article id="article" class="c-article s-article u-clearfix">
     
     @typography([
          "variant" => "h1",
          "element" => "h1",
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

    <div class="s-distributionlist">
      @{{#distributionList clickExpand="inherit:clickExpand"}}
      @{{/distributionList}}
    </div>
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
{{--- 
  <div class="o-grid-12">
    @card([])
      <div class="c-card__body">
        @typography([
          "variant" => "h3",
          "element" => "h2",
          "classList" => ['c-card__heading']
        ])
          {{ $lang->dataPreview }}
        @endtypography
      </div>
    @endcard
  </div>
</div>
---}}
