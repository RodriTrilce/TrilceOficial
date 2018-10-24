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

  <div class="index-banners">
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

        data-image-md="http://www.trilce.edu.pe/tt_nina.png"
        data-position-md="80% bottom"
        data-size-md="contain"

        data-image-xs="http://www.trilce.edu.pe/tt_nina.png"
        data-position-xs="bottom right"
        data-size-xs="58vw"

        style="
        background-repeat: no-repeat;
        z-index: 11;
        "></div>

        <div class="banner_box-bar" style="width:10px; z-index: 10;"></div>
        <div class="banner__box"  style="border-color:#f4633a;border-width:10px; z-index: 10;"></div>

        <div class="banner__content
        banner__content--colegio
        banner__content--mobile-padding-left
        " style="z-index:11;">
          <div class="banner__title">
            <span>
              <style>
                .b1__birrete{
                  max-width: 80px;
                  fill: #f4633a;
                  display: block;
                }

                @media (max-width: 765px){
                  .b1__birrete{
                    max-width: 40px;
                  }
                }
              </style>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" class="b1__birrete" x="0px" y="0px" viewBox="0 0 42.672 42.672" xml:space="preserve">
              	<g>
              		<path d="M38.729,25.815v-4.09l3.943-2.179L21.337,8.151L0,19.547l8.506,4.94v2.909v0.229c0.023-0.012,0.052-0.023,0.077-0.035    c-0.091,0.125-0.15,0.247-0.15,0.375c0,1.428,5.774,2.592,12.904,2.592c7.126,0,12.906-1.164,12.906-2.592    c0-0.128-0.062-0.25-0.15-0.375c0.025,0.015,0.054,0.023,0.076,0.035v-0.229v-2.917l3.711-2.283v3.619    c-0.405,0.166-0.69,0.568-0.69,1.034c0,0.616,0.499,1.116,1.114,1.116c0.621,0,1.119-0.5,1.119-1.116    C39.423,26.383,39.139,25.981,38.729,25.815z M21.337,29.574c-6.327,0-11.453-0.722-11.453-1.608s5.126-1.606,11.453-1.606    c6.324,0,11.452,0.72,11.452,1.606S27.661,29.574,21.337,29.574z M33.89,22.103c-0.85-0.909-3.908-3.295-12.553-3.295    c-8.65,0-11.703,2.388-12.552,3.298v-0.864c0,0,2.476-3.717,12.552-3.717c10.075,0,12.553,3.717,12.553,3.717V22.103z"/>
              		<path d="M37.4,28.194l-0.468,6.328c1.36-2.109,2.481-1.314,2.481-1.314v-5.014C37.963,28.757,37.4,28.194,37.4,28.194z"/>
              	</g>
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

        data-image-md="http://www.trilce.edu.pe/tt_arbol.png"
        data-position-md="right bottom"
        data-size-md="contain"

        data-image-xs="http://www.trilce.edu.pe/tt_arbol.png"
        data-position-xs="40vw bottom"
        data-size-xs="85vw"

        style="
        background-repeat: no-repeat;
        z-index: 12;
        "></div>

        <div class="banner_box-bar" style="width:10px; z-index:11;"></div>
        <div class="banner__box"  style="border-color:#f4633a;border-width:10px; z-index:11;"></div>

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
        class="banner__image"

        data-image-md="/storage/static/images/banner/ogro/banner_19_octubre_500x500.png"
        data-position-md="center bottom"
        data-size-md="26%"

        data-image-xs="/storage/static/images/banner/ogro/banner_19_octubre_250x250.png"
        data-position-xs="bottom right"
        data-size-xs="53vw"

        style="
        background-repeat: no-repeat;
        z-index: 11;
        "></div>

        <div class="banner_box-bar" style="width:10px; z-index: 10;"></div>
        <div class="banner__box"  style="border-color:#f4633a;border-width:10px; z-index: 10;"></div>

        <div class="banner__content
        banner__content--colegio
        banner__content--mobile-padding-left
        " style="z-index:11;">

            <br>
            <div class="banner__title">
              <span>
                Tablet gratuita
              </span>
            </div>
            <div class="banner__subtitle">
              <span class="normal">
                Contribuyendo con el medio ambiente<br>
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
        data-size-md="26%"

        data-image-xs="/storage/static/images/banner/ogro/banner_sumate_19_octubre_250x250.png"
        data-position-xs="bottom right"
        data-size-xs="50vw"

        style="
        background-repeat: no-repeat;
        z-index: 11;
        "></div>

        <div class="banner_box-bar" style="width:10px; z-index: 10;"></div>
        <div class="banner__box"  style="border-color:#f4633a;border-width:10px; z-index: 10;"></div>

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
              ¡Súmate a la campaña!
            </span>
          </div>
          <div class="banner__subtitle">
            <span class="normal">
              Ser mejores personas<br />
            </span>
            <span style="display:block;margin: 20px auto;">
              <button class="banner__button-cta banner__button-cta--orange"><a href="https://www.youtube.com/watch?v=_LZUrX_RRzQ" target="_blank">Ver más</a></button>
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
          data-shadow-opacity=".15"
          data-bordercolor="#f4633a"

          style="
            background-color: #ffffff;
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
        <div class="banner__box"  style="border-color:#f4633a;border-width:10px; z-index:11;"></div>

        <div class="
        banner__content
        banner__content--colegio
        " style="z-index:13;">
          <div class="banner__style_primer banner__style_primer--colegio xs-hide">
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
              <span>San Marcos</span>
            </div>

          </div>

        </div>
          <div class="banner__style_primer-reverse banner__style_primer--colegio">
            <div class="banner__title">
              <span>1.<sup>er</sup> puesto<br >San&nbsp;Marcos</span>
            </div>
            <div class="banner__subtitle">
              <span class="normal">
                Diego Castillo Utani<br>
              </span>
              <span class="small">
                ingeniería Ambiental
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
          data-shadow-opacity=".15"
          data-bordercolor="#f4633a"

          style="
            background-color: #ffffff;
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
        <div class="banner__box"  style="border-color:#f4633a;border-width:10px; z-index:11;"></div>

        <div class="
        banner__content
        banner__content--colegio
        " style="z-index:13;">
          <div class="banner__style_primer banner__style_primer--colegio xs-hide">
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

        </div>
          <div class="banner__style_primer-reverse banner__style_primer--colegio">
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
          data-shadow-opacity=".15"
          data-bordercolor="#f4633a"

          style="
            background-color: #ffffff;
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
        <div class="banner__box"  style="border-color:#f4633a;border-width:10px; z-index:11;"></div>

        <div class="
        banner__content
        banner__content--colegio
        " style="z-index:13;">
          <div class="banner__style_primer banner__style_primer--colegio xs-hide">
          <div class="banner__style_primer__a">
            <div class="banner__title">
              <span>¡Felicitaciones,<br>Cachimbo!</span>
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

  <div class="nuevos-i container-base">
    <div class="row center-xs">
      <div class="col-xs-12 col-sm-9 col-md-8 start-xs nuevos-i-title">
        <div class="box">
          <h2>Matrícula 2019</h2>
          <p>Elige la modalidad que más se adecúe a tus necesidades</p>
        </div>
      </div>

      <div class="row col-xs-12 col-sm-10 between-xs center-sm nuevos-i-box nuevos-colegio block-effecthover">
        <div class="col-xs block-effecthover-item">
          <a href="/colegio/matricula-nuevo">
            <div class="nuevos-i-top">
              <img src="{{ url('static/images/colegio/svg/ico-admision-01.svg') }}" alt="UNI">
              <h3>Alumno <div class="modality modality-blue">nuevo</div></h3>
            </div>
          </a>
        </div>
        <div class="col-xs block-effecthover-item">
          <a href="/colegio/matricula-traslado">
            <div class="nuevos-i-top">
              <img src="{{ url('static/images/colegio/svg/ico-admision-02.svg') }}" alt="UNMSM">
              <h3>Alumno <div class="modality modality-yellow">traslado</div></h3>
            </div>
          </a>
        </div>
        <div class="col-xs block-effecthover-item">
          <a href="/colegio/matricula-regular">
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
