
<div class="o-grid">
  <div class="o-grid-3@md">
    @paper()
      @{{facets exclude="org,format,license"}}
    @endpaper
  </div>
  <div class="o-grid-9@md">


    @{{datasetMultiSearch exclude="format,org"}}
    
    @{{datasetResults}}

    @paper()
      @collection(['bordered' => true])
        @{{datasetList}}
      @endcollection
    @endpaper
  </div>
</div>