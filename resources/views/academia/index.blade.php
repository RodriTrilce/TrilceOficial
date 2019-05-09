{{! $breadcrumbs = Breadcrumbs::render('academia-index') }}
@extends('academia.layouts.template')
@section('title', '')
@section('content')

@include('academia.partials.modal.all')

  <div class="banner__loader">
    <div class="banner__loader-title"></div>
    <div class="banner__loader-line"></div>
    <div class="banner__loader-line"></div>
  </div>

  <div class="index-banners index-banners--colegio">
    {{--@include('academia.partials.banners.all')--}}

      @foreach ($banners as $banner)
        @if( (strtotime($banner->start) < time()) && (strtotime($banner->expire) > time()) )

          {!! $banner->content !!}

        @endif
      @endforeach

  </div>


  <div class="nuevos-i" id="inicios">
    <div class="row center-xs">
      <div class="col-xs-9 col-sm-11 col-md-10 start-xs nuevos-i-title">
        <div class="box">
          <h2>Inicios</h2>
          <p>Elige la preparación preuniversitaria exclusiva que estás buscando.</p>
        </div>
      </div>

      <div class="row nuevos-i-box col-xs-12 col-sm-11 col-md-10 col-lg-9 between-xs center-sm center-md center-lg block-effecthover">
        <div class="col-xs block-effecthover-item">
          <a href="/academia/preparacion-uni">
            <div class="nuevos-i-top">
              <img src="/static/images/academia/svg/logo-uni.svg" alt="UNI">
              <h4>Preparación</h4>
              <h3>UNI</h3>
            </div>
          </a>
        </div>
        <div class="col-xs block-effecthover-item">
          <a href="/academia/preparacion-san-marcos">
            <div class="nuevos-i-top">
              <img src="/static/images/academia/svg/logo-unmsm.svg" alt="UNMSM">
              <h4>Preparación</h4>
              <h3>San Marcos</h3>
            </div>
          </a>
        </div>
        <div class="col-xs block-effecthover-item">
          <a href="/academia/preparacion-pucp">
            <div class="nuevos-i-top">
              <img src="/static/images/academia/svg/logo-pucp.svg" alt="PUCP">
              <h4>Preparación</h4>
              <h3>Católica</h3>
            </div>
          </a>
        </div>
      </div>

    </div>
  </div>


@include('academia.partials.card_bottom')
@endsection
@section('scripts')
    page = 'index';

    var modal_open = [

    @if(!session('enrollment') && !session('contact') && !session('olympics'))
      '#modal-ads',
    @endif

    @if(session('enrollment'))
      '#modal-1',
    @endif

    @if(session('contact'))
      '#modal-1',
    @endif

    @if(session('olympics'))
      '#modal-1'
    @endif

    ];

    @parent

@endsection
