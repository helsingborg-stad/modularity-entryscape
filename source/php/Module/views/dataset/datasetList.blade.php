
<div class="o-grid">
  <div class="o-grid-3@md">
    @{{facets exclude="org,format,license"}}
  </div>
  <div class="o-grid-9@md">
    @{{datasetMultiSearch exclude="format,org"}}
    
    @{{datasetResults}}
    
    @{{datasetList includeExtras="inherit" includeVisualizations="inherit" includeDataPreview="inherit" hl="inherit"}}
  </div>
</div>
