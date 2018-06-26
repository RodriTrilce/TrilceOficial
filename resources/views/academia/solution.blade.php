{{! $breadcrumbs = Breadcrumbs::render('academia-solutions', $university->short_name) }}
@extends('academia.layouts.template')
@section('title', 'Solucionarios de '. $university->name)
@section('content')

  <div class="header-double-top">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6"></div>
      <div class="col-xs-12 col-sm-12 col-md-6 header-double-w-solutions"></div>
      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>Solucionarios</h1>
        <p class="header-double-p-up soluion-header-p">Los exámenes de admisión resueltos de UNI, UNMSM y PUCP.</p>
      </div>
    </div>
  </div>

  <div class="row col-xs-12 center-xs beginning beginning-minus container-base">
    <div class="row col-xs-12 col-sm-9 col-md-8 center-xs center-sm center-md">
      <div class="row col-xs-12 col-sm-8 col-md-7 start-xs start-sm start-md beginning-container beginning-minus">

        <div class="col-xs beginning--item @if($university->short_name=='UNI') beginning--item-active @endif">
          <a href="/academia/solucionarios-uni" class="item-a">
            <div class="item-a-container">
              <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-uni.svg') }}" alt="Nuevos Inicios">
              <div class="item-a-preparation">Preparación</div>
              <span class="item-a-university">UNI</span>
            </div>
          </a>
        </div>

        <div class="beginning-breakline"></div>

        <div class="col-xs beginning--item @if($university->short_name=='San Marcos') beginning--item-active @endif">
          <a href="/academia/solucionarios-san-marcos" class="item-a">
            <div class="item-a-container">
              <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-unmsm.svg') }}" alt="Nuevos Inicios">
              <div class="item-a-preparation">Preparación</div>
              <span class="item-a-university">SAN MARCOS</span>
            </div>
          </a>
        </div>

        <div class="beginning-breakline"></div>

        <div class="col-xs beginning--item @if($university->short_name=='PUCP') beginning--item-active @endif">
          <a href="/academia/solucionarios-pucp" class="item-a">
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


  <div class="row start-xs center-sm solution-h1-title container-base">
    <div class="col-xs-12 col-sm-9 col-md-8 start-xs start-sm">
      <h2 class="solution-h1">
        Descarga los exámenes de admisión resueltos
      </h2>
    </div>
  </div>

  @switch($university->short_name)
    @case('San Marcos')
      @include('academia.partials.solution.unmsm')
      @break

    @case('UNI')
      @include('academia.partials.solution.uni')
      @break

    @case('PUCP')
      @include('academia.partials.solution.pucp')
      @break
  @endswitch

  <hr class="solution-hr">

  <div class="row col-xs-12 center-xs pagination-botton-padding">
    <ul class="pagination" role="navigation">
      <li class="page-item"><a class="page-link" href="#" rel="prev" aria-label="&laquo; Anterior">&lsaquo;</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item active" aria-current="page"><span class="page-link">2</span></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#" rel="next" aria-label="Siguiente &raquo;">&rsaquo;</a></li>
    </ul>

  </div>

  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
    page = 'solution';
  @parent

@endsection
