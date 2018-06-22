{{! $breadcrumbs = Breadcrumbs::render('colegio-admission', $type) }}
@extends('colegio.layouts.template')
@section('title', 'Admisión ' . $title)
@section('content')

  <div class="header-double-image">
    <div class="row col-xs-12 header-double-image-desk">
      <img src="{{ url('/static/images/colegio/pages-banners/banner-admision.jpg') }}" alt="">
    </div>
    <div class="header-double-image-mobile">
      <img src="{{ url('/static/images/colegio/pages-banners/banner-admision-movil.jpg') }}" alt="">
    </div>
  </div>



  <div class="nuevos-i container-base">
    <div class="row center-xs">

      <div class="row col-xs-12 col-sm-6 col-md-6 between-xs center-sm center-md center-lg nuevos-i-box nuevos-i-force-minus">

        <div class="col-xs @if($type=='nuevo') hover-active hover-blue @endif">
          <a href="/colegio/admision-nuevo">
            <div class="nuevos-i-top">
              <img src="{{ url('static/images/colegio/svg/ico-admision-01.svg') }}" alt="Alumno nuevo">
              <h3>Alumno <br /><div class="modality modality-blue">Nuevo</div></h3>
            </div>
            <div class="nuevos-i-bottom">
              <span>Leer más <i class="fa fa-search"></i></span>
              <div class="nuevos-hr nuevos-hr-blue"></div>
            </div>
          </a>
        </div>

        <div class="col-xs @if($type=='traslado') hover-active hover-yellow @endif">
          <a href="/colegio/admision-traslado">
            <div class="nuevos-i-top">
              <img src="{{ url('static/images/colegio/svg/ico-admision-02.svg') }}" alt="Alumno Traslado">
              <h3>Alumno <br /><div class="modality modality-yellow">Traslado</div></h3>
            </div>
            <div class="nuevos-i-bottom">
              <span>Leer más <i class="fa fa-search"></i></span>
              <div class="nuevos-hr nuevos-hr-yellow"></div>
            </div>
          </a>
        </div>

        <div class="col-xs @if($type=='regular') hover-active hover-orange @endif">
          <a href="/colegio/admision-regular">
            <div class="nuevos-i-top">
              <img src="{{ url('static/images/colegio/svg/ico-admision-03.svg') }}" alt="Alumno Regular">
              <h3>Alumno <br /><div class="modality modality-orange">Regular</div></h3>
            </div>
            <div class="nuevos-i-bottom">
              <span>Leer más <i class="fa fa-search"></i></span>
              <div class="nuevos-hr nuevos-hr-orange"></div>
            </div>
          </a>
        </div>
      </div>

    </div>
  </div>

  @switch($type)
    @case('nuevo')
      @include('colegio.partials.admission.new')
      @break

    @case('traslado')
      @include('colegio.partials.admission.transfer')
      @break

    @case('regular')
      @include('colegio.partials.admission.regular')
      @break
  @endswitch


@include('colegio.partials.card_bottom')

@endsection
@section('scripts')

    page = 'admission';

    @parent
@endsection
