{{! $breadcrumbs = Breadcrumbs::render('academia-enrollment') }}
@extends('academia.layouts.template')
@section('title', 'Pre Matrícula en linea')
@section('content')
  <script src='https://www.google.com/recaptcha/api.js'></script>

  <div class="header-double-top">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6"></div>
      <div class="col-xs-12 col-sm-12 col-md-6 header-double-w-2"></div>
      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>Pre-matrícula</h1>
      </div>
    </div>
  </div>

  <div class="row col-xs-12 center-xs enrollment-finish">
    <div class="col-xs-12 center-xs col-sm-6 center-sm">
      <h2 class="title">Gracias por registrarse</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem a repudiandae, quas iure. Magnam culpa voluptas, fugiat similique deserunt quidem facere, veniam voluptatibus sit, consequuntur enim quos at illo voluptatum.</p>
      
    </div>
  </div>

  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
    page = 'enrollment_finish';
  @parent
@endsection