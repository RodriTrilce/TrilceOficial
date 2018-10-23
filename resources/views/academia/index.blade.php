{{! $breadcrumbs = Breadcrumbs::render('academia-index') }}
@extends('academia.layouts.template')

@section('title', '')

{{-- @if($print)
  @section('afterBody')
    <div id="loader-wrapper"><div id="loader"></div><div class="loader-section section-left"></div><div class="loader-section section-right"></div><div class="loader-trilce"><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 91.9 100.3'><polygon points='0 0 0 22.6 14.6 22.6 14.6 16.7 36.9 16.7 36.9 85.7 30.2 85.7 30.2 100.3 61.8 100.3 61.8 85.7 55.1 85.7 55.1 16.7 77.4 16.7 77.4 22.6 91.9 22.6 91.9 0 0 0' fill='#f4633a'/></svg></div></div>
  @endsection
@endif --}}

@section('content')

  @if (session('enrollment'))
    <div id="modal-1" style="display:none;">
      <div class="modal-b50">
        <div class="row col-xs-12 center-xs enrollment-finish">
            <div class="col-xs-12">
              <h1 class="finish-title">Gracias por registrarse <img src="{{url('/static/images/academia/svg/icon-thanks-enrolltment.svg')}}" class="finish-thanks" alt="Gracias por inscribirse"></h1>
            </div>
            <div class="col-xs-12">
              <p class="finish-text">Puede descargar su ficha de inscripción prematrícula aquí: </p>
            </div>
            <div class="col-xs-12 finish-button-container">
              <form action="/academia/prematricula/descargar-pdf" method="post" target="_blank">
                {{ csrf_field() }}
                <input name="token" type="hidden" value="{{ session('dni') }}">
                <button type="submit" class="enrollment-finish--button">
                  <img src="{{url('/static/images/academia/svg/icon-thanks-download-enrollment.svg')}}" alt="">
                </button>
              </form>
            </div>
        </div>
      </div>
    </div>
  @endif

  @if (session('contact'))
    <div id="modal-1" style="display:none;">
      <div class="modal-auto">
        <div class="row col-xs-12 center-xs modal-contact">
            <div class="col-xs-12">
              <h1 class="finish-title">{{ucwords(session('name'))}}, gracias por escribirnos <img src="{{url('/static/images/academia/svg/icon-thanks-enrolltment.svg')}}" class="finish-thanks" alt="Gracias por contactarnos"></h1>
            </div>
            <div class="col-xs-12">
              <p class="finish-text">Nos pondremos en contacto con usted en la brevedad.</p>
            </div>
        </div>
      </div>
    </div>
  @endif

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
    <div data-title="no te quedes sin vacante">
        <div
        class="
          banner__item
          banner__item--left
          "
        data-shadow="9"
        data-bordercolor="white"

        style="
          background-color: #f4633a;
        ">

        <div
        class="banner__image"

        data-image-md="/storage/static/images/banner/ogro/banner_callenrollment_23_octubre_2018_gigant.png"
        data-position-md="center"
        data-size-md="cover"

        data-image-xs="/storage/static/images/banner/ogro/banner_callenrollment_23_octubre_2018_small.png"
        data-position-xs="center"
        data-size-xs="cover"

        style="
        background-repeat: no-repeat;
        z-index: 8;
        "></div>

        <div class="banner_box-bar" style="width:10px; z-index: 10;"></div>
        <div class="banner__box"  style="border-color:white;border-width:10px; z-index: 10;"></div>

        <div class="
        banner__content
        banner__content--mobile-padding-left
        " style="z-index:11;">
          <div class="banner__title">
            <span>No te quedes sin vacante</span>
          </div>
          <div class="banner__subtitle">
            <span class="normal">
              Nuevos ciclos e incorporaciones disponibles<br>
            </span>
            <span style="display:block;margin-top: 20px; margin-bottom:10px;">
              <button class="banner__button-cta banner__button-cta--white">
                <a href="/academia/preparacion-san-marcos">Regístrate aquí</a>
              </button>
            </span>
          </div>
        </div>

      </div>
    </div>
    <div data-title="San Marcos ciclo repaso">
        <div
        class="
          banner__item
          banner__item--left
          "
        data-shadow="9"
        data-shadow-opacity=".0"
        data-bordercolor="white"

        style="
          background-color: #f4633a;
        ">

        <style media="screen">
          @media (max-width: 767px){
            .bn1{
                filter: opacity(.3);
            }
          }
        </style>
        <div
        class="banner__image bn1"

        data-image-md="/storage/static/images/banner/ogro/banner_academia-nuevos_23_octubre_2018_gigant.png"
        data-position-md="right bottom"
        data-size-md="50% 100%"

        data-image-xs="/storage/static/images/banner/ogro/banner_academia-nuevos_23_octubre_2018_gigant.png"
        data-position-xs="right"
        data-size-xs="cover"

        style="
        background-repeat: no-repeat;
        z-index: 8;
        "></div>

        <div class="banner_box-bar" style="width:10px; z-index: 10;"></div>
        <div class="banner__box"  style="border-color:white;border-width:10px; z-index: 10;"></div>

        <div class="
        banner__content
        banner__content--mobile-padding-left
        " style="z-index:11;">
          <div class="banner__title">
            <span>San Marcos</span>
          </div>
          <div class="banner__subtitle">
            <span class="normal">
              Ciclo Repaso Semestral<br>
            </span>
            <span class="small">
              Incorporaciones
            </span>
            <span style="display:block;margin: 20px auto;">
              <button class="banner__button-cta banner__button-cta--white">
                <a href="/academia/preparacion-san-marcos">Saber más</a>
              </button>
            </span>
          </div>
        </div>

      </div>
    </div>
    <div data-title="primer puesto san marcos">
        <div
        class="
          banner__item
          banner__item--left
          "
          data-shadow="9"
          data-shadow-opacity=".1"
          data-bordercolor="white"

          style="
            background-color: #f4633a;
          ">

        <div
        class="banner__image"

        data-image-md="http://www.trilce.edu.pe/dd.png"
        data-position-md="80% bottom"
        data-size-md="contain"

        data-image-xs="http://www.trilce.edu.pe/dd.png"
        data-position-xs="80% bottom"
        data-size-xs="80%"

        style="
        background-repeat: no-repeat;
        z-index: 12;
        "></div>

        <div class="banner_box-bar" style="width:10px; z-index:11;"></div>
        <div class="banner__box"  style="border-color:white;border-width:10px; z-index:11;"></div>

        <div class="
        banner__content
        " style="z-index:13;">
          <div class="banner__style_primer xs-hide">
          <div class="banner__style_primer__a">
            <div class="banner__title">
              <span>¡Felicitaciones<br>Cachimbo!</span>
            </div>
            <div class="banner__subtitle">
              <span class="normal">
                Diego Castillo Utani<br>
              </span>
              <span class="small">
                Ingeniería Ambiental
              </span>

            </div>
          </div>

          <div class="banner__style_primer__b">

            <div class="banner__style_primer__number">
              <span class="number">
                1<sup>er</sup>
                <br>
              </span>
              <span class="banner__style_primer__number-puesto">
                PUESTO 2019-I
              </span>

            </div>

            <div class="banner__style_primer__text">
              <span>San&nbsp;Marcos</span>
            </div>

          </div>

        </div>
          <div class="banner__style_primer-reverse">
            <div class="banner__title">
              <span>1.<sup>er</sup> puesto<br>San&nbsp;Marcos</span>
            </div>
            <div class="banner__subtitle">
              <span class="normal">
                Diego Castillo Utani<br>
              </span>
              <span class="small">
                Ingeniería Ambiental
              </span>
            </div>
          </div>
       </div>

      </div>
    </div>
    <div data-title="primer puesto uni">
        <div
        class="
          banner__item
          banner__item--left
          "
          data-shadow="9"
          data-shadow-opacity=".1"
          data-bordercolor="white"

          style="
            background-color: #f4633a;
          ">

        <div
        class="banner__image"

        data-image-md="/storage/static/images/banner/ogro/banner_uni-ingresante_22_octubre_2018_500x500.png"
        data-position-md="80% bottom"
        data-size-md="contain"

        data-image-xs="/storage/static/images/banner/ogro/banner_uni-ingresante_22_octubre_2018_250x250.png"
        data-position-xs="120% bottom"
        data-size-xs="70%"

        style="
        background-repeat: no-repeat;
        z-index: 12;
        "></div>

        <div class="banner_box-bar" style="width:10px; z-index:11;"></div>
        <div class="banner__box"  style="border-color:white;border-width:10px; z-index:11;"></div>

        <div class="
        banner__content
        " style="z-index:13;">
          <div class="banner__style_primer xs-hide">
          <div class="banner__style_primer__a">
            <div class="banner__title">
              <span>¡Felicitaciones<br>Cachimbo!</span>
            </div>
            <div class="banner__subtitle">
              <span class="normal">
                Leonard Panta Ortega<br>
              </span>
              <span class="small">
                Ingeniería Industrial
              </span>

            </div>
          </div>

          <div class="banner__style_primer__b">

            <div class="banner__style_primer__number">
              <span class="number">
                1<sup>er</sup>
                <br>
              </span>
              <span class="banner__style_primer__number-puesto">
                PUESTO 2018-II
              </span>

            </div>

            <div class="banner__style_primer__text">
              <span>UNI</span>
            </div>

          </div>

        </div>
          <div class="banner__style_primer-reverse">
            <div class="banner__title">
              <span>1.<sup>er</sup> puesto<br>UNI</span>
            </div>
            <div class="banner__subtitle">
              <span class="normal">
                Leonard Panta Ortega<br>
              </span>
              <span class="small">
                Ingeniería Industrial
              </span>
            </div>
          </div>
       </div>

      </div>
    </div>
    <div data-title="primer puesto pucp">
        <div
        class="
          banner__item
          banner__item--left
          "
          data-shadow="9"
          data-shadow-opacity=".1"
          data-bordercolor="white"

          style="
            background-color: #f4633a;
          ">

        <div
        class="banner__image"

        data-image-md="/storage/static/images/banner/ogro/banner_pucp-ingresante_22_octubre_2018_500x500.png"
        data-position-md="80% bottom"
        data-size-md="contain"

        data-image-xs="/storage/static/images/banner/ogro/banner_pucp-ingresante_22_octubre_2018_250x250.png"
        data-position-xs="110% bottom"
        data-size-xs="65%"

        style="
        background-repeat: no-repeat;
        z-index: 12;
        "></div>

        <div class="banner_box-bar" style="width:10px; z-index:11;"></div>
        <div class="banner__box"  style="border-color:white;border-width:10px; z-index:11;"></div>

        <div class="
        banner__content
        " style="z-index:13;">
          <div class="banner__style_primer xs-hide">
          <div class="banner__style_primer__a">
            <div class="banner__title">
              <span>¡Felicitaciones<br>Cachimbo!</span>
            </div>
            <div class="banner__subtitle">
              <span class="normal">
                Santiago Mendoza<br>
              </span>
              <span class="small">
                Arquitectura
              </span>

            </div>
          </div>

          <div class="banner__style_primer__b">

            <div class="banner__style_primer__number">
              <span class="number">
                1<sup>er</sup>
                <br>
              </span>
              <span class="banner__style_primer__number-puesto">
                PUESTO 2018-II
              </span>

            </div>

            <div class="banner__style_primer__text">
              <span>PUCP</span>
            </div>

          </div>

        </div>
          <div class="banner__style_primer-reverse banner__style_primer--colegio">
            <div class="banner__title">
              <span>1.<sup>er</sup> puesto<br>PUCP</span>
            </div>
            <div class="banner__subtitle">
              <span class="normal">
                Santiago Mendoza<br>
              </span>
              <span class="small">
                Arquitectura
              </span>
            </div>
          </div>
       </div>

      </div>
    </div>
  </div>

  <div class="nuevos-i">
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
              <h3>PUCP</h3>
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
    @if(session('enrollment'))
      '#modal-1'
    @endif

    @if(session('contact'))
      '#modal-1'
    @endif

    ];

    @parent

@endsection
