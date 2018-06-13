{{! $breadcrumbs = Breadcrumbs::render('colegio-aboutus') }}
@extends('colegio.layouts.template')
@section('title', 'Acerca de Nosotros')
@section('content')

  <div class="header-double-image">
    <div class="row col-xs-12 header-double-image-desk">
      <img src="{{ url('/static/images/colegio/pages-banners/banner-nosotros.jpg') }}" alt="">
    </div>
    <div class="header-double-image-mobile">
      <img src="{{ url('/static/images/colegio/pages-banners/banner-nosotros-movil.jpg') }}" alt="">
    </div>
  </div>



  <div class="row col-xs-12 center-xs about-container container-base">
    <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">

      <!-- block a -->
      <div class="row col-xs-12 about-blocka">
        <div class="col-xs-12 col-sm-3 about-blocka--image">
          <img src="/static/images/colegio/about-image-01.jpg" alt="Sobre nosotros">
        </div>
        <div class="col-xs-12 col-sm about-blocka--history">
          <h1 class="about-blocka--history-title">Nuestra historia</h1>
          texto
        </div>
      </div>



    </div>
  </div>


  <hr class="grayhr2 xs-hide" />

  @include('colegio.partials.card_bottom')
@endsection

@section('scripts')
    page = 'about_us';
  @parent
@endsection
