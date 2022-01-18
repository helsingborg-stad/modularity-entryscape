  
@collection__item([])
  @typography(['element' => 'h4', 'variant' => 'h4'])
    @{{text}}
  @endtypography
  @typography(['element' => 'p', 'variant' => 'p'])
    @{{text content="${dcterms:description}"}}
  @endtypography
@endcollection__item