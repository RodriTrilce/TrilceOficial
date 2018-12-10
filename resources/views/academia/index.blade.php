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
                <div class="row col-xs-12 center-xs">
                  <img src="{{url('/static/images/academia/svg/icon-thanks-enrolltment.svg')}}" class="finish-thanks" alt="Gracias por inscribirse">
                </div>
              <br>
              <h1 class="finish-title">Gracias por registrarte.</h1>
            </div>
            <div class="col-xs-12">
              <p class="finish-text">
                Para inscribirte, acércate con tu ficha de inscripción y tu DNI a la sede de tu preferencia.
                <br>
                Descarga tu ficha de inscripción aquí: </p>
            </div>
            <div class="col-xs-12 finish-button-container">
              <form action="/academia/preinscripcion/descargar-pdf" method="post" target="_blank">
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
              <p class="finish-text">Nos pondremos en contacto contigo a la brevedad.</p>
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

  <div class="index-banners index-banners--colegio">

    <div data-title="primer puesto pucp Jimm">
        <div
        class="
          banner__item
          banner__item--left
          "
          data-shadow="9"
          data-shadow-opacity=".1"
          data-bordercolor="white"
          data-border-referer=".banner__style_primer__a"
          data-border-referer-xs=".banner__style_primer-reverse"


          style="
            background-color: #f4633a;
          ">


        <div class="banner_box-bar" style="width:10px; z-index:11;"></div>
        <div class="banner__box banner__box--academia"  style="border-color:white;border-width:10px; z-index:11;">
          <svg class="t_de_trilce_svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 200 200" enable-background="new 0 0 200 200" xml:space="preserve">
          <polygon points="17.5,10 17.5,50.6 43.7,50.6 43.7,40 83.8,40 83.8,163.8 71.8,163.8 71.8,190 128.5,190
            128.5,163.8 116.4,163.8 116.4,40 156.5,40 156.5,50.6 182.5,50.6 182.5,10 "/>
          </svg>
        </div>

        <div
        class="banner__image"

        data-image-md="/storage/static/images/banner/ogro/banner_20_nov_computo_jim-500x500.png"
        data-position-md="90% bottom"
        data-size-md="hidden"

        data-image-xs="/storage/static/images/banner/ogro/banner_20_nov_computo_jim-250x250.png"
        data-position-xs="120% bottom"
        data-size-xs="75%"

        data-position-xs-landscape = "80% bottom"
        data-size-xs-landscape="50vw"



        style="
        background-repeat: no-repeat;
        z-index: 12;
        "></div>

        <div class="
        banner__content

        " style="z-index:13;">
          <div class="banner__style_primer  xs-hide">
            <div class="banner__style_primer__a">
              <div class="banner__title">
                <span>¡Máximo<br>puntaje!</span>
              </div>
              <div class="banner__subtitle">
                <span class="normal">
                  Jimm Cisneros<br>
                </span>
                <span class="small">
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
                  PUESTO 2019 POP
                </span>

              </div>

              <div class="banner__style_primer__text">
                <span>Católica</span>
              </div>

            </div>
            <div class="banner__style_primer__img"
            data-banner-img-position="top"
            >

              <picture>
                <source media="(max-width: 767px)" srcset="/storage/static/images/banner/ogro/banner_20_nov_computo_jim-250x250.png">
                <img  src="/storage/static/images/banner/ogro/banner_20_nov_computo_jim-500x500.png"
                      alt="">
              </picture>

            </div>
          </div>
          <div class="banner__style_primer-reverse banner__style_primer--colegio">

            <div class="banner__title">
              <span>1.<sup>er</sup> puesto<br>Católica</span>
            </div>
            <div class="banner__subtitle">
              <span class="normal">
                PUCP POP 2019<br>
              </span>
              <span class="small">
                Jimm Cisneros
              </span>
            </div>

          </div>
       </div>

      </div>
    </div>


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

        data-image-md="https://i.ibb.co/KxptG5D/vacante-2.png"
        data-position-md="center"
        data-size-md="cover"

        data-image-xs="/storage/static/images/banner/ogro/banner_callenrollment_23_octubre_2018_small.png"
        data-position-xs="center"
        data-size-xs="cover"

        style="
        background-repeat: no-repeat;
        z-index: 8;
        "></div>

        <div class="banner_box-bar " style="width:10px; z-index: 10;"></div>
        <div class="banner__box banner__box--academia"  style="border-color:white;border-width:10px; z-index: 10;">
          <svg class="t_de_trilce_svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          	 viewBox="0 0 200 200" enable-background="new 0 0 200 200" xml:space="preserve">
          <polygon points="17.5,10 17.5,50.6 43.7,50.6 43.7,40 83.8,40 83.8,163.8 71.8,163.8 71.8,190 128.5,190
          	128.5,163.8 116.4,163.8 116.4,40 156.5,40 156.5,50.6 182.5,50.6 182.5,10 "/>
          </svg>
        </div>

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
                <a href="/inscripcion-academia/" target="_blank">Regístrate aquí</a>
              </button>
            </span>
          </div>
        </div>

      </div>
    </div>


    <div data-title="primer puesto uni - velarde">
        <div
        class="
          banner__item
          banner__item--left
          "
          data-shadow="9"
          data-shadow-opacity=".1"
          data-bordercolor="white"
          data-border-referer=".banner__style_primer__a"
          data-border-referer-xs=".banner__style_primer-reverse"


          style="
            background-color: #f4633a;
          ">


        <div class="banner_box-bar" style="width:10px; z-index:11;"></div>
        <div class="banner__box banner__box--academia"  style="border-color:white;border-width:10px; z-index:11;">
          <svg class="t_de_trilce_svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 200 200" enable-background="new 0 0 200 200" xml:space="preserve">
          <polygon points="17.5,10 17.5,50.6 43.7,50.6 43.7,40 83.8,40 83.8,163.8 71.8,163.8 71.8,190 128.5,190
            128.5,163.8 116.4,163.8 116.4,40 156.5,40 156.5,50.6 182.5,50.6 182.5,10 "/>
          </svg>
        </div>

        <div
        class="banner__image"

        data-image-md="/storage/static/images/banner/ogro/banner_10_dic_2018_uni-chica-500x500.png"
        data-position-md="90% bottom"
        data-size-md="hidden"

        data-image-xs="/storage/static/images/banner/ogro/banner_10_dic_2018_uni-chica-250x250.png"
        data-position-xs="120% bottom"
        data-size-xs="75%"

        data-position-xs-landscape = "80% bottom"
        data-size-xs-landscape="50vw"



        style="
        background-repeat: no-repeat;
        z-index: 12;
        "></div>

        <div class="
        banner__content

        " style="z-index:13;">
          <div class="banner__style_primer  xs-hide">
            <div class="banner__style_primer__a">
              <div class="banner__title">
                <span>¡Máximo<br>puntaje!</span>
              </div>
              <div class="banner__subtitle">
                <span class="normal">
                  Daniela Velarde<br>
                </span>
                <span class="normal">
                  Examen Escolares<br>
                </span>
                <span class="small">
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
                  PUESTO UNI 2019-1
                </span>

              </div>

              <div class="banner__style_primer__text">
                <span>UNI</span>
              </div>

            </div>
            <div class="banner__style_primer__img"
            data-banner-img-position="top"
            >

              <picture>
                <source media="(max-width: 767px)" srcset="/storage/static/images/banner/ogro/banner_10_dic_2018_uni-chica-250x250.png">
                <img  src="/storage/static/images/banner/ogro/banner_10_dic_2018_uni-chica-500x500.png"
                      alt="">
              </picture>

            </div>
          </div>
          <div class="banner__style_primer-reverse banner__style_primer--colegio">

            <div class="banner__title">
              <span>1.<sup>er</sup> puesto</span>
            </div>
            <div class="banner__subtitle">
              <span class="normal">
                UNI 2019-1<br>
              </span>
              <span class="small">
                Daniela Velarde
              </span>
            </div>

          </div>
       </div>

      </div>
    </div>


