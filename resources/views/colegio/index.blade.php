{{! $breadcrumbs = Breadcrumbs::render('colegio-index') }}
@extends('colegio.layouts.template')

@section('title', '')

{{-- @if($print)
  @section('afterBody')
    <div id="loader-wrapper"><div id="loader" class=""></div><div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
      <div class="loader-trilce">
        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 91.9 100.3'><polygon points='0 0 0 22.6 14.6 22.6 14.6 16.7 36.9 16.7 36.9 85.7 30.2 85.7 30.2 100.3 61.8 100.3 61.8 85.7 55.1 85.7 55.1 16.7 77.4 16.7 77.4 22.6 91.9 22.6 91.9 0 0 0' fill='#f4633a'/></svg>
      </div>
    </div>
  @endsection
@endif --}}

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

  <div class="index-banners index-banners--colegio">


    <div data-title="admision 2019">
        <div
        class="
        banner__item
        banner__item--left
        "
        data-shadow="9"
        data-shadow-opacity=".15"
        data-bordercolor="#f4633a"

        style="
        background-color: #ffffff;
        ">

        <div
        class="banner__image"

        data-image-md="/storage/static/images/banner/ogro/banner_8_nov_matricula-500x500.png"
        data-position-md="80% bottom"
        data-size-md="contain"

        data-image-xs="/storage/static/images/banner/ogro/banner_8_nov_matricula-250x250.png"
        data-position-xs="bottom right"
        data-size-xs="58vw"

        data-position-xs-landscape="80% bottom"
        data-size-xs-landscape="45vw"


        style="
        background-repeat: no-repeat;
        z-index: 11;
        "></div>

        <div class="banner_box-bar" style="width:10px; z-index: 10;"></div>
        <div class="banner__box"  style="border-color:#f4633a;border-width:10px; z-index: 10;">
          <svg class="t_de_trilce_svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          viewBox="0 0 200 200" enable-background="new 0 0 200 200" xml:space="preserve">
          <polygon points="17.5,10 17.5,50.6 43.7,50.6 43.7,40 83.8,40 83.8,163.8 71.8,163.8 71.8,190 128.5,190
          128.5,163.8 116.4,163.8 116.4,40 156.5,40 156.5,50.6 182.5,50.6 182.5,10 "/>
        </svg>
      </div>

      <div class="banner__content
      banner__content--colegio
      banner__content--mobile-padding-left
      " style="z-index:11;">
      <div class="banner__title">
        <span>
          <style>
          .b1__birrete{
            max-width: 70px;
            fill: #f4633a;
            display: block;
            position: relative;
            left: -12px;
          }

          @media (max-width: 765px){
            .b1__birrete{
              left: 0;
              max-width: 30px;
              padding-top: 5px;
              padding-bottom: 5px;
            }
          }
        </style>

        <svg version="1.1" class="b1__birrete" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 200 121.2" enable-background="new 0 0 200 121.2" xml:space="preserve">
        <path d="M0.7,42.3c0,4.4,2.7,8.3,6.8,9.7l32.9,11.2l0,40.2c0,15.1,45.6,16.3,59.6,16.3s59.6-1.2,59.5-16.3l0-40.2
        l14.9-5.1l0,13.5l-9.4,19.3l8.9,4.6l5.5-11.3l5.5,11.3l8.9-4.6l-9.4-19.3l0-16.9l8.1-2.8c4.1-1.4,6.8-5.3,6.8-9.7
        c0-4.4-2.7-8.3-6.8-9.7L103.1,2c-1-0.3-2.1-0.5-3.1-0.5c-1.1,0-2.1,0.2-3.1,0.5L7.5,32.6C3.5,34,0.7,37.9,0.7,42.3z M50.4,46.9
        c3.4-2.6,20.7-7.2,49.6-7.2c29,0,46.2,4.5,49.6,7.1l0,46.5c-14.2-5.7-39.8-6.2-49.6-6.2c-9.9,0-35.4,0.6-49.6,6.3L50.4,46.9z
        M52.3,103.4c6-2.6,22.3-6.1,47.7-6.1c25.4,0,41.8,3.5,47.8,6.1c-6,2.6-22.3,6.1-47.7,6.1C74.6,109.5,58.3,106,52.3,103.4z
        M10.7,42.3L100,11.7l89.3,30.5l-29.8,10.2l0-6.6c0-15.1-45.6-16.3-59.6-16.3s-59.6,1.2-59.5,16.3l0,6.6L10.7,42.3z"/>
      </svg>


      </span>

      <span>
      {{-- <i class="fa fa-graduation-cap"></i>
      <br> --}}
      Matrícula 2019
      </span>
      </div>
      <div class="banner__subtitle">
      <span class="normal">
      ¡Separa la vacante de tu <strong>hijo</strong>!<br>
      </span>
      <span style="display:block;margin: 20px auto;">
      <button class="banner__button-cta banner__button-cta--orange"><a href="/matricula-2019">Regístrate aquí</a></button>
      </span>
      </div>
      </div>

      </div>
    </div>
    <div data-title="primer puesto pucp Jimm">
          <div
          class="
            banner__item
            banner__item--left
            "
            data-shadow="9"
            data-shadow-opacity=".15"
            data-bordercolor="#f4633a"
            data-border-referer=".banner__style_primer__a"
            data-border-referer-xs=".banner__style_primer-reverse"


            style="
              background-color: #ffffff;
            ">

          <div class="banner_box-bar" style="width:10px; z-index:11;"></div>
          <div class="banner__box"  style="border-color:#f4633a;border-width:10px; z-index:11;">
            <svg class="t_de_trilce_svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 200 200" enable-background="new 0 0 200 200" xml:space="preserve">
            <polygon points="17.5,10 17.5,50.6 43.7,50.6 43.7,40 83.8,40 83.8,163.8 71.8,163.8 71.8,190 128.5,190
              128.5,163.8 116.4,163.8 116.4,40 156.5,40 156.5,50.6 182.5,50.6 182.5,10 "/>
            </svg>
          </div>

          <div
          class="banner__image"

          data-image-md="/storage/static/images/banner/ogro/banner_10_dic_computo_jim-500x500.png"
          data-position-md="90% bottom"
          data-size-md="hidden"

          data-image-xs="/storage/static/images/banner/ogro/banner_10_dic_computo_jim-250x250.png"
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
          banner__content--colegio
          " style="z-index:13;">
            <div class="banner__style_primer banner__style_primer--colegio xs-hide">
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
                  <source media="(max-width: 767px)" srcset="/storage/static/images/banner/ogro/banner_10_dic_computo_jim-250x250.png">
                  <img  src="/storage/static/images/banner/ogro/banner_10_dic_computo_jim-500x500.png"
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
                  2019 POP<br>
                </span>
                <span class="small">
                  Jimm Cisneros
                </span>
              </div>

            </div>
         </div>

        </div>
      </div>
    <div data-title="primer puesto uni velarde">
          <div
          class="
            banner__item
            banner__item--left
            "
            data-shadow="9"
            data-shadow-opacity=".15"
            data-bordercolor="#f4633a"
            data-border-referer=".banner__style_primer__a"
            data-border-referer-xs=".banner__style_primer-reverse"


            style="
              background-color: #ffffff;
            ">

          <div class="banner_box-bar" style="width:10px; z-index:11;"></div>
          <div class="banner__box"  style="border-color:#f4633a;border-width:10px; z-index:11;">
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
          banner__content--colegio
          " style="z-index:13;">
            <div class="banner__style_primer banner__style_primer--colegio xs-hide">
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
                    PUESTO 2019-1
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
                <span>1.<sup>er</sup> puesto<br>UNI</span>
              </div>
              <div class="banner__subtitle">
                <span class="normal">
                  2019-1<br>
                </span>
                <span class="small">
                  Daniela Velarde
                </span>
                <span class="normal">
                  <br>Examen Escolares<br>
                </span>
              </div>

            </div>
         </div>

        </div>
      </div>
    <div data-title="vacaciones utiles">
          <div
            class="
              banner__item
              banner__item--left
              "
              data-shadow="9"
              data-shadow-opacity=".15"
              data-bordercolor="#f4633a"
              data-border-referer=".banner__style_primer__a"
              data-border-referer-xs=".banner__style_primer__a"


              style="
                background-color: #ffffff;
              ">

          <div class="banner_box-bar" style="width:10px; z-index:11;"></div>
          <div class="banner__box"  style="border-color:#f4633a;border-width:10px; z-index:11;">
            <svg class="t_de_trilce_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 200 200" enable-background="new 0 0 200 200" xml:space="preserve">
            <polygon points="17.5,10 17.5,50.6 43.7,50.6 43.7,40 83.8,40 83.8,163.8 71.8,163.8 71.8,190 128.5,190
              128.5,163.8 116.4,163.8 116.4,40 156.5,40 156.5,50.6 182.5,50.6 182.5,10 "/>
            </svg>
          </div>

          <div
          class="banner__image"

          data-image-md=""
          data-position-md="90% bottom"
          data-size-md="hidden"

          data-image-xs=""
          data-position-xs="110% bottom"
          data-size-xs="hidden"

          data-position-xs-landscape = "80% bottom"
          data-size-xs-landscape="50vw"



          style="
          background-repeat: no-repeat;
          z-index: 12;
          "></div>

          <div class="
          banner__content
          banner__content--colegio
          " style="z-index:13;">

          <style>
          .banner__svg_vacaciones_utiles{
            width: 100%;
            max-width: 300px;
            min-width: 250px;
          }

          .banner__style_vacaciones_left_content{
            text-align: center;
            min-width: 290px;
            padding-right: 15px;
          }

          .banner__style_vacaciones_left_content .banner__propuesta-educativa__title{
            font-size: 1.6rem;
          }

          .banner__style_primer__img_varios__vacaciones_utiles picture img {
            width: 100%;
            max-width: 680px !important;
          }

          @media (max-width: 767px){
           .banner__title span{
              font-size: 1.2rem !important;
            }
          }

          @media (max-width: 767px){
            .banner__svg_vacaciones_utiles{
              max-width: 150px;
              min-width: 130px;
            }

            .banner__style_vacaciones_left_content{
              min-width: 170px;
            }

           .banner__style_vacaciones_left_content .banner__propuesta-educativa__title{
              font-size: 1.2rem !important;
            }
          }
          </style>

            <div class="banner__style_primer banner__style_primer--colegio banner__style_primer__mobile-container">

              <div class="banner__style_primer__a">
                <div class="banner__title">
                  <svg version="1.1" class="banner__svg_vacaciones_utiles" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  	 viewBox="0 0 281.2 242" enable-background="new 0 0 281.2 242" xml:space="preserve">
                      <g>
                      	<g>
                      		<path fill="#FF6336" d="M23.9,132.2v4.7h-2.7l6.3,18.5c0.6,1.6,0.8,2.6,1,4h0.1c0.2-1.4,0.6-2.7,0.9-3.7L36,137h-3.3v-4.7h12.6
                      			v4.7h-2.5l-10.9,27.8h-7.6L13.4,137h-2.6v-4.7H23.9z"/>
                      		<path fill="#FF6336" d="M65.4,160h2.7v4.7H60c0-2.4,0-3.6,0.3-4.8h-0.1c-1.6,3.7-3.9,5.4-7.9,5.4c-5,0-8.1-2.8-8.1-7.1
                      			c0-2.3,1.1-4.6,3.3-5.9c2.3-1.4,6.1-1.8,9.2-1.8l2.8,0v-0.8c0-4.1-1.4-5-4.5-5c-1,0-3,0.3-4.1,0.7v3.2h-5.6v-6.2
                      			c2.8-1.5,6.6-2.5,9.7-2.5c7.2,0,10.6,2.7,10.6,9.6C65.7,153.3,65.6,156.5,65.4,160z M59.4,154.4h-2c-4.3,0-6.8,0.8-6.8,3.2
                      			c0,1.4,1,2.9,3.6,2.9C57.4,160.5,59.4,158.3,59.4,154.4z"/>
                      		<path fill="#FF6336" d="M91.6,148.1H86v-3.2c-1.1-0.2-1.5-0.3-2.2-0.3c-3.8,0-6.1,3.2-6.1,7.3c0,4.9,2.8,8.1,7.7,8.1
                      			c2.1,0,4.1-0.4,6.1-1.3l-0.4,5.5c-2.6,0.9-3.6,1.2-7.2,1.2c-8,0-12.7-5.2-12.7-12.7c0-7.8,5-12.7,12.8-12.7c2.9,0,5.3,0.5,7.6,1.2
                      			V148.1z"/>
                      		<path fill="#FF6336" d="M116.2,160h2.7v4.7h-8.2c0-2.4,0-3.6,0.3-4.8H111c-1.6,3.7-3.9,5.4-7.9,5.4c-5,0-8.1-2.8-8.1-7.1
                      			c0-2.3,1.1-4.6,3.3-5.9c2.3-1.4,6.1-1.8,9.2-1.8l2.8,0v-0.8c0-4.1-1.4-5-4.5-5c-1,0-3,0.3-4.1,0.7v3.2h-5.6v-6.2
                      			c2.8-1.5,6.6-2.5,9.7-2.5c7.2,0,10.6,2.7,10.6,9.6C116.4,153.3,116.3,156.5,116.2,160z M110.2,154.4h-2c-4.3,0-6.8,0.8-6.8,3.2
                      			c0,1.4,1,2.9,3.6,2.9C108.1,160.5,110.2,158.3,110.2,154.4z"/>
                      		<path fill="#FF6336" d="M142.3,148.1h-5.6v-3.2c-1.1-0.2-1.5-0.3-2.2-0.3c-3.8,0-6.1,3.2-6.1,7.3c0,4.9,2.8,8.1,7.7,8.1
                      			c2.1,0,4.1-0.4,6.1-1.3l-0.4,5.5c-2.6,0.9-3.6,1.2-7.2,1.2c-8,0-12.7-5.2-12.7-12.7c0-7.8,5-12.7,12.8-12.7c2.9,0,5.3,0.5,7.6,1.2
                      			V148.1z"/>
                      		<path fill="#FF6336" d="M154.6,140.4V160h2.8v4.7h-11.9V160h2.6v-14.8H145v-4.7H154.6z M151.2,136.4c-2.7,0-4.4-1.6-4.4-4
                      			c0-2.4,1.6-4,4.4-4s4.4,1.6,4.4,4C155.5,134.8,153.9,136.4,151.2,136.4z"/>
                      		<path fill="#FF6336" d="M173.3,165.3c-8.1,0-12.8-4.6-12.8-12.4c0-7.2,5.1-13,12.8-13c8.3,0,12.8,4.6,12.8,13
                      			C186.1,160.1,181,165.3,173.3,165.3z M179,153c0-5.2-1.7-7.8-5.8-7.8c-3.3,0-5.7,2.6-5.7,7.8c0,4.4,1.7,7,5.7,7S179,157.4,179,153
                      			z"/>
                      		<path fill="#FF6336" d="M214.8,160h2.8v4.7h-11.9V160h2.6v-10.1c0-3-1.7-4.4-4.2-4.4c-3.7,0-5.7,2.6-5.7,6.3v8.3h2.8v4.7h-11.7
                      			V160h2.4v-14.8h-3.2v-4.7h9.5c0,1.8,0,3.2-0.4,5h0.1c1.3-3.2,4.1-5.6,8.4-5.6c5.8,0,8.4,3.9,8.4,9.3V160z"/>
                      		<path fill="#FF6336" d="M227.8,154c0.2,3.9,3.1,6.2,7.8,6.2c3,0,5-0.4,7.8-1.7l-0.3,5.2c-3,1.1-5.6,1.5-8.9,1.5
                      			c-8.5,0-13.4-4.9-13.4-12.6c0-7.8,4.8-12.8,12.2-12.8c7.2,0,11.7,4.8,11.7,14.2H227.8z M237.6,149.6c0-3.3-1.8-5.2-5-5.2
                      			c-2.8,0-4.6,1.9-4.9,5.2H237.6z"/>
                      		<path fill="#FF6336" d="M267.8,147.5H262V145c-1.3-0.4-2.5-0.7-3.8-0.7c-3,0-4.4,1.2-4.4,2.6c0,1.7,0.6,1.8,7.1,2.6
                      			c5.8,0.8,8.1,2.8,8.1,7.3c0,5.2-4.1,8.4-11.5,8.4c-2.7,0-7.3-0.6-9.6-1.5v-6.8h5.8v2.8c1.1,0.4,3,0.8,4.3,0.8c2.4,0,4.7-1,4.7-3
                      			c0-1.9-1.3-2.2-8.8-3.2c-4.5-0.6-6.4-2.9-6.4-6.5c0-5,4.2-7.9,10.7-7.9c2.6,0,5.8,0.4,9.4,1.6V147.5z"/>
                      	</g>
                      	<g>
                      		<path fill="#FF6336" d="M24.3,187.9v4.7h-2.9v15.5c0,5.2,1.9,7.5,6.6,7.5c5.4,0,7.3-2.7,7.3-7.6v-15.5h-3.6v-4.7h12.6v4.7h-2.9
                      			v14.9c0,9.2-3.4,13.4-13.8,13.4c-9.1,0-13-3.3-13-11.7v-16.7h-2.9v-4.7H24.3z M34.1,175.3l3.3,3.2l-9.9,7.7l-3.5-2.8L34.1,175.3z"
                      			/>
                      		<path fill="#FF6336" d="M56.6,196.1h6.5v4.7h-6.5v11c0,2.8,0.7,4.1,3.5,4.1c1,0,2.1-0.3,3.2-0.7l-0.2,4.6c-2.4,0.9-4,1.2-5.7,1.2
                      			c-5,0-7.3-2.4-7.3-6.4v-13.7h-3.3v-4.7h3.3v-5l6.5-0.4V196.1z"/>
                      		<path fill="#FF6336" d="M73.7,196.1v19.5h2.8v4.7H64.6v-4.7h2.6v-14.8h-3.2v-4.7H73.7z M70.3,192.1c-2.7,0-4.4-1.6-4.4-4
                      			c0-2.4,1.6-4,4.4-4s4.4,1.6,4.4,4C74.6,190.5,73,192.1,70.3,192.1z"/>
                      		<path fill="#FF6336" d="M88.8,184.7v31h2.8v4.7H79.6v-4.7h2.6v-26.2h-3.7v-4.7H88.8z"/>
                      		<path fill="#FF6336" d="M101.3,209.7c0.2,3.9,3.1,6.2,7.8,6.2c3,0,5-0.4,7.8-1.7l-0.3,5.2c-3,1.1-5.6,1.5-8.9,1.5
                      			c-8.5,0-13.4-4.9-13.4-12.6c0-7.8,4.8-12.8,12.2-12.8c7.2,0,11.7,4.8,11.7,14.2H101.3z M111.1,205.3c0-3.3-1.8-5.2-5-5.2
                      			c-2.8,0-4.6,1.9-4.9,5.2H111.1z"/>
                      		<path fill="#FF6336" d="M141.4,203.2h-5.8v-2.5c-1.3-0.4-2.5-0.7-3.8-0.7c-3,0-4.4,1.2-4.4,2.6c0,1.7,0.6,1.8,7.1,2.6
                      			c5.8,0.8,8.1,2.8,8.1,7.3c0,5.2-4.1,8.4-11.5,8.4c-2.7,0-7.3-0.6-9.6-1.5v-6.8h5.8v2.8c1.1,0.4,3,0.8,4.3,0.8c2.4,0,4.7-1,4.7-3
                      			c0-1.9-1.3-2.2-8.8-3.2c-4.5-0.6-6.4-2.9-6.4-6.5c0-5,4.2-7.9,10.7-7.9c2.6,0,5.8,0.4,9.4,1.6V203.2z"/>
                      	</g>
                      	<g>
                      		<path fill="#797979" d="M184.1,208c-0.2,0.7-0.7,1.4-1.4,2.2c-0.7,0.7-1.6,1.4-2.7,2.1c-1,0.7-2.2,1.3-3.4,1.9
                      			c-1.2,0.6-2.4,1.1-3.4,1.6c-1.1,0.5-2.1,0.8-2.9,1c-0.8,0.2-1.4,0.3-1.7,0.3c-0.7-0.1-1.3-0.3-1.9-0.8c-0.6-0.4-1.1-1-1.5-1.5
                      			c-0.4-0.6-0.7-1.2-0.9-1.8c-0.2-0.6-0.3-1.1-0.2-1.6c0.1-0.9,0.4-1.9,0.9-3.1c0.6-1.2,1.2-2.5,2-3.9c0.8-1.4,1.7-2.9,2.6-4.4
                      			c0.9-1.5,1.8-3.1,2.6-4.5c0.8-1.5,1.6-2.9,2.2-4.3c0.6-1.4,1.1-2.6,1.3-3.7c0.2-1.3-0.1-1.9-0.7-2c-1-0.1-1.9,0.2-2.8,0.7
                      			c-0.9,0.6-1.8,1.3-2.7,2.2c-0.9,0.9-1.7,2-2.4,3.2c-0.7,1.2-1.4,2.3-2,3.4c-0.6,1.1-1.1,2.1-1.5,3c-0.4,0.9-0.6,1.5-0.7,1.8
                      			c-0.4,0.9-1.2,1.3-2.4,1.2c-0.5-0.1-1-0.3-1.4-0.6c-0.4-0.4-0.7-0.8-1-1.2c-0.3-0.5-0.5-0.9-0.6-1.4c-0.1-0.5-0.2-0.8-0.2-1.1
                      			c0.1-1,0.4-2,1.1-3.2c0.7-1.2,1.5-2.4,2.5-3.6c1-1.2,2.2-2.4,3.4-3.6c1.3-1.1,2.6-2.2,4-3.1c1.4-0.9,2.7-1.6,4-2.1
                      			c1.3-0.5,2.5-0.7,3.7-0.6c1.2,0.1,2.2,0.5,3,1.1c0.8,0.6,1.4,1.3,1.9,2.1c0.4,0.8,0.7,1.7,0.9,2.6c0.2,0.9,0.2,1.7,0.1,2.4
                      			c-0.3,1.9-0.8,3.7-1.5,5.4c-0.8,1.7-1.7,3.5-2.8,5.4c-1.1,1.9-2.1,3.6-3.2,5.4c-1.1,1.7-1.9,3.2-2.5,4.5c-0.1,0.3,0,0.4,0.4,0.4
                      			c0.2,0,0.5,0,1-0.2c0.5-0.2,1.2-0.4,1.9-0.6c0.7-0.3,1.5-0.5,2.3-0.8c0.8-0.3,1.6-0.6,2.3-0.9c0.7-0.3,1.4-0.5,2-0.7
                      			c0.6-0.2,0.9-0.3,1.1-0.3c0.3,0,0.6,0,0.7,0.1c0.2,0.1,0.3,0.4,0.3,0.7C184.2,207.2,184.2,207.6,184.1,208"/>
                      		<path fill="#797979" d="M204,195c0-0.7-0.1-1.6-0.3-2.6c-0.2-1-0.4-1.9-0.7-2.8c-0.3-0.9-0.7-1.6-1.1-2.2
                      			c-0.4-0.6-0.9-0.9-1.4-0.9c-0.5,0.2-0.9,0.3-1.1,0.3c-0.3,0-0.6-0.1-0.8-0.3c-0.3-0.2-0.5-0.3-0.8-0.3c-0.7,0.1-1.3,0.4-1.8,1
                      			c-0.6,0.6-1.1,1.4-1.5,2.4c-0.5,1-0.9,2.1-1.2,3.3c-0.4,1.2-0.7,2.9-1,4.9c-0.3,2-0.5,3.8-0.5,5.2c0.2,4.5,1.1,6.8,2.7,6.8
                      			c1.1,0,2.3-0.6,3.4-1.6c1.2-1,2.2-2.2,3.1-3.7c0.9-1.5,1.6-3.1,2.2-4.8C203.8,198,204.1,196.4,204,195 M210.4,195.5
                      			c0.1,1,0,2.2-0.2,3.6c-0.2,1.4-0.6,2.8-1.1,4.2c-0.5,1.4-1.2,2.9-2,4.3c-0.8,1.4-1.8,2.7-2.9,3.8c-1.1,1.1-2.4,2-3.8,2.7
                      			c-1.4,0.7-2.9,1.1-4.6,1.2c-2,0.1-3.7-0.3-5-1.1c-1.3-0.8-2.4-1.8-3.1-3c-0.8-1.2-1.4-2.5-1.7-3.9c-0.4-1.4-0.6-2.7-0.7-4
                      			c-0.1-0.7,0-1.6,0-2.9c0.1-1.3,0.3-2.7,0.6-4.3c0.3-1.6,0.7-3.2,1.3-4.9c0.5-1.7,1.2-3.3,2.1-4.8c0.9-1.5,1.9-2.8,3.1-3.9
                      			c1.2-1.1,2.6-1.9,4.3-2.3c0.8-0.2,1.6-0.2,2.3,0c0.7,0.2,1.3,0.6,1.8,1c0.5,0.4,0.9,0.9,1.1,1.5c0.2,0.5,0.3,1,0.3,1.4
                      			c1.6,0.2,2.9,0.7,3.9,1.5c1,0.8,1.9,1.7,2.5,2.8c0.6,1.1,1.1,2.3,1.3,3.5C210.2,193.1,210.3,194.3,210.4,195.5"/>
                      		<path fill="#797979" d="M214.9,194.8c-0.4,0-0.9-0.1-1.2-0.4c-0.4-0.3-0.7-0.6-1-0.9c-0.3-0.4-0.5-0.7-0.7-1.1
                      			c-0.2-0.4-0.2-0.6-0.3-0.8c-0.1-0.6,0.1-1.4,0.6-2.3c0.5-0.9,1.1-1.9,1.8-2.9c0.7-1,1.6-2,2.5-3c0.9-1,1.9-1.9,2.8-2.7
                      			c0.9-0.8,1.8-1.5,2.6-2c0.8-0.5,1.4-0.8,1.8-0.9c0.6-0.1,1.1,0,1.7,0.3c0.6,0.3,1.1,0.6,1.6,1c0.5,0.4,0.8,0.9,1.1,1.4
                      			c0.3,0.5,0.4,1,0.3,1.4c-0.3,1.8-0.7,4-1,6.6c-0.4,2.6-0.7,5.3-1,8.2c-0.3,2.9-0.6,5.7-0.9,8.6c-0.3,2.9-0.5,5.4-0.6,7.7
                      			c-0.1,0.8-0.4,1.3-1,1.5c-0.6,0.2-1.2,0.2-1.8-0.1c-0.6-0.2-1.2-0.7-1.8-1.4c-0.6-0.7-0.9-1.6-1.1-2.6c-0.1-0.9-0.1-2.1-0.1-3.5
                      			c0.1-1.5,0.2-3.1,0.3-4.7c0.1-1.7,0.3-3.4,0.5-5.1c0.2-1.7,0.4-3.3,0.5-4.7c0.2-1.4,0.3-2.6,0.4-3.6c0.1-1,0.1-1.5,0-1.6
                      			c-0.5,0.1-1.1,0.6-1.7,1.4c-0.6,0.8-1.2,1.7-1.8,2.6c-0.6,0.9-1.1,1.7-1.6,2.5C215.6,194.4,215.2,194.8,214.9,194.8"/>
                      		<path fill="#797979" d="M249.6,185.2c0-0.2,0-0.4,0.1-0.7c0.1-0.2,0.1-0.4,0.1-0.5c-0.3,0-0.5,0-0.8-0.1c-0.3-0.1-0.5-0.2-0.8-0.5
                      			c-0.3-0.2-0.6-0.3-1-0.3c-0.8,0.1-1.7,0.6-2.7,1.3c-0.9,0.8-1.8,1.8-2.7,2.9c-0.9,1.2-1.7,2.5-2.5,3.9c-0.8,1.4-1.4,2.8-2,4.2
                      			c-0.6,1.4-1,2.6-1.3,3.8c-0.3,1.1-0.4,2-0.3,2.6c0.1,0.9,0.9,1.1,2.1,0.7c0.8-0.3,1.6-0.7,2.5-1.4c0.9-0.6,1.9-1.4,2.8-2.3
                      			c1-0.9,1.9-1.9,2.7-3c0.9-1.1,1.6-2.3,2.2-3.5c0.6-1.2,1-2.5,1.3-3.7C249.9,187.6,249.9,186.3,249.6,185.2 M256.2,184.8
                      			c0,0.4,0,1.4,0.1,3c0,1.6,0,3.5-0.1,5.7c-0.1,2.2-0.3,4.6-0.6,7.2c-0.3,2.6-0.8,5.1-1.5,7.6c-0.7,2.4-1.5,4.7-2.6,6.7
                      			c-1.1,2-2.4,3.5-4.1,4.6c-0.2,0.1-0.5,0.2-0.9,0.3c-0.4,0.1-0.7,0-1.1-0.1c-0.4-0.1-0.7-0.3-0.9-0.5c-0.2-0.3-0.4-0.6-0.3-1.1
                      			c0-0.6,0.2-1.4,0.5-2.5c0.3-1.1,0.7-2.2,1.2-3.3c0.4-1.2,0.9-2.3,1.3-3.5c0.4-1.1,0.7-2.1,0.9-2.9c0.2-0.9,0.4-2,0.6-3.3
                      			c0.2-1.3,0.3-2.5,0.3-3.5c-0.6,0.7-1.3,1.6-2.1,2.6c-0.8,1.1-1.6,2.1-2.5,3.1c-0.9,1-1.9,1.9-2.9,2.7c-1.1,0.8-2.2,1.2-3.3,1.4
                      			c-1.1,0.1-2.2,0-3.2-0.2c-1-0.3-1.8-0.7-2.5-1.4c-0.7-0.6-1.3-1.4-1.7-2.3c-0.4-0.9-0.7-1.9-0.8-3c-0.1-1.1,0-2.5,0.4-4.1
                      			c0.4-1.6,0.9-3.3,1.7-5.1c0.8-1.8,1.7-3.6,2.8-5.4c1.1-1.8,2.3-3.4,3.6-4.9c1.3-1.5,2.8-2.7,4.4-3.7c1.6-1,3.2-1.6,4.8-1.8
                      			c0.4-0.1,1,0,1.7,0.3c0.7,0.3,1.3,0.6,1.9,1.1c0.6,0.5,1.1,1,1.5,1.7c0.4,0.6,0.6,1.3,0.5,2c0.6-0.1,1.1,0,1.4,0.2
                      			c0.4,0.2,0.7,0.4,0.9,0.7c0.2,0.3,0.4,0.6,0.5,0.9C256.1,184.3,256.2,184.6,256.2,184.8"/>
                      		<path fill="#797979" d="M248.1,227.9c-0.1-2.1-1.4-2.6-3-2.8c-5.4-0.6-10.7-1.6-16.1-1.7c-9.2-0.3-18.5-0.4-27.8,0
                      			c-10.7,0.4-21.4,0.9-31.9,3.1c-1.4,0.3-2.9,0.7-4.2,1.3c-2.2,1-2.5,2.5-1,4.3c1.4,1.6,3.4,2.1,5.6,1.9c4.1-0.4,8.3-1,12.5-1.4
                      			c6.8-0.7,13.7-1.4,20.6-1.8c8-0.5,16-0.5,24-0.9c6.5-0.3,13-0.9,19.5-1.3C246.9,228.4,247.5,228.1,248.1,227.9"/>
                      	</g>
                      	<g>
                      		<path fill="#FF6336" d="M177.9,42.3l9.2-5.4c0.9-0.5,1.2-1.7,0.7-2.6c-0.5-0.9-1.7-1.2-2.6-0.7L176,39c-0.9,0.5-1.2,1.7-0.7,2.6
                      			C175.8,42.5,177,42.9,177.9,42.3"/>
                      		<path fill="#FF6336" d="M176,81.9l9.2,5.4c0.9,0.5,2.1,0.2,2.6-0.7c0.5-0.9,0.2-2.1-0.7-2.6l-9.2-5.4c-0.9-0.5-2.1-0.2-2.6,0.7
                      			C174.8,80.3,175.1,81.4,176,81.9"/>
                      		<path fill="#FF6336" d="M144.7,110.8v-10.7c0.1-1.1-0.7-2-1.8-2c-1-0.1-2,0.7-2,1.8c0,0.1,0,0.2,0,0.3v10.7c-0.1,1.1,0.7,2,1.8,2
                      			c1,0.1,2-0.7,2-1.8C144.7,111,144.7,110.9,144.7,110.8"/>
                      		<path fill="#FF6336" d="M98.5,37l9.2,5.4c0.9,0.5,2.1,0.2,2.6-0.7c0.5-0.9,0.2-2.1-0.7-2.6l-9.2-5.4c-0.9-0.5-2.1-0.2-2.6,0.7
                      			C97.3,35.3,97.6,36.4,98.5,37"/>
                      		<path fill="#FF6336" d="M142.8,22.8c1.1,0,1.9-0.9,1.9-1.9V10.1c0.1-1.1-0.7-2-1.8-2c-1-0.1-2,0.7-2,1.8c0,0.1,0,0.2,0,0.3v10.7
                      			C140.9,21.9,141.8,22.8,142.8,22.8"/>
                      		<path fill="#FF6336" d="M121.5,27.1c0.5,0.9,1.7,1.2,2.6,0.7s1.2-1.7,0.7-2.6l-5.3-9.3c-0.5-0.9-1.7-1.2-2.6-0.7
                      			c-0.9,0.5-1.2,1.7-0.7,2.6L121.5,27.1z"/>
                      		<path fill="#FF6336" d="M127.8,62.4c1,0,1.9-0.9,1.9-1.9c0-7.3,5.8-13.1,13.1-13.1c0,0,0,0,0,0c1,0.1,2-0.7,2-1.8
                      			c0.1-1.1-0.7-2-1.8-2c-0.1,0-0.2,0-0.3,0c-9.3,0-16.9,7.6-16.9,17C125.9,61.5,126.8,62.4,127.8,62.4"/>
                      		<path fill="#FF6336" d="M192.9,58.6h-10.7c-1-0.1-2,0.7-2,1.8c-0.1,1.1,0.7,2,1.8,2c0.1,0,0.2,0,0.3,0h10.7c1-0.1,1.8-1,1.8-2
                      			C194.6,59.4,193.8,58.6,192.9,58.6z"/>
                      		<path fill="#FF6336" d="M92.7,62.4h10.7c1,0.1,2-0.7,2-1.8c0.1-1.1-0.7-2-1.8-2c-0.1,0-0.2,0-0.3,0H92.7c-1,0.1-1.8,1-1.8,2
                      			C91,61.6,91.8,62.3,92.7,62.4"/>
                      		<path fill="#FF6336" d="M125.7,43.4c9.4-9.5,24.7-9.5,34.1,0c9.4,9.5,9.4,24.8,0,34.3c-9.4,9.5-24.7,9.5-34.1,0
                      			c-4.5-4.6-7.1-10.7-7.1-17.2C118.7,54.1,121.2,47.9,125.7,43.4L125.7,43.4z M142.8,88.5c15.4,0,27.9-12.6,27.9-28
                      			c0-15.5-12.5-28.1-27.9-28.1c-15.4,0-27.9,12.6-27.9,28c0,7.4,2.9,14.6,8.2,19.8C128.3,85.6,135.4,88.5,142.8,88.5"/>
                      		<path fill="#FF6336" d="M168.8,105.7c0.9-0.5,1.2-1.7,0.7-2.6l0,0l-5.3-9.3c-0.5-0.9-1.7-1.2-2.6-0.7c-0.9,0.5-1.2,1.7-0.7,2.6
                      			l5.3,9.3C166.7,105.9,167.9,106.3,168.8,105.7"/>
                      		<path fill="#FF6336" d="M161.6,27.8c0.9,0.5,2.1,0.2,2.6-0.7c0,0,0,0,0,0l5.3-9.3c0.5-0.9,0.2-2.1-0.7-2.6
                      			c-0.9-0.5-2.1-0.2-2.6,0.7l-5.3,9.3C160.4,26.1,160.7,27.3,161.6,27.8C161.6,27.8,161.6,27.8,161.6,27.8z"/>
                      		<path fill="#FF6336" d="M119.4,105l5.3-9.3c0.5-0.9,0.2-2.1-0.7-2.6c-0.9-0.5-2.1-0.2-2.6,0.7l-5.3,9.3c-0.5,0.9-0.2,2.1,0.7,2.6
                      			S118.9,105.9,119.4,105"/>
                      		<path fill="#FF6336" d="M107.7,78.6L98.5,84c-0.9,0.5-1.2,1.7-0.7,2.6c0.5,0.9,1.7,1.2,2.6,0.7l9.2-5.4c0.9-0.5,1.2-1.7,0.7-2.6
                      			C109.8,78.4,108.6,78.1,107.7,78.6"/>
                      	</g>
                      </g>
                  </svg>
                </div>

              </div>

              <div data-guide="img__"
                class=" banner__style_primer__img_varios
                        banner__style_primer__img_varios__vacaciones_utiles
                        xs-hide
                        "
                data-banner-img-position="top">

                <picture>
                  <source
                    media="(max-width: 767px)"
                    srcset="/storage/static/images/banner/ogro/banner_11_dic_vacaciones_utiles_354x250.png"
                    sizes="200px">

                  <source
                    media="(min-width: 767px)"
                    srcset="/storage/static/images/banner/ogro/banner_11_dic_vacaciones_utiles_708x500.png"
                    sizes="10vw">

                  <img src="" srcset="/storage/static/images/banner/ogro/banner_11_dic_vacaciones_utiles_708x500.png">
                </picture>

              </div>

              <div class="banner__style_vacaciones_left_content">
                <div class="banner__title">
                  <span class="banner__propuesta-educativa__title">
                    <i class="fa fa-lightbulb-o"></i> Inicio 4, 7 y 8 de enero
                  </span>
                </div>
                <div class="banner__subtitle">
                  <span class="normal">
                  </span>
                  <span style="display:block;margin: 10px auto;">
                    <button class="banner__button-cta banner__button-cta--orange"><a href="/colegio/vacaciones-utiles">&nbsp;&nbsp;&nbsp;&nbsp;Ver más&nbsp;&nbsp;&nbsp;&nbsp;</a></button>
                  </span>
                </div>
              </div>



            </div>



         </div>

        </div>
    </div>
    <div data-title="propuesta educativa">
        <div
        class="
        banner__item
        banner__item--left
        "
        data-shadow="9"
        data-shadow-opacity=".15"
        data-bordercolor="#f4633a"

        data-border-referer=".banner__propuesta_guide"
        data-border-referer-xs=".banner__propuesta_guide"


        style="
        background-color: #ffffff;
        ">

        <div
        class="banner__image"

        data-image-md="/storage/static/images/banner/ogro/banner_22_nov_propuesta-gigant.png"
        data-position-md="70% bottom"
        data-size-md="hidden"

        data-image-xs="/storage/static/images/banner/ogro/banner_22_nov_propuesta-250x250.png"
        data-position-xs="bottom right"
        data-size-xs="68vw"

        data-position-xs-landscape="80% bottom"
        data-size-xs-landscape="45vw"


        style="
        background-repeat: no-repeat;
        z-index: 11;
        "></div>

        <div class="banner_box-bar" style="width:10px; z-index: 10;"></div>
        <div class="banner__box"  style="border-color:#f4633a;border-width:10px; z-index: 10;">
          <svg class="t_de_trilce_svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          viewBox="0 0 200 200" enable-background="new 0 0 200 200" xml:space="preserve">
            <polygon points="17.5,10 17.5,50.6 43.7,50.6 43.7,40 83.8,40 83.8,163.8 71.8,163.8 71.8,190 128.5,190
            128.5,163.8 116.4,163.8 116.4,40 156.5,40 156.5,50.6 182.5,50.6 182.5,10 "/>
          </svg>
        </div>

      <div class="banner__content
      banner__content--colegio
      banner__content--mobile-padding-left
      " style="z-index:11;">
        <div class="banner__propuesta-educativa__container">
          <div class="banner__propuesta_guide">
            <div class="banner__title">
              <span class="banner__propuesta-educativa__title">
                Propuesta <br >
                Educativa
              </span>
            </div>
            <div class="banner__subtitle">
              <span class="normal">
              </span>
              <span style="display:block;margin: 10px auto;">
                <button class="banner__button-cta banner__button-cta--orange"><a href="/colegio/propuesta-educativa">&nbsp;&nbsp;&nbsp;&nbsp;Ver más&nbsp;&nbsp;&nbsp;&nbsp;</a></button>
              </span>
            </div>
          </div>
          <div class="banner__propuesta-educativa__image xs-hide"
          data-banner-img-position="top"
          >
            <picture>
              <img src="" alt="">
            </picture>


            <picture>
              <source media="(max-width: 920px)" srcset="/storage/static/images/banner/ogro/banner_22_nov_propuesta-250x250.png">
              <img  src="/storage/static/images/banner/ogro/banner_22_nov_propuesta-gigant.png"
                    alt="Propuesta educativa">
            </picture>

          </div>

        </div>
      </div>

      </div>
    </div>
    <div data-title="primeros puestos">
        <div
        class="
          banner__item
          banner__item--left
          "
          data-shadow="9"
          data-shadow-opacity=".15"
          data-bordercolor="#f4633a"
          data-border-referer=".banner__style_primer__a"
          data-border-referer-xs=".banner__style_primer__mobile-primeros"


          style="
            background-color: #ffffff;
          ">

        <div class="banner_box-bar" style="width:10px; z-index:11;"></div>
        <div class="banner__box"  style="border-color:#f4633a;border-width:10px; z-index:11;">
          <svg class="t_de_trilce_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 200 200" enable-background="new 0 0 200 200" xml:space="preserve">
          <polygon points="17.5,10 17.5,50.6 43.7,50.6 43.7,40 83.8,40 83.8,163.8 71.8,163.8 71.8,190 128.5,190
            128.5,163.8 116.4,163.8 116.4,40 156.5,40 156.5,50.6 182.5,50.6 182.5,10 "/>
          </svg>
        </div>

        <div
        class="banner__image"

        data-image-md=""
        data-position-md="90% bottom"
        data-size-md="hidden"

        data-image-xs=""
        data-position-xs="110% bottom"
        data-size-xs="hidden"

        data-position-xs-landscape = "80% bottom"
        data-size-xs-landscape="50vw"



        style="
        background-repeat: no-repeat;
        z-index: 12;
        "></div>

        <div class="
        banner__content
        banner__content--colegio
        " style="z-index:13;">

          <div class="banner__style_primer banner__style_primer--colegio banner__style_primer__mobile-container">

            <div class="banner__style_primer-reverse banner__style_primer__mobile-primeros">

              <div class="banner__style_primer_mobile-puesto">
                <span class="opt puesto">1.<sup>er</sup> puesto <br /> San&nbsp;Marcos</span>
                <span class="opt name">Diego Castillo Utani</span>
                <span class="opt carrer">Ingeniería Ambiental</span>
              </div>

            </div>

            <div class="banner__style_primer__a xs-hide">
              <div class="banner__title">
                <span>¡Nuestros<br>Cachimbos!</span>
              </div>
            </div>


            <div class="banner__style_primer__b xs-hide" style="margin:15px;">
              <div class="banner__style_primer__number">
                <span class="number">
                  1<sup>er</sup>
                </span>
                <span class="banner__style_primer__number-puesto">
                  PUESTO 2019-I
                </span>
              </div>

              <div class="banner__style_primer__text">
                <span>San&nbsp;Marcos</span>
              </div>

              <div class="banner__style_primer__name">
                <span>
                  Diego Castillo Utani
                </span>
                <br>
                <span class="small">
                  Ingeniería Ambiental
                </span>
              </div>

            </div>

            <div
            class="banner__style_primer__img_varios"
            data-banner-img-position="top">

              <picture>
                <source
                  media="(max-width: 767px)"
                  srcset="/storage/static/images/banner/ogro/banner_3_dic_2018_primeros_puestos-250x250.png"
                  sizes="200px">

                <source
                  media="(min-width: 767px)"
                  srcset="/storage/static/images/banner/ogro/banner_3_dic_2018_primeros_puestos-500x500.png"
                  sizes="10vw">

                <img src="" srcset="/storage/static/images/banner/ogro/banner_3_dic_2018_primeros_puestos-500x500.png">
              </picture>

            </div>


          </div>



       </div>

      </div>
    </div>
    <div data-title="tablet gratuita">
        <div
        class="
        banner__item
        banner__item--left
        "
        data-shadow="9"
        data-shadow-opacity=".15"
        data-bordercolor="#f4633a"

        style="
        background-color: #ffffff;
        ">


        <div
        class="banner__image banner__matricula-img"

        data-image-md="/storage/static/images/banner/ogro/banner_19_octubre_500x500.png"
        data-position-md="center bottom"
        data-size-md="contain"

        data-image-xs="/storage/static/images/banner/ogro/banner_19_octubre_250x250.png"
        data-position-xs="140% bottom"
        data-size-xs="69vw"

        data-position-xs-landscape="80% bottom"
        data-size-xs-landscape="45vw"



        style="
        background-repeat: no-repeat;
        z-index: 11;
        "></div>

        <div class="banner_box-bar" style="width:10px; z-index: 10;"></div>
        <div class="banner__box"  style="border-color:#f4633a;border-width:10px; z-index: 10;">
        <svg class="t_de_trilce_svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 200 200" enable-background="new 0 0 200 200" xml:space="preserve">
        <polygon points="17.5,10 17.5,50.6 43.7,50.6 43.7,40 83.8,40 83.8,163.8 71.8,163.8 71.8,190 128.5,190
        128.5,163.8 116.4,163.8 116.4,40 156.5,40 156.5,50.6 182.5,50.6 182.5,10 "/>
        </svg>
        </div>

        <div class="banner__content
        banner__content--colegio
        banner__content--mobile-padding-left
        " style="z-index:11;">

        <br>
        <div class="banner__title">
        <span>
        <style>
          .b1_medio_ambiente_tablet{
            max-width: 70px;
            display: block;
            position: relative;
            left: -12px;
          }

          @media (max-width: 765px){
            .b1_medio_ambiente_tablet{
              left: 0;
              max-width: 30px;
              padding-top: 5px;
              padding-bottom: 5px;
            }
          }
        </style>

        <svg version="1.1" class="b1_medio_ambiente_tablet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 200 121.2" enable-background="new 0 0 200 121.2" xml:space="preserve">
        <g>
          <g>
            <path fill="#6A9923" d="M105,53h-5l0,0c0-13.7,11.1-24.9,24.9-24.9h5l0,0C129.8,41.9,118.7,53,105,53z"/>
            <path fill="#6A9923" d="M100,18.2h5c9.6,0,17.4-7.8,17.4-17.4h-5C107.8,0.8,100,8.6,100,18.2z"/>
          </g>
          <path fill="#F2BB80" d="M70.3,70l-0.1-0.1L52.7,50.6c-2.6-2.9-7-3.1-9.9-0.5c0,0,0,0,0,0V13.9c0.1-4.1-3-7.5-7.1-7.9
          c-4.1-0.2-7.6,2.9-7.8,7c0,0.1,0,0.3,0,0.4v47.1c0,3.4,0.9,6.7,2.5,9.7l22.3,40.3v9.9h34.8V99.8C87.6,87.5,81,76.1,70.3,70z"/>
          <g>
            <path fill="#88B337" d="M100,78.9c-1.4,0-2.5-1.1-2.5-2.5V15.7c0-1.4,1.1-2.5,2.5-2.5c1.4,0,2.5,1.1,2.5,2.5v60.7
            C102.5,77.8,101.4,78.9,100,78.9z"/>
            <path fill="#88B337" d="M70.2,28.2h5C88.9,28.2,100,39.3,100,53l0,0h-5C81.3,53,70.2,41.9,70.2,28.2L70.2,28.2z"/>
            <path fill="#88B337" d="M100,18.2h-5c-9.6,0-17.4-7.8-17.4-17.4h5C92.2,0.8,100,8.6,100,18.2z"/>
          </g>
          <path fill="#E8A16D" d="M62.5,84.9c-0.7,0-1.4-0.3-1.8-0.8L40.3,61.6c-3.4-3.8-3.3-9.5,0.3-13.1c1-1,2.5-0.9,3.5,0
          c0.9,1,0.9,2.5,0,3.5c-1.7,1.7-1.8,4.4-0.1,6.2l20.4,22.4c0.9,1,0.9,2.6-0.2,3.5C63.7,84.6,63.1,84.9,62.5,84.9L62.5,84.9z"/>
          <path fill="#F2BB80" d="M112.4,99.8v20.6h34.8v-9.9l22.4-40.3c1.6-3,2.5-6.3,2.5-9.7V13.9c0.1-4.1-3-7.5-7-7.9
          c-4.1-0.2-7.6,2.9-7.8,7c0,0.1,0,0.3,0,0.4v36.6c-2.8-2.6-7.3-2.4-9.9,0.4c0,0,0,0,0,0l-17.4,19.4l-0.1,0.1
          C119,76.1,112.4,87.5,112.4,99.8L112.4,99.8z"/>
          <path fill="#E8A16D" d="M137.5,84.9c0.7,0,1.4-0.3,1.8-0.8l20.4-22.4c3.4-3.8,3.3-9.5-0.3-13.1c-1-1-2.6-0.9-3.5,0
          c-0.9,1-0.9,2.5,0,3.5c1.7,1.7,1.8,4.4,0.1,6.2l-20.3,22.4c-0.9,1-0.9,2.6,0.1,3.5C136.3,84.6,136.8,84.9,137.5,84.9L137.5,84.9z"
          />
        </g>
        </svg>



        </span>
        <span>
        Tablet gratuita
        </span>
        </div>
        <div class="banner__subtitle">
        <span class="normal">
        Menos papel, más vida<br>
        </span>
        </div>
        <div class="banner__content__rigth banner__content__rigth--align-center xs-hide">
        <div class="banner__subtitle">
        <span class="normal-litle">
          Hemos dejado de imprimir <br >300 000 libros, lo que equivale a más de mil árboles talados al año.<br>
        </span>
        </div>
        </div>
        <br>

        </div>

        </div>
    </div>
    <div data-title="ser mejores personas">
        <div
        class="
        banner__item
        banner__item--left
        "
        data-shadow="9"
        data-shadow-opacity=".15"
        data-bordercolor="#f4633a"

        style="
        background-color: #ffffff;
        ">

        <div
        class="banner__image"

        data-image-md="/storage/static/images/banner/ogro/banner_sumate_19_octubre_500x500.png"
        data-position-md="75% bottom"
        data-size-md="contain"

        data-image-xs="/storage/static/images/banner/ogro/banner_sumate_19_octubre_250x250.png"
        data-position-xs="bottom right"
        data-size-xs="50vw"

        style="
        background-repeat: no-repeat;
        z-index: 11;
        "></div>

        <div class="banner_box-bar" style="width:10px; z-index: 10;"></div>
        <div class="banner__box"  style="border-color:#f4633a;border-width:10px; z-index: 10;">
        <svg class="t_de_trilce_svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 200 200" enable-background="new 0 0 200 200" xml:space="preserve">
        <polygon points="17.5,10 17.5,50.6 43.7,50.6 43.7,40 83.8,40 83.8,163.8 71.8,163.8 71.8,190 128.5,190
        128.5,163.8 116.4,163.8 116.4,40 156.5,40 156.5,50.6 182.5,50.6 182.5,10 "/>
        </svg>
        </div>

        <div class="banner__content
        banner__content--colegio
        banner__content--mobile-padding-left
        " style="z-index:11;">
        <div class="banner__title">
        <span>
        <style>
          .b1__svg-smp{
            max-width: 60px;
            fill: #f4633a;
            display: block;
            padding-left: 10px;
          }

          @media (max-width: 765px){
            .b1__svg-smp{
              padding-left: 5px;
              max-width: 35px;
            }
          }
        </style>
        <svg version="1.1" class="b1__svg-smp" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 57 62">
        <g>
          <path d="M43,32.2c-3.9,0-7.2-3.1-7.2-7.2c0-3.9,3.1-7.2,7.2-7.2c3.9,0,7.2,3.1,7.2,7.2C50.1,29,46.9,32.2,43,32.2
          L43,32.2z M43,20.2c-2.7,0-5,2.3-5,5c0,2.7,2.3,5,5,5c2.7,0,5-2.3,5-5C48,22.4,45.8,20.2,43,20.2L43,20.2z M43,20.2"/>
          <path d="M49.6,56.5H36.4v-6.9h-4.2V40c0-3.8,2.4-6.8,5.3-6.8h11.2c2.9,0,5.3,3,5.3,6.8v9.5h-4.2v6.9H49.6z
          M38.4,54.3h9v-6.9h4.2v-7.5c0-2.5-1.4-4.7-3.1-4.7H37.4c-1.7,0-3.1,2.2-3.1,4.7v7.5h4.2v6.9H38.4z M38.4,54.3"/>
          <path d="M13.9,32.2c-3.9,0-7.2-3.1-7.2-7c0-4,3.3-7.2,7.2-7.2s7.2,3.1,7.2,7.2C21,29.1,17.8,32.2,13.9,32.2
          L13.9,32.2z M13.9,20.2c-2.8,0-5,2.2-5,5c0,2.8,2.3,5,5,5s5-2.3,5-5C18.9,22.4,16.6,20.2,13.9,20.2L13.9,20.2z M13.9,20.2"/>
          <path d="M20.5,56.5H7.3v-6.9H3.1V40c0-3.8,2.4-6.8,5.3-6.8h11.2c2.9,0,5.3,3,5.3,6.8v9.5h-4.2v6.9H20.5z M9.4,54.3
          h9v-6.9h4.2v-7.5c0-2.5-1.4-4.7-3.1-4.7H8.3c-1.7,0-3.1,2.2-3.1,4.7v7.5h4.2V54.3z M9.4,54.3"/>
          <path d="M22.4,19.8v-2.7h-0.8c-0.5,0-1.1-0.4-1.1-1.1V6.6c0-0.5,0.4-1.1,1.1-1.1h15.7c0.5,0,1.1,0.4,1.1,1.1v9.5
          c0,0.5-0.4,1.1-1.1,1.1h-9.8l-3.5,3.5C23.5,21.2,22.4,20.9,22.4,19.8L22.4,19.8z M22.7,15.1h0.8c0.5,0,1.1,0.4,1.1,1.1v1.2
          l1.9-1.9c0.2-0.2,0.4-0.3,0.8-0.3h9.1V7.7H22.7V15.1z M22.7,15.1"/>
        </g>
        </svg>
        </span>

        <span>
        Ser mejores personas
        </span>
        </div>
        <div class="banner__subtitle">
        <span class="normal">
        ¡Súmate a la campaña!<br />
        </span>
        <span style="display:block;margin: 20px auto;">
        <button class="banner__button-cta banner__button-cta--orange"><a href="https://www.youtube.com/watch?v=868wD20iBoE" target="_blank">Ver más</a></button>
        </span>
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
            <polygon points="17.5,10 17.5,50.6 43.7,50.6 43.7,40 83.8,40 83.8,163.8 71.8,163.8 71.8,190 128.5,190
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

  <div class="nuevos-i container-base">
    <div class="row center-xs">


      <!--
        <div class="col-xs-12 col-sm-9 col-md-8 start-xs nuevos-i-title">
        <div class="box">
          <h2>Matrícula 2019</h2>
          <p>Elige la modalidad que más se adecúe a tus necesidades</p>
        </div>
      </div>
      -->

      <div class="row col-xs-12 col-sm-10 colegio-cardsv2">

        <div class="colegio-cardsv2__title">
          <div class="colegio-cardsv2__herotitle"><span>Matrícula<br class="salt"> 2019</span></div>
          <div class="colegio-cardsv2__herosubtitle"><span>Elige la modalidad que más se<br class="salt">adecúe a tus necesidades</span></div>
        </div>

        <div class="colegio-cardsv2-items colegio-cardsv2-items--hovereffect">
          <a href="/colegio/matricula-nuevo" class="colegio-cardsv2-items__item">
              <div class="colegio-cardsv2-items__symbol">
                <span><i class="fa fa-plus"></i></span>
              </div>
              <div class="colegio-cardsv2-items__text">
                <span class="alumno">
                  ALUMNO
                </span>
                <span class="modality">
                  NUEVO
                </span>
              </div>
          </a>

          <a href="/colegio/matricula-traslado" class="colegio-cardsv2-items__item">
              <div class="colegio-cardsv2-items__symbol">
                <span><i class="fa fa-exchange"></i></span>
              </div>
              <div class="colegio-cardsv2-items__text">
                <span class="alumno">
                  ALUMNO
                </span>
                <span class="modality">
                  TRASLADO
                </span>
              </div>
          </a>

          <a href="/colegio/matricula-regular" class="colegio-cardsv2-items__item">
              <div class="colegio-cardsv2-items__symbol">
                <span><i class="fa fa-star"></i></span>
              </div>
              <div class="colegio-cardsv2-items__text">
                <span class="alumno">
                  ALUMNO
                </span>
                <span class="modality">
                  REGULAR
                </span>
                <span class="op">
                  (actual)
                </span>
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
