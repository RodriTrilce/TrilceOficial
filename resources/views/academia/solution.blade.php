{{! $breadcrumbs = Breadcrumbs::render('academia-solutions', $university->short_name) }}
@extends('academia.layouts.template')
@section('title', 'Solucionarios de '. $university->name)
@section('content')

  <div class="header-double-top">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6"></div>
      <div class="col-xs-12 col-sm-12 col-md-6 header-double-w-1"></div>
      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>Solucionarios</h1>
        <p class="header-double-p-up soluion-header-p">Los exámenes de admisión resueltos de UNI, UNMSM y PUCP.</p>
      </div>
    </div>
  </div>

  <div class="nuevos-i nuevos-i-force-minus container-base">
    <div class="row center-xs">
      <div class="row nuevos-i-box col-xs-12 col-md-9 col-sm-12 between-xs center-sm center-md center-lg nuevos-i-border">

        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 @if($university->short_name=='UNI') nuevos-i-active @endif">
          <a href="/academia/solucionarios-uni">
            <div class="nuevos-i-top">
              <img src="/static/images/academia/ico-logo-uni.jpg" alt="UNI">
              <h4>Simulacro</h4>
              <h3>UNI</h3>
            </div>
            <div class="nuevos-i-bottom">
              <hr>
              <span>Más información <i class="fa fa-search"></i></span>
            </div>
          </a>
        </div>
        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 @if($university->short_name=='San Marcos') nuevos-i-active @endif">
          <a href="/academia/solucionarios-san-marcos">
            <div class="nuevos-i-top">
              <img src="/static/images/academia/ico-logo-sm.jpg" alt="UNMSM">
              <h4>Simulacro</h4>
              <h3>UNMSM</h3>
            </div>
            <div class="nuevos-i-bottom">
              <hr>
              <span>Más información <i class="fa fa-search"></i></span>
            </div>
          </a>
        </div>
        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 @if($university->short_name=='PUCP') nuevos-i-active @endif">
          <a href="/academia/solucionarios-pucp">
            <div class="nuevos-i-top">
              <img src="/static/images/academia/ico-logo-cato.jpg" alt="PUCP">
              <h4>Simulacro</h4>
              <h3>PUCP</h3>
            </div>
            <div class="nuevos-i-bottom">
              <hr>
              <span>Más información <i class="fa fa-search"></i></span>
            </div>
          </a>
        </div>
        
      </div>
    </div>
  </div>
  
  <div class="row start-xs center-sm solution-h1-title container-base">
    <div class="col-xs-12 col-sm-8 start-xs start-sm">
      <h1 class="solution-h1">
        Descarga los exámenes de admisión resueltos
      </h1>
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
  
  <div class="row center-xs pagination-botton-padding">
    <div class="col-xs-12 pagination">
      <div class="pagination-item">1</div> de 3 | Siguiente
    </div>
  </div>

  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
    page = 'solution';
  @parent

@endsection