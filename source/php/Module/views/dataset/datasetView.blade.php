<article id="article" class="c-article c-article--readable-width s-article u-clearfix">
  @typography([
      "variant" => "h1",
      "element" => "h1",
  ])
    @{{text}}
  @endtypography

  @typography([
      "element" => "p",
      "classList" => ['lead']
  ])
    @{{text content="${dcterms:description}"}}
  @endtypography

  @{{viewMetadata template="dcat:OnlyDataset" filterpredicates="inherit:filterPredicates"}}

  @{{#distributionList clickExpand="inherit:clickExpand"}}
  @{{/distributionList}}

</article>