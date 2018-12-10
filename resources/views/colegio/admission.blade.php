{{! $breadcrumbs = Breadcrumbs::render('colegio-admission', $type) }}
@extends('colegio.layouts.template')
@section('title', 'Admisión ' . $title)
@section('content')

  <div class="header-double-image">
    <div class="row col-xs-12 header-double-image-desk">
      <img src="{{ url('/static/images/colegio/pages-banners/banner-admision.png') }}" alt="">
    </div>
    <div class="header-double-image-mobile">
      <img src="{{ url('/static/images/colegio/pages-banners/banner-admision-movil.png') }}" alt="">
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

@include('colegio.partials.ads')

<div class="nuevos-i container-base">
  <div class="row center-xs">

    <div class="row col-xs-12 col-sm-6 col-md-6 between-xs center-sm center-md center-lg nuevos-i-box nuevos-i-force-minus">

      @if($type!=='nuevo')
      <div class="col-xs hover-blue">
        <a href="/colegio/matricula-nuevo">
          <div class="row nuevos-i-top">
            <div class="col-xs-12 xs-center"><img src="{{ url('static/images/colegio/svg/ico-admision-01.svg') }}" alt="Alumno nuevo"></div>
            <div class="col-xs-12 xs-center"><h3>Alumno <br /><div class="modality modality-blue">nuevo</div></h3></div>
          </div>
        </a>
      </div>
      @endif

      @if($type!=='traslado')
      <div class="col-xs hover-yellow">
        <a href="/colegio/matricula-traslado">
          <div class="row nuevos-i-top">
            <div class="col-xs-12 xs-center"><img src="{{ url('static/images/colegio/svg/ico-admision-02.svg') }}" alt="Alumno Traslado"></div>
            <div class="col-xs-12 xs-center"><h3>Alumno <br /><div class="modality modality-yellow">traslado</div></h3></div>
          </div>
        </a>
      </div>
      @endif

      @if($type!=='regular')
      <div class="col-xs hover-orange">
        <a href="/colegio/matricula-regular">
          <div class="row nuevos-i-top">
            <div class="col-xs-12 xs-center"><img src="{{ url('static/images/colegio/svg/ico-admision-03.svg') }}" alt="Alumno Regular"></div>
            <div class="col-xs-12 xs-center"><h3>Alumno <br /><div class="modality modality-orange">regular (actual)</div></h3></div>
          </div>
        </a>
      </div>
      @endif


    </div>

  </div>
</div>

@include('colegio.partials.card_bottom')

@endsection
@section('scripts')

    page = 'admission';

    @parent
@endsection
