{{! $breadcrumbs = Breadcrumbs::render('colegio-index') }}
@extends('colegio.layouts.template')

@section('title', '')

@if($print)
  @section('afterBody')
    <div id="loader-wrapper"><div id="loader" class=""></div><div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
      <div class="loader-trilce">
        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 91.9 100.3'><polygon points='0 0 0 22.6 14.6 22.6 14.6 16.7 36.9 16.7 36.9 85.7 30.2 85.7 30.2 100.3 61.8 100.3 61.8 85.7 55.1 85.7 55.1 16.7 77.4 16.7 77.4 22.6 91.9 22.6 91.9 0 0 0' fill='#f4633a'/></svg>
      </div>
    </div>
  @endsection
@endif

@section('content')

  <!--
  <div class="index-banners">
    @foreach ($banners as $banner)
      @if( (strtotime($banner->start) < time()) && (strtotime($banner->expire) > time()) )

        @if($banner->link)
          <div><a target="_blank" href="{{ $banner->link }}"><img src="{{ $banner->file->fileUrl() }}" alt="{{ $banner->title }}"></a></div>
        @else
          <div><img src="{{ $banner->file->fileUrl() }}" alt="{{ $banner->title }}"></div>
        @endif

      @endif
    @endforeach
  </div>
-->



  <div class="banner__loader">
    <div class="banner__loader-title"></div>
    <div class="banner__loader-line"></div>
    <div class="banner__loader-line"></div>
  </div>
  <div class="index-banners">
    <div>
        <div
        class="
          banner__item
          banner__item--left
          "
        data-shadow="9"
        data-shadow-opacity=".2"
        data-bordercolor="#f4633a"

        style="
          background-color: #ffffff;
        ">

        <div
        class="banner__image banner__image--bg-m-cover banner__image--colegio"
        style="
        background-image:url(http://www.trilce.edu.pe/bg__t.png);
        background-position: right;
        background-repeat: no-repeat;
        background-size: contain;
        z-index: 8;
        "></div>

        <div class="banner_box-bar" style="width:10px; z-index: 10;"></div>
        <div class="banner__box"  style="border-color:#f4633a;border-width:10px; z-index: 10;"></div>

        <div class="banner__content" style="z-index:11;">
          <div class="banner__title">
            <span>San Marcos</span>
          </div>
          <div class="banner__subtitle">
            <span class="normal">
              Ciclo Repaso Semestral<br>
            </span>
            <span class="small">
              24 de septiembre
            </span>
            <span style="display:block;margin: 20px auto;">
              <button class="button_cta1"><a href="/academia/preparacion-san-marcos" class="link">Saber más</a></button>
            </span>
          </div>
        </div>

      </div>
    </div>

<!--    <div>
        <div
        class="
          banner__item
          banner__item--left
          "
        data-shadow="10"
        data-shadow-opacity=".3"
        data-bordercolor="white"

        style="
          background-color: #f4633a;
        ">

        <div
        class="banner__image"

        style="
        background-image:url(http://www.trilce.edu.pe/dd.png);
        background-position: 80% bottom;
        background-repeat: no-repeat;
        background-size: contain;
        z-index: 12;
        "></div>

        <div class="banner_box-bar" style="width:10px; z-index:11;"></div>
        <div class="banner__box"  style="border-color:white;border-width:10px; z-index:11;"></div>

        <div class="banner__content" style="z-index:13;">
          <div class="banner__title">
            <span>1<sup>er</sup> puesto San&nbsp;Marcos</span>
          </div>
          <div class="banner__subtitle">
            <span class="normal">
              Diego Castillo Utani<br>
            </span>
            <span class="small">
              Ingenieria Ambiental
            </span>
          </div>
        </div>

      </div>
    </div>
-->
  </div>

  <div class="nuevos-i container-base">
    <div class="row center-xs">
      <div class="col-xs-12 col-sm-9 col-md-8 start-xs nuevos-i-title">
        <div class="box">
          <h2>Admisión 2019</h2>
          <p>Elige la modalidad que más se adecúe a tus necesidades</p>
        </div>
      </div>

      <div class="row col-xs-12 col-sm-10 between-xs center-sm nuevos-i-box nuevos-colegio block-effecthover">
        <div class="col-xs block-effecthover-item">
          <a href="/colegio/admision-nuevo">
            <div class="nuevos-i-top">
              <img src="{{ url('static/images/colegio/svg/ico-admision-01.svg') }}" alt="UNI">
              <h3>Alumno <div class="modality modality-blue">nuevo</div></h3>
            </div>
          </a>
        </div>
        <div class="col-xs block-effecthover-item">
          <a href="/colegio/admision-traslado">
            <div class="nuevos-i-top">
              <img src="{{ url('static/images/colegio/svg/ico-admision-02.svg') }}" alt="UNMSM">
              <h3>Alumno <div class="modality modality-yellow">traslado</div></h3>
            </div>
          </a>
        </div>
        <div class="col-xs block-effecthover-item">
          <a href="/colegio/admision-regular">
            <div class="nuevos-i-top">
              <img src="{{ url('static/images/colegio/svg/ico-admision-03.svg') }}" alt="PUCP">
              <h3>Alumno <div class="modality modality-orange">regular</div></h3>
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
