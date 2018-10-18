<input type="text" id="_university" value="{{ ($type=='san-marcos'?'sm':$type) }}" hidden>
<div class="row col-xs-12 center-xs nuevos-i-list container-base">
  <div class="row col-xs-12 col-sm-9 col-md-8 start-md start-xs start-sm nuevos-i-list-selects">
    @switch($type)
      @case('san-marcos')
        @include('academia.partials.preparation.search.search-san-marcos')
        @break

      @case('uni')
        @include('academia.partials.preparation.search.search-uni')
        @break

      @case('pucp')
        @include('academia.partials.preparation.search.search-pucp')
        @break
    @endswitch
  </div>

  <div class="row col-xs-12 col-sm-9 col-md-8 start-sm start-xs table-responsive preparation-overflow" id="drawTables"></div>
</div>