<!--


    <div data-title="ciclo repaso">
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

        data-image-md="/storage/static/images/banner/ogro/banner_9_nov_ciclo_repaso-500x500.png"
        data-position-md="center"
        data-size-md="cover"

        data-image-xs="/storage/static/images/banner/ogro/banner_9_nov_ciclo_repaso-250x250.png"
        data-position-xs="center"
        data-size-xs="cover"

        style="
        background-repeat: no-repeat;
        z-index: 8;
        "></div>

        <div class="banner_box-bar " style="width:10px; z-index: 10;"></div>
        <div class="banner__box banner__box--academia"  style="border-color:white;border-width:10px; z-index: 10;">
          <svg class="t_de_trilce_svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          	 viewBox="0 0 200 200" enable-background="new 0 0 200 200" xml:space="preserve">
          <polygon points="17.5,10 17.5,50.6 43.7,50.6 43.7,40 83.8,40 83.8,163.8 71.8,163.8 71.8,190 128.5,190
          	128.5,163.8 116.4,163.8 116.4,40 156.5,40 156.5,50.6 182.5,50.6 182.5,10 "/>
          </svg>
        </div>

        <div class="
        banner__content
        banner__content--mobile-padding-left
        " style="z-index:11;">
          <div class="banner__title">
            <span>Ciclo Repaso</span>
          </div>
          <div class="banner__subtitle">
            <span class="normal">
              UNI - San Marcos - PUCP<br>
            </span>
            <span style="display:block;margin-top: 20px; margin-bottom:10px;">
              <button class="banner__button-cta banner__button-cta--white">
                <a href="#inicios" target="_blank">10 de diciembre</a>
              </button>
            </span>
          </div>
        </div>

      </div>
    </div>


  -->

    <div data-title="ciclo verano">
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

        data-image-md="/storage/static/images/banner/ogro/banner_9_nov_ciclo_verano-500x500.png"
        data-position-md="center"
        data-size-md="cover"

        data-image-xs="/storage/static/images/banner/ogro/banner_9_nov_ciclo_verano-250x250.png"
        data-position-xs="center"
        data-size-xs="cover"

        style="
        background-repeat: no-repeat;
        z-index: 8;
        "></div>

        <div class="banner_box-bar " style="width:10px; z-index: 10;"></div>
        <div class="banner__box banner__box--academia"  style="border-color:white;border-width:10px; z-index: 10;">
          <svg class="t_de_trilce_svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          	 viewBox="0 0 200 200" enable-background="new 0 0 200 200" xml:space="preserve">
          <polygon points="17.5,10 17.5,50.6 43.7,50.6 43.7,40 83.8,40 83.8,163.8 71.8,163.8 71.8,190 128.5,190
          	128.5,163.8 116.4,163.8 116.4,40 156.5,40 156.5,50.6 182.5,50.6 182.5,10 "/>
          </svg>
        </div>

        <div class="
        banner__content
        banner__content--mobile-padding-left
        " style="z-index:11;">
          <div class="banner__title">
            <span>Ciclo Verano</span>
          </div>
          <div class="banner__subtitle">
            <span class="normal">
              UNI - San Marcos - PUCP<br>
            </span>
            <span style="display:block;margin-top: 20px; margin-bottom:10px;">
              <button class="banner__button-cta banner__button-cta--white">
                <a href="#inicios" target="_blank">2 de enero</a>
              </button>
            </span>
          </div>
        </div>

      </div>
    </div>


    <div data-title="primer puesto uni leonard">
        <div
        class="
          banner__item
          banner__item--left
          "
          data-shadow="9"
          data-shadow-opacity=".1"
          data-bordercolor="white"
          data-border-referer=".banner__style_primer__a"
          data-border-referer-xs=".banner__style_primer-reverse"


          style="
            background-color: #f4633a;
          ">


        <div class="banner_box-bar" style="width:10px; z-index:11;"></div>
        <div class="banner__box banner__box--academia"  style="border-color:white;border-width:10px; z-index:11;">
          <svg class="t_de_trilce_svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 200 200" enable-background="new 0 0 200 200" xml:space="preserve">
          <polygon points="17.5,10 17.5,50.6 43.7,50.6 43.7,40 83.8,40 83.8,163.8 71.8,163.8 71.8,190 128.5,190
            128.5,163.8 116.4,163.8 116.4,40 156.5,40 156.5,50.6 182.5,50.6 182.5,10 "/>
          </svg>
        </div>

        <div
        class="banner__image"

        data-image-md="/storage/static/images/banner/ogro/banner_uni-ingresante_22_octubre_2018_500x500.png"
        data-position-md="90% bottom"
        data-size-md="hidden"

        data-image-xs="/storage/static/images/banner/ogro/banner_uni-ingresante_22_octubre_2018_250x250.png"
        data-position-xs="110% bottom"
        data-size-xs="65%"

        data-position-xs-landscape = "80% bottom"
        data-size-xs-landscape="50vw"



        style="
        background-repeat: no-repeat;
        z-index: 12;
        "></div>

        <div class="
        banner__content

        " style="z-index:13;">
          <div class="banner__style_primer  xs-hide">
            <div class="banner__style_primer__a">
              <div class="banner__title">
                <span>¡Felicitaciones,<br>Cachimbo!</span>
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
            <div class="banner__style_primer__img"
            data-banner-img-position="top"
            >

              <picture>
                <source media="(max-width: 767px)" srcset="/storage/static/images/banner/ogro/banner_uni-ingresante_22_octubre_2018_250x250.png">
                <img  src="/storage/static/images/banner/ogro/banner_uni-ingresante_22_octubre_2018_500x500.png"
                      alt="">
              </picture>

            </div>
          </div>
          <div class="banner__style_primer-reverse">

            <div class="banner__title">
              <span>1.<sup>er</sup> puesto<br>Católica</span>
            </div>
            <div class="banner__subtitle">
              <span class="normal">
                UNI 2018-II<br>
              </span>
              <span class="small">
                Leonard Panta Ortega
              </span><br>
              <span class="xtrasmall">
                Ingeniería Industrial
              </span>
            </div>

          </div>
       </div>

      </div>
    </div>



    <div data-title="primer puesto san marcos diego">
        <div
        class="
          banner__item
          banner__item--left
          "
          data-shadow="9"
          data-shadow-opacity=".1"
          data-bordercolor="white"
          data-border-referer=".banner__style_primer__a"
          data-border-referer-xs=".banner__style_primer-reverse"


          style="
            background-color: #f4633a;
          ">


        <div class="banner_box-bar" style="width:10px; z-index:11;"></div>
        <div class="banner__box banner__box--academia"  style="border-color:white;border-width:10px; z-index:11;">
          <svg class="t_de_trilce_svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 200 200" enable-background="new 0 0 200 200" xml:space="preserve">
          <polygon points="17.5,10 17.5,50.6 43.7,50.6 43.7,40 83.8,40 83.8,163.8 71.8,163.8 71.8,190 128.5,190
            128.5,163.8 116.4,163.8 116.4,40 156.5,40 156.5,50.6 182.5,50.6 182.5,10 "/>
          </svg>
        </div>

        <div
        class="banner__image"

        data-image-md="/storage/static/images/banner/ogro/banner_san-marcos_ingresante_10_diciembre__academia-500x500.png"
        data-position-md="90% bottom"
        data-size-md="hidden"

        data-image-xs="/storage/static/images/banner/ogro/banner_san-marcos_ingresante_10_diciembre__academia-250x250.png"
        data-position-xs="110% bottom"
        data-size-xs="65%"

        data-position-xs-landscape = "80% bottom"
        data-size-xs-landscape="50vw"



        style="
        background-repeat: no-repeat;
        z-index: 12;
        "></div>

        <div class="
        banner__content

        " style="z-index:13;">
          <div class="banner__style_primer  xs-hide">
            <div class="banner__style_primer__a">
              <div class="banner__title">
                <span>¡Felicitaciones,<br>Cachimbo!</span>
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
            <div class="banner__style_primer__img"
            data-banner-img-position="top"
            >

              <picture>
                <source media="(max-width: 767px)" srcset="/storage/static/images/banner/ogro/banner_san-marcos_ingresante_10_diciembre__academia-500x500.png">
                <img  src="/storage/static/images/banner/ogro/banner_san-marcos_ingresante_10_diciembre__academia-500x500.png"
                      alt="">
              </picture>

            </div>
          </div>
          <div class="banner__style_primer-reverse">

            <div class="banner__title">
              <span>1.<sup>er</sup> puesto<br>Católica</span>
            </div>
            <div class="banner__subtitle">
              <span class="normal">
                San&nbsp;Marcos 2019-I<br>
              </span>

              <span class="small">
                Diego Castillo Utani
              </span><br>
              <span class="xtrasmall">
                Ingeniería Ambiental
              </span>
            </div>

          </div>
       </div>

      </div>
    </div>



    <div data-title="eco trilce">
      <div
      class="
        banner__item
        banner__item--left
        "
      data-shadow="10"
      data-shadow-opacity=".15"
      data-bordercolor="#f4633a"

      style="
        background-color: #fff;
      ">

      <div
      class="banner__image"

      data-image-md="/storage/static/images/banner/ogro/banner_10_dic_2018_medio_ambiente.png"
      data-position-md="right bottom"
      data-size-md="45vw"

      data-image-xs="/storage/static/images/banner/ogro/banner_10_dic_2018_medio_ambiente.png"
      data-position-xs="40vw bottom"
      data-size-xs="85vw"

      style="
      background-repeat: no-repeat;
      z-index: 12;
      "></div>

      <div class="banner_box-bar" style="width:10px; z-index:11;"></div>
      <div class="banner__box"  style="border-color:#f4633a;border-width:10px; z-index:11;">
        <svg class="t_de_trilce_svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="0 0 200 200" enable-background="new 0 0 200 200" xml:space="preserve">
        <polygon fill="#f4633a" points="17.5,10 17.5,50.6 43.7,50.6 43.7,40 83.8,40 83.8,163.8 71.8,163.8 71.8,190 128.5,190
          128.5,163.8 116.4,163.8 116.4,40 156.5,40 156.5,50.6 182.5,50.6 182.5,10 "/>
        </svg>
      </div>

      <div class="banner__content
      banner__content--mobile-padding-left
      " style="z-index:13;">

        <div class="banner__content--md">
          <div class="banner__subtitle">
            <span class="semibig orange font-geo-smbold" style="">
              Reafirmamos nuestro compromiso <br>
              con el planeta y eliminaremos
              progresivamente <br> el uso del
              plástico en nuestras sedes y cafeterías.
            </span>
          </div>
        </div>

        <div class="banner__content--xs">
          <div class="banner__subtitle">
            <span class="semibig orange font-geo-smbold" style="">
              Eliminaremos progresivamente <br>
              el uso del plástico en nuestras sedes.
            </span>
          </div>
        </div>

      </div>

      </div>
    </div>


<!--



-->

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
    @if(session('enrollment'))
      '#modal-1'
    @endif

    @if(session('contact'))
      '#modal-1'
    @endif

    ];

    @parent

@endsection
