@section('article.title.before')
tesdt
@endsection

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

  @{{#distributionList clickExpand="inherit:clickExpand"}}

  @{{/distributionList}}

</article>