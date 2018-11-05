{{! $breadcrumbs = Breadcrumbs::render('colegio-vacations') }}
@extends('colegio.layouts.template')
@section('title', 'Vacaciones Útiles')
@section('content')

  <div class="header-vacations">
    <div class="row col-xs-12 end-sm start-xs">
      <div class="row col-sm-11 col-xs-12">
        <div class="row col-sm-4 col-xs-12 start-xs middle-xs">

          <div class="vacations__logo">
            <div class="vacations__container-logo center-xs">
              <img src="{{asset('static/images/colegio/vacations/logo.png')}}" alt="Vacaciones Útiles">
            </div>
            @include('colegio.partials.vacations.selects')
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


  <div class="row col-xs-12 center-xs container-base">
    <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">

      <div class="col-xs-12 col-sm">
        <div class="col-xs-12 center-xs vacations__home-container">
          <h1 class="vacations_starth1"><i class="fa fa-lightbulb-o"></i> Inicios: 4, 7 y 8 de enero</h1>
          <h2 class="vacations_starth2">Fin: 21 de febrero</h2>
        </div>
      </div>

    </div>
  </div>



  @include('colegio.partials.card_bottom')
@endsection

@section('scripts')
    page = 'vacations';
  @parent
@endsection
