{{! $breadcrumbs = Breadcrumbs::render('academia-enrollment') }}
@extends('academia.layouts.template')
@section('title', 'Gracias por registrarse - Pre Matrícula en linea')
@section('content')
  <script src='https://www.google.com/recaptcha/api.js'></script>

  <div class="header-double-top">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6"></div>
      <div class="col-xs-12 col-sm-12 col-md-6 header-double-w-2"></div>
      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>Prematrícula</h1>
      </div>
    </div>
  </div>

  <div class="row col-xs-12 center-xs enrollment-finish">
    <div class="col-xs-12 center-xs col-sm-6 center-sm">
      <h2 class="title">Gracias por registrarse</h2>
      <p>
        Puede descargar su ficha de inscripción prematrícula aquí: <br />
        <form action="/academia/matricula-en-linea/descargar-pdf" method="post">
          {{ csrf_field() }}
          <input name="token" type="hidden" value="{{ $dni }}">
          <button type="submit">Descargar PDF</button>
        </form>
      </p>
      
    </div>
  </div>

  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
    page = 'enrollment_finish';
  @parent
@endsection