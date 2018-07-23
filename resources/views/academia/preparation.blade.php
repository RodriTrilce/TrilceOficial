{{! $breadcrumbs = Breadcrumbs::render('academia-preparation', $type) }}
@extends('academia.layouts.template')
@section('title', 'Preparación ' . $title)
@section('content')

  <div class="header-double-top">
    <div class="row">
      <div class="col-xs-12 col-sm-6"></div>
      <div class="col-xs-12 col-sm-6 header-double-w-preparation-{{$type}}"></div>

      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>Nuevos Inicios</h1>
<!--        <p>Elije la preparación universitaria,<br /> exclusiva que está buscando</p>-->
      </div>
    </div>
  </div>

  <div class="row col-xs-12 center-xs beginning beginning-minus container-base">
    <div class="row col-xs-12 col-sm-9 col-md-8 center-xs center-sm center-md">
      <div class="row col-xs-12 col-sm-8 col-md-7 start-xs start-sm start-md beginning-container beginning-minus">

        <div class="col-xs beginning--item @if($type=='uni') beginning--item-active @endif">
          <a href="/academia/preparacion-uni" class="item-a">
            <div class="item-a-container">
              <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-uni.svg') }}" alt="Nuevos Inicios">
              <div class="item-a-preparation">Preparación</div>
              <span class="item-a-university">UNI</span>
            </div>
          </a>
        </div>

        <div class="beginning-breakline"></div>

        <div class="col-xs beginning--item @if($type=='san-marcos') beginning--item-active @endif">
          <a href="/academia/preparacion-san-marcos" class="item-a">
            <div class="item-a-container">
              <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-unmsm.svg') }}" alt="Nuevos Inicios">
              <div class="item-a-preparation">Preparación</div>
              <span class="item-a-university">SAN MARCOS</span>
            </div>
          </a>
        </div>

        <div class="beginning-breakline"></div>

        <div class="col-xs beginning--item @if($type=='pucp') beginning--item-active @endif">
          <a href="/academia/preparacion-pucp" class="item-a">
            <div class="item-a-container">
              <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-pucp.svg') }}" alt="Nuevos Inicios">
              <div class="item-a-preparation">Preparación</div>
              <span class="item-a-university">PUCP</span>
            </div>
          </a>
        </div>

      </div>
    </div>
  </div>

  <input type="text" id="_university" value="{{ ($type=='san-marcos'?'sm':$type) }}" hidden>

  <div class="row col-xs-12 center-xs nuevos-i-list container-base">
    <div class="row col-xs-12 col-sm-9 col-md-8 start-md start-xs start-sm nuevos-i-list-selects">
      @switch($type)
        @case('san-marcos')
          @include('academia.partials.preparation.san-marcos')
          @break

        @case('uni')
          @include('academia.partials.preparation.uni')
          @break

        @case('pucp')
          @include('academia.partials.preparation.pucp')
          @break
      @endswitch
    </div>

    <div class="row col-xs-12 col-sm-9 col-md-8 start-sm start-xs table-responsive" id="drawTables">
    </div>

  </div>

</div>

@include('academia.partials.card_bottom')
@endsection

@section('scripts')
  page = 'preparation';
@parent

@endsection
