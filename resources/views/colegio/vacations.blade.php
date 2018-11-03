{{! $breadcrumbs = Breadcrumbs::render('colegio-vacations') }}
@extends('colegio.layouts.template')
@section('title', 'vacaciones útiles')
@section('content')

  <div class="header-double-image">
    <div class="row col-xs-12 header-double-image-desk">
      <img src="{{ url('/static/images/colegio/pages-banners/banner-sedes.jpg') }}" alt="">
    </div>
    <div class="header-double-image-mobile">
      <img src="{{ url('/static/images/colegio/pages-banners/banner-sedes-movil.jpg') }}" alt="">
    </div>
  </div>

  <div class="row col-xs-12 center-xs venue">
    <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">

      <div class="col-xs-12 col-sm container-base venue-info-container">
        <div class="col-xs-12 venue-info-title"><h2 class="colegio">vacaciones</h2></div>
        <div class="row col-xs-12 col-sm-12 table-responsive" id="tableade">


        </div>

      </div>
      <div class="col-xs-12 col-sm map-container">
        <div id="map"></div>
      </div>

    </div>
  </div>


  @include('colegio.partials.card_bottom')
@endsection

@section('scripts')
    page = 'vacations';
  @parent
@endsection
