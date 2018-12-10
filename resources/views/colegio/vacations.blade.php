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

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row col-xs-12 center-xs container-base vacations__container">
    <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">

      <link href=/storage/other/landing-static/vacations/css/app.47aa68d5.css rel=preload as=style>
      <link href=/storage/other/landing-static/vacations/js/app.f39b53f3.js rel=preload as=script>
      <link href=/storage/other/landing-static/vacations/js/chunk-vendors.b8d42ec7.js rel=preload as=script>
      <link href=/storage/other/landing-static/vacations/css/app.47aa68d5.css rel=stylesheet>

      <div class="col-xs-12 landing__title">
      		<h1>¿Buscas más información? ¡Escríbenos!</h1>
    	</div>

      <div class="row col-xs-12">
        <div class="row col-xs-12 xs-hide col-sm-3 vacations__image-container">
          <img class="vacations__image-girl" src="{{asset('static/images/colegio/vacations/girl-vacations-home.png')}}" alt="Vacaciones útiles">
        </div>
        <div class="col-xs-12 col-sm-9">
          <div id=app></div>
          <script src="https://www.google.com/recaptcha/api.js?onload=vueRecaptchaApiLoaded&render=explicit" async defer></script><script src=/storage/other/landing-static/vacations/js/chunk-vendors.b8d42ec7.js></script><script src=/storage/other/landing-static/vacations/js/app.f39b53f3.js></script>
        </div>
      </div>

      <div class="col-xs-12">
        <div class="col-xs-12 center-xs vacations__home-container">
          <h1 class="vacations_starth1"><i class="fa fa-lightbulb-o"></i> Inicios: desde el 4 de enero</h1>
          <h2 class="vacations_starth2">Fin: hasta el 21 de febrero</h2>
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
