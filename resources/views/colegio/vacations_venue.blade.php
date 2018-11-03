{{! $breadcrumbs = Breadcrumbs::render('colegio-vacations-venue', $data->name, $data->slug) }}
@extends('colegio.layouts.template')
@section('title', $data->name)
@section('content')

  <div class="header-vacations">
    <div class="row col-xs-12 end-sm start-xs">
      <div class="row col-sm-11 col-xs-12">
        <div class="row col-sm-4 col-xs-12 start-xs middle-xs">

          <div class="vacations__logo">
            <div class="vacations__container-logo center-xs">
              <img src="{{asset('static/images/colegio/vacations/logo.png')}}" alt="Vacaciones Útiles">
            </div>
            <div class="vacations__txt"><span>Elige la sede de tu preferencia</span></div>
            <div class="vacations__select"></div>
          </div>

        </div>
        <div class="col-sm start-xs xs-hide">
          <div class="vacations__slider" id="vacations_slider">
            <div>
              <img src="{{asset('static/images/colegio/vacations/slider_1.png')}}" alt="Vacaciones Útiles">
            </div>

            <div>
              <img src="{{asset('static/images/colegio/vacations/slider_1.png')}}" alt="Vacaciones Útiles">
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="row col-xs-12 center-xs venue">
    <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">

      <div class="col-xs-12 col-sm container-base venue-info-container">
        <div class="col-xs-12 venue-info-title"><h2 class="colegio">{{ $data->name}}</h2></div>
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
    page = 'vacations_venue';
  @parent
@endsection
