{{! $breadcrumbs = Breadcrumbs::render('colegio-index') }}
@extends('colegio.layouts.template')

@section('title', '')
@section('afterBody', $print)
@section('content')

  <div class="index-banners">
    <div><a href="https://www.facebook.com/ColegioTrilce/videos/2145054952176570/" target="_blank"><img src="{{Storage::url('colegio/banners/13071800.png')}}" alt=""></a></div>
    <div><a href="http://www.trilce.edu.pe/colegios/inscripcion-admision2019/" target="_blank"><img src="{{Storage::url('/colegio/banners/24071801.png')}}" alt=""></a></div>
    <div><img src="{{Storage::url('/colegio/banners/24071802.png')}}" alt=""></div>
    <div><a href="/colegio/propuesta-educativa"><img src="{{Storage::url('/colegio/banners/24071803.png')}}" alt=""></a></div>
    <div><a href="http://www.trilce.edu.pe/colegios/inscripcion-admision2019/" target="_blank"><img src="{{Storage::url('colegio/banners/13071803.png')}}" alt=""></a></div>
  </div>

  <div class="nuevos-i container-base">
    <div class="row center-xs">
      <div class="col-xs-12 col-sm-9 col-md-8 start-xs nuevos-i-title">
        <div class="box">
          <h2>Admisión 2019</h2>
          <p>Elija la modalidad que más se adecue a tus necesidades. ¡Alumnos mejor preparados!</p>
        </div>
      </div>

      <div class="row col-xs-12 col-sm-10 between-xs center-sm nuevos-i-box nuevos-colegio block-effecthover">
        <div class="col-xs block-effecthover-item">
          <a href="/colegio/admision-nuevo">
            <div class="nuevos-i-top">
              <img src="{{ url('static/images/colegio/svg/ico-admision-01.svg') }}" alt="UNI">
              <h3>Alumno <div class="modality modality-blue">Nuevo</div></h3>
            </div>
          </a>
        </div>
        <div class="col-xs block-effecthover-item">
          <a href="/colegio/admision-traslado">
            <div class="nuevos-i-top">
              <img src="{{ url('static/images/colegio/svg/ico-admision-02.svg') }}" alt="UNMSM">
              <h3>Alumno <div class="modality modality-yellow">Traslado</div></h3>
            </div>
          </a>
        </div>
        <div class="col-xs block-effecthover-item">
          <a href="/colegio/admision-regular">
            <div class="nuevos-i-top">
              <img src="{{ url('static/images/colegio/svg/ico-admision-03.svg') }}" alt="PUCP">
              <h3>Alumno <div class="modality modality-orange">Regular</div></h3>
            </div>
          </a>
        </div>
      </div>

    </div>
  </div>

  @include('colegio.partials.card_bottom')
@endsection
@section('scripts')

    page = 'index';

    @parent
@endsection
