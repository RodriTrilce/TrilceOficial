{{! $breadcrumbs = Breadcrumbs::render('colegio-index') }}

@extends('colegio.layouts.template')
@section('title', '')
@section('content')

@include('colegio.partials.modal.ads')

  <div class="banner__loader">
    <div class="banner__loader-title"></div>
    <div class="banner__loader-line"></div>
    <div class="banner__loader-line"></div>
  </div>

  <div class="index-banners index-banners--colegio">
    {{--@include('colegio.partials.banners.all')--}}
    
    @foreach ($banners as $banner)
      @if( (strtotime($banner->start) < time()) && (strtotime($banner->expire) > time()) )

        {!! $banner->content !!}

      @endif
    @endforeach    
  </div>

  <div class="nuevos-i container-base">
    <div class="row center-xs">
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
    var modal_open = [
      '#modal-ads',
    ];
    
    @parent
@endsection
