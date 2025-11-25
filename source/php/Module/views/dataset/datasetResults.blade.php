<div class="o-grid">
  <div class="o-grid-12">
        @typography(['variant' => 'meta', 'element' => 'span'])
          @if($hasFilter)
            <strong>@{{resultsize}}</strong> {{$lang->numberOfResults}}
          @else
          {{$lang->displaying}} 
          <strong>@{{resultsize}}</strong> 
          {{$lang->numberOfItemsInDirectory}}
          @endif
        @endtypography
    </div>
  </div>
</div>
